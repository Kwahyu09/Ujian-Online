<?php

namespace App\Models;

use App\Models\Soal;
use App\Models\Mapel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grupsoal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function soal()
    {
        return $this->hasMany(Soal::class);
    }
}
