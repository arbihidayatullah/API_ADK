<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervensi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['diagnosa'];

    public function diagnosa()
    {
        return $this->belongsTo(Diagnosa::class, 'diagnosa_id');
    }

    public function uraian()
    {
        return $this->hasMany(Uraian::class);
    }
}
