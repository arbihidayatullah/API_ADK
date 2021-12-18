<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_data extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['data'];

    public function data()
    {
        return $this->belongsTo(Data::class, 'data_id');
    }
}