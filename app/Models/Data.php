<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['tipe', 'diagnosa'];

    public function tipe()
    {
        return $this->belongsTo(Tipe::class, 'tipe_id');
    }
    
    public function diagnosa()
    {
        return $this->belongsTo(Diagnosa::class);
    }
}