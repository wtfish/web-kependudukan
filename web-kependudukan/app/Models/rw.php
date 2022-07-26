<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rw extends Model
{
    protected $guarded=["id"];
    use HasFactory;
    public function rt()
    {
        return $this->hasMany(rt::class, "rw_id");
    }
    public function dusun(){
        return $this->belongsTo(dusun::class, "dusun_id");
    }
}
