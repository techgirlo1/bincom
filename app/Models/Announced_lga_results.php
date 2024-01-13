<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announced_lga_results extends Model
{
    use HasFactory;

    public function lga()
    {
        return $this->belongsTo(Lga::class,'lga_name','name');
    }

    protected $guarded=[];
   
}
