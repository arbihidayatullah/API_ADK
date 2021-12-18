<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['riwayat_data', 'riwayat_uraian', 'intervensi'];

    public function riwayat_data()
    {
        return $this->hasMany(Riwayat_data::class);
    }
    
    public function riwayat_uraian()
    {
        return $this->hasMany(Riwayat_uraian::class);
    }

    public function intervensi()
    {
        return $this->belongsTo(Intervensi::class);
    }
}