<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Team::limit(10)->get();
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

            $team = Team::create([
                'name' =>$request->name,
                'position' =>$request->position,
                'img' => $path ?? null,
            ]);

            return response(['success' => 'Yangilik muvofaqiyatli qoshildi.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return $team ;
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
    public function destroy(Team $team)
    {

        $team->delete();

        return "Malumotlar muvofaqiyatli o`chirildi";
    }
}
