<?php

namespace App\Models;

use App\Models\User;
use App\Models\Grupsoal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Mapel extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ??  false, function($query, $search){
            return $query->where('nama_mapel', 'like', '%' . $search . '%')
            ->orWhere('user_id', 'like', '%' . $search . '%');
        });
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($mapel) {
            $mapel->grupsoal()->delete(); // Hapus data ujian yang berelasi
        });
    }

    public function grupsoal()
    {
        return $this->hasMany(Grupsoal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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
                'source' => 'nama_mapel'
            ]
        ];
    }
}
