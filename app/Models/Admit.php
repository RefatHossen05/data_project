<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admit extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function patient(){
        return $this->belongsTo(Patient::class,'patient_id','id');
    }
    public function bed(){
        return $this->belongsTo(Bed::class,'bed_id','id');
    }
    public function room(){
        return $this->belongsTo(Room::class,'room_id','id');
    }
    public function ward(){
        return $this->belongsTo(Word::class,'ward_id','id');
    }


}
