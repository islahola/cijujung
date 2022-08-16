<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class destinasi extends Model
{
    use HasFactory;

    protected $table = "destinasis";
    
    protected $fillable = [
        "nama_destinasi",
        "gambar_destinasi",
        "user_id"
    ];

    public function users()
    {
        return $this->belongsTo(user::class, "user_id", "id");
    }
}
