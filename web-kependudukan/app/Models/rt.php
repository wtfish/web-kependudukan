<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rt extends Model
{
    protected $guarded = ["id"];
    use HasFactory;
    public function penduduk()
    {
        return $this->hasMany(Penduduk::class, "rt_id");
    }
    public function rw()
    {
        return $this->belongsTo(rw::class, "rw_id");
    }
}
