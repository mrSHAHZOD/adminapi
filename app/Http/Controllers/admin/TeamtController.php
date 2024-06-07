<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamtController extends Controller
{/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = Team::get();
        return view('admin.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
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

        if($request->hasFile('img'))
            $requestData['img'] = $this->upload_file();

        team::create($requestData);

        return redirect()->route('admin.team.index')->with('success', 'Yangilik qo`shildi');

    }

    /**
     * Display the specified resource.
     */
    public function show(team $team)
    {
        return view('admin.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, team $team)
    {
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $this->unlink_file($team);

            $requestData['img'] = $this->upload_file();
        }

        $team->update($requestData);

        return redirect()->route('admin.team.index')->with('success', 'Ma`lumot tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(team $team)
    {

        $team->delete();

        return redirect()->route('admin.team.index')->with('danger', 'O`chirildi !');
    }

    public function unlink_file(team $team){
        if(isset($team->img) && file_exists(public_path('/images/'.$team->img)))
        {
            unlink(public_path('/images/'.$team->img));
        }
    }

    public function upload_file(){
        $file = request()->file('img');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('images/', $fileName);
        return $fileName;
    }
}
