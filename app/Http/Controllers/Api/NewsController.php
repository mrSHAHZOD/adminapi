<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\News;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return News::limit(10)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,News $news)
    {
        if($request->hasFile('img')){
        $name = $request ->file('img')->getClientOriginalName();
        $path = $request->file('img')->move( $name);
    }

        $news = News::create([
            'title_uz' =>$request->title_uz,
            'description_uz' =>$request->description_uz,
            'img' => $path ?? null,
        ]);

        return response(['success' => 'Yangilik muvofaqiyatli qoshildi.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return $news;
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
    public function destroy(News $news)
    {
        $news->delete();

        return "Malumotlar muvofaqiyatli o`chirildi";
    }
}
