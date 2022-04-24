<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambah extends Model
{
    use HasFactory;

    protected $fillable = ['name','activity', 'user_id'];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
