<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Kelas extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    // protected $with = ['siswa'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ??  false, function($query, $search){
            return $query->where('nama_kelas', 'like', '%' . $search . '%')
                  ->orWhere('tahun', 'like', '%' . $search . '%')
                  ->orWhere('singkat_jur', 'like', '%' . $search . '%')
                  ->orWhere('jurusan', 'like', '%' . $search . '%');
        });
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($kelas) {
            $kelas->user()->delete(); // Hapus data ujian yang berelasi
        });
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
    
    public function ujian()
    {
        return $this->hasMany(ujian::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_kelas'
            ]
        ];
    }
}
