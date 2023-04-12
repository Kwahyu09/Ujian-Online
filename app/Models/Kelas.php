<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ??  false, function($query, $search){
            return $query->where('nama_kelas', 'like', '%' . $search . '%')
                  ->orWhere('tahun', 'like', '%' . $search . '%')
                  ->orWhere('singkat_jur', 'like', '%' . $search . '%')
                  ->orWhere('jurusan', 'like', '%' . $search . '%');
        });
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
