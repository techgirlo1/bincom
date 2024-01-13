<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lga;
class LgaController extends Controller
{
    public function fetchLGA(){
        $lgas=Lga::get();
        return view('inec.Alllga', compact('lgas')); 
   }
}
