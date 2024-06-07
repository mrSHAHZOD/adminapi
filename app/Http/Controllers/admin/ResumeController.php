<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $resume = Resume::all();
        return view('admin.resume.index', compact('resume'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('admin.resume.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            // 'title_uz' => 'required',
            'img' => 'mimes:png,jpg,pdf'
        ]);

        $requestData = $request->all();

        if($request->hasFile('img')) {
            $requestData['img'] = $this->handleFileUpload($request, 'img', 'images/');
        }

        Resume::create($requestData);

        return redirect()->route('admin.resume.index')->with('success', 'Yangilik qo`shildi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Resume $resume)
    {


        return view('admin.resume.show', compact('resume'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resume $resume)
    {
        if ($resume->status == 0) {
            $resume->update(['status' => 1]);
        }
        return view('admin.resume.edit', compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        $request->validate([
            'img' => 'mimes:png,jpg,pdf'
        ]);

        $requestData = $request->all();

        if($request->hasFile('img')) {
            $this->handleFileDeletion($resume->img, 'images/');
            $requestData['img'] = $this->handleFileUpload($request, 'img', 'images/');
        }
        $resume->update($requestData);

        return redirect()->route('admin.resume.index')->with('success', 'Ma`lumot tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        $this->handleFileDeletion($resume->img, 'images/');
        $resume->delete();

        return redirect()->route('admin.resume.index')->with('danger', 'O`chirildi !');
    }

    /**
     * Handle file deletion.
     */
    private function handleFileDeletion($fileName, $directory)
    {
        if($fileName && Storage::exists($directory . $fileName)) {
            Storage::delete($directory . $fileName);
        }
    }

    /**
     * Handle file upload.
     */
    private function handleFileUpload(Request $request, $fieldName, $directory)
    {
        $file = $request->file($fieldName);
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path($directory), $fileName);
        return $fileName;
    }
}
