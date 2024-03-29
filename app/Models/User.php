<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\Grupsoal;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($user) {
            $user->ujian()->delete(); // Hapus data ujian yang berelasi
            $user->mapel()->delete(); // Hapus data modul yang berelasi
            $user->grupsoal()->delete(); // Hapus data modul yang berelasi
        });
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ??  false, function($query, $search){
            return $query->where('username', 'like', '%' . $search . '%')
                ->orWhere('nik', 'like', '%' . $search . '%')
                ->orWhere('nama', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%');
        });
    }

    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }
    public function grupsoal()
    {
        return $this->hasMany(Grupsoal::class);
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function ujian()
    {
        return $this->hasMany(Ujian::class);
    }
}
