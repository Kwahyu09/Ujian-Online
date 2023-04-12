<?php

namespace App\Models;

use App\Models\Grupsoal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mapel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ??  false, function($query, $search){
            return $query->where('nama_mapel', 'like', '%' . $search . '%');
        });
    }

    public function grupsoal()
    {
        return $this->hasMany(Grupsoal::class);
    }
}
