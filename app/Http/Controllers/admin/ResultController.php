<?php

namespace App\Http\Controllers\admin;
use App\Models\Result;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Result::paginate(8);
        return view('admin.result.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.result.create');
    }

    /**
     * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $request->validate([
            /* 'title_uz' => 'required', */
            'img' => 'mimes:png,jpg'
        ]);

        if ($request->hasFile('img'))
            $requestData['img'] = $this->upload_file();

        Result::create($requestData);

        return redirect()->route('admin.result.index')->with('success', 'Yangilik qo`shildi');


    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        return view('admin.result.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result)
    {
        return view('admin.result.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Result $result)
    {

        $requestData = $request->all();

        if ($request->hasFile('img')) {
            $this->unlink_file($result);

            $requestData['img'] = $this->upload_file();
        }

        $result->update($requestData);
        return redirect()->route('admin.result.index')->with('success', 'Ma`lumot tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        $result->delete();

        return redirect()->route('admin.result.index')->with('danger', 'O`chirildi !');
    }

    public function unlink_file(Result $result)
    {
        if (isset($result->img) && file_exists(public_path('/images/' . $result->img))) {
            unlink(public_path('/images/' . $result->img));
        }
    }

    public function upload_file()
    {
        $file = request()->file('img');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move('images/', $fileName);
        return $fileName;
    }
}






