<?php

namespace App\Models;

use App\Models\Ujian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hasilujian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ujian()
    {
        return $this->belongsTo(Ujian::class);
    }
}
