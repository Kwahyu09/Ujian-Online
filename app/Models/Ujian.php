<?php

namespace App\Models;

use App\Models\Hasilujian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Ujian extends Model
{
    use HasFactory;
    use Sluggable;

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
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }
    public function simpanujian()
    {
        return $this->hasOne(SimpanUjian::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function grup_soal()
    {
        return $this->hasOne(Grup_soal::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_ujian'
            ]
        ];
    }
}
