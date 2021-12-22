<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uraian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['intervensi', 'kategori_uraian'];

    public function intervensi()
    {
        return $this->belongsTo(Intervensi::class);
    }

    public function kategori_uraian()
    {
        return $this->belongsTo(Kategori_uraian::class, 'kategori_id');
    }
}