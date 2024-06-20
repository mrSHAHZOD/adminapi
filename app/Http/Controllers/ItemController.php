<?php

namespace App\Http\Controllers;
use App\Models\Resume;
use PDF;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    protected $taskMappings = [
        "1" => "Fahrdienst",
        "2" => "Kurier",
        "3" => "Metallurgische Industrie",
        "4" => "Babysitter-Service",
        "5" => "Kochservice",
        "6" => "IT-Technologie",
        "7" => "Bauservice",
        "8" => "Eisenbahnbau",
        "9" => "Mechatroniker",
        "10" => "Tekistil-Bereich",
        "11" => "Kosmetologie",
        "12" => "Handelssektor",
        "13" => "Catering, Gastronomie",
        "14" => "Tourismus Industrie",
        "15" => "Landwirtschaftssektor",
        "16" => "Medizinisches Personal der mittleren Ebene",
        "17" => "Elektrizität",
        "18" => "Anderes Feld"
    ];

     public function show($id)
     {
         $item = Resume::findOrFail($id);

         $task = $item->task;
         $mappedTask = $this->taskMappings[$task] ?? 'Unbekannt';

         return view('items.show', compact('item', 'mappedTask'));
     }

    public function downloadPDF($id)
    {
        $item = Resume::findOrFail($id);

        $task = $item->task;
        $mappedTask = $this->taskMappings[$task] ?? 'Unbekannt';

        $pdf = PDF::loadView('items.pdf', compact('item', 'mappedTask'));
        return $pdf->download('item.pdf');

       /*  $pdf = PDF::loadView('items.pdf', compact('item', 'mappedTask'))->setPaper([0, 0, 612, 792]);

        return $pdf->download('lebenslauf.pdf');
 */
    }
}



