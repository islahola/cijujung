<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class struktur_pemerintahan_desa extends Model
{
    use HasFactory;

    protected $table = 'struktur_pemerintahan_desas';

    protected $fillable = [
        'foto_pengurus',
        'nama',
        'jabatan',
        'tempat_lahir',
        'tanggal_lahir',
        'pendidikan',
        'nip',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
