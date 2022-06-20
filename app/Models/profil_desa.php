<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class profil_desa extends Model
{
    use HasFactory;
    
    protected $table = 'profil_desas';

    protected $fillable = [
        'foto_desa',
        'nama_desa',
        'sejarah',
        'visi',
        'misi',
        'user_id'
    ];

    protected $hidden = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
