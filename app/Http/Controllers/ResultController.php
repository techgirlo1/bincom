<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announced_lga_results;
use App\Models\Lga;
class ResultController extends Controller
{
    

    



public function getMultipleLgaResult(Request $request)
{
    $selectedLgas = $request->input('lga_name', []);
    $selectedLgas = is_array($selectedLgas) ? $selectedLgas : explode(',', $selectedLgas);
    $totalResult= Announced_lga_results::join('lgas', 'announced_lga_results.lga_name', '=', 'lgas.lga_id')
        ->whereIn('lgas.lga_name', $selectedLgas)
        ->get(['announced_lga_results.*', 'lgas.lga_name as actual_lga_name']);

    return view('inec.multipleResult', compact('selectedLgas', 'totalResult'));
}

}