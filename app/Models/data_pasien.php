<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pasien extends Model
{
    use HasFactory;

    protected $fillable = ['id_pasien','nama_pasien','umur','alamat'];

     public function user(){

         return $this->belongsTo(User::class);
     }
}
