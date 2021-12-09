<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uraian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['intervensi'];

    public function intervensi()
    {
        return $this->belongsTo(Intervensi::class, 'intervensi_id');
    }
}
