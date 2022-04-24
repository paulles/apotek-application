<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_periksa extends Model
{
    use HasFactory;

    protected $fillable = ['id_periksa','tgl_periksa','id_dokter','id_pasien','hsl_diagnosa','id_obat'];
    
}
