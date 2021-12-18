<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_uraian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['uraian'];

    public function uraian()
    {
        return $this->belongsTo(Uraian::class, 'uraian_id');
    }

}