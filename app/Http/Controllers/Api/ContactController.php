<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Contact::limit(10)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Contact $contact)
    {
        $contact = Contact::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'age' =>$request->age,
            'description_uz' =>$request->description_uz,

        ]);

        return response(['success' => 'Blog muvofaqiyatli qoshildi.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return $contact;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return  "Malumot muvofaqiyatli ochirildi";
    }
}
