<?php

namespace App\Models;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['kelas'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ??  false, function($query, $search){
            return $query->where('nik', 'like', '%' . $search . '%')
                  ->orWhere('nama', 'like', '%' . $search . '%')
                  ->orWhere('alamat', 'like', '%' . $search . '%')
                  ->orWhere('tempat_lahir', 'like', '%' . $search . '%')
                  ->orWhere('tanggal_lahir', 'like', '%' . $search . '%')
                  ->orWhere('jenis_kel', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%');
        });
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
