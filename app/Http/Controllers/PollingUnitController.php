<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announced_pu_results;
class PollingUnitController extends Controller
{
    public function pollingunitresult(){
        $pollingunit=Announced_pu_results::paginate(6);
        return view('inec.index',compact('pollingunit'));
    }


    public function addPuResult(Request $request){
        $request->validate([
            'polling_unit_uniqueid'=>'required',
            'party_abbreviation'=>'required',
            'party_score'=>'required',
            'entered_by_user'=>'required'
       ]);

       $user_ip_address= $_SERVER['REMOTE_ADDR'];
       date_default_timezone_set('Africa/Lagos');
       $result=Announced_pu_results::insert([
        
        'polling_unit_uniqueid'=>$request->polling_unit_uniqueid,
        'party_abbreviation'=>$request->party_abbreviation,
        'party_score'=>$request->party_score,
        'entered_by_user'=>$request->entered_by_user,
        'user_ip_address'=>$user_ip_address,
       ]);


       

    
    return Redirect()->route('pollingresult')->with("success","PU Result Added Successfully");

       
    }
}
