<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status_perkawinan extends Model
{
    protected $guarded=["id"];
    use HasFactory;

    public function penduduk(){
        return $this->hasMany(Penduduk::class,"status_id");
    }
}
