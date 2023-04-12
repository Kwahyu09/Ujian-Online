<?php

namespace App\Models;

use App\Models\Grupsoal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Soal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function grupsoal()
    {
        return $this->belongsTo(Grupsoal::class);
    }
}
