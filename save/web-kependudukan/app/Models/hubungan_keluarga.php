<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hubungan_keluarga extends Model
{
    protected $guarded=["id"];
    use HasFactory;
    public function penduduk(){
        return $this->hasMany(Penduduk::class,"hubungan_id");
    }
}