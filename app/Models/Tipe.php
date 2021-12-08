<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;

    public function data()
    {
        return $this->hasMany(Data::class);
    }
    public function diagnosa()
    {
        return $this->hasMany(Diagnosa::class);
    }
}
