<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class berita_desa extends Model
{
    use HasFactory;

    protected $table = "berita_desas";

    protected $fillable = [
        "judul",
        "slug",
        "konten",
        "gambar_berita",
        "is_active",
        "views",
        "user_id"
    ];

    public function users()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
