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
    public function store(Request $request)
    {
        if($request->hasFile('img')){
            $name = $request ->file('img')->getClientOriginalName();
            $path = $request->file('img')->move('images', $name);
        }
        
        $news = News::create([
            'title_uz' =>$request->title_uz,
            'title_ru' =>$request->title_ru,
            'title_en' =>$request->title_en,
            'content_uz' =>$request->content_uz,
            'content_ru' =>$request->content_ru,
            'content_en' =>$request->content_en,
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
