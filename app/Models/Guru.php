<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ??  false, function($query, $search){
            return $query->where('nip', 'like', '%' . $search . '%')
                  ->orWhere('nama_guru', 'like', '%' . $search . '%')
                  ->orWhere('gelar', 'like', '%' . $search . '%')
                  ->orWhere('pendidikan', 'like', '%' . $search . '%')
                  ->orWhere('jenis_kelamin', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%')
                  ->orWhere('jurusan', 'like', '%' . $search . '%');
        });
    }
}
