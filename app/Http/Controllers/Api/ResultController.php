<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Result::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('img')){
            $name = $request ->file('img')->getClientOriginalName();
            $path = $request->file('img')->move('images', $name);
        }

        $result = Result::create([
            'user' =>$request->user,
            'comment' =>$request->comment,
            't_tok' =>$request->t_tok,
            't_id' =>$request->t_id,
            'img' => $path ?? null,
        ]);

        return response(['success' => 'Yangilik muvofaqiyatli qoshildi.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        return $result;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        $result->delete();

        return "Malumotlar muvofaqiyatli o`chirildi";

    }
}
