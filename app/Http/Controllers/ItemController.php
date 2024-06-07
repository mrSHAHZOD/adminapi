<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use PDF;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show($id)
    {
        $item = Resume::findOrFail($id);
        return view('items.show', compact('item'));
    }

    public function downloadPDF($id)
    {
        $item = Resume::findOrFail($id);
        $pdf = PDF::loadView('items.pdf', compact('item'));
        return $pdf->download('item.pdf');
    }
}






