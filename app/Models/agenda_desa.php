<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class agenda_desa extends Model
{
    use HasFactory;

    protected $table = "agenda_desas";
    
    protected $fillable = [
        "nama_agenda",
        "deskripsi",
        "is_active",
        "user_id"
    ];

    public function users()
    {
        return $this->belongsTo(user::class, "user_id", "id");
    }
}
