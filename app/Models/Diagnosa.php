<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['tipe'];

    public function tipe()
    {
        return $this->belongsTo(Tipe::class, 'tipe_id');
    }

    public function intervensi()
    {
        return $this->hasMany(Intervensi::class);
    }
}
