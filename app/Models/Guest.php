<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $guarded = ['id']; // yang tidak boleh di isi oleh user 
    protected $nullable = ['tanggal_checkout'];// membuat suatu field boleh tidak di 
    
    public function PetugasCheckin(){
        return $this->belongsTo(User::class, 'petugas_checkin','id');
        // model ini dimiliki oleh user atau satu user petugas
    }

    public function PetugasCheckout(){
        return $this->belongsTo(User::class,'petugas_checkout','id');
        // model ini dmiliki oleh user satu atau satu pengguna
    }
   
}
