<?php

namespace App\Models;

use App\Models\Hasilujian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ujian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ??  false, function($query, $search){
            return $query->where('nama_ujian', 'like', '%' . $search . '%')
                  ->orWhere('mapel', 'like', '%' . $search . '%')
                  ->orWhere('kelas', 'like', '%' . $search . '%')
                  ->orWhere('tanggal', 'like', '%' . $search . '%')
                  ->orWhere('waktu_mulai', 'like', '%' . $search . '%')
                  ->orWhere('waktu_selesai', 'like', '%' . $search . '%')
                  ->orWhere('grup_Soal', 'like', '%' . $search . '%');
        });
    }
    
    public function hasilujian()
    {
        return $this->hasOne(Hasilujian::class);
    }
}
