<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Satker;

class SatkerController extends Controller
{
    public function index()
    {
        $satkers = Satker::select('id','namasatker','realisasi','Anggaran')->get();

        $dataPoints = [];



        foreach ($satkers as $satker) {
            $dataPoints[] = array(
                "name" => $satker['namasatker'],
                "data" => [
                doubleval($satker['realisasi']),
                doubleval($satker['Anggaran']),
                doubleval($satker['Anggaran'] -=$satker['realisasi']),

            ],
        );
        }

        return view ("satker", [
            "data" => json_encode($dataPoints),
            "terms" => json_encode(array(
                "realisasi",
                "anggaran",
                "sisa anggaran"
            )),
        ]);
    }
}
