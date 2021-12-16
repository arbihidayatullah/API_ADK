<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_uraian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['akun', 'uraian', 'data'];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'user_id');
    }

    public function uraian()
    {
        return $this->belongsTo(Uraian::class, 'uraian_id');
    }

    public function data()
    {
        return $this->belongsTo(Data::class, 'data_id');
    }
}
