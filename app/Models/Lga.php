<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    use HasFactory;


    
public function lgaResults()
{
    return $this->hasMany(Announced_lga_results::class,'lga_name','name');
}

protected $guarded=[];

}
