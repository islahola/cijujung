<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class data_pendidikan_desa extends Model
{
    use HasFactory;

    protected $table = "data_pendidikan_desas";

    protected $fillable = [
        "nama_sekolah",
        "jumlah_guru",
        "jumlah_murid",
        "lokasi",
        "user_id"
    ];

    public function users ()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

}
