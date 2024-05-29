<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengunjung extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alamat', 'no_telepon'];
    protected $visible = ['nama', 'alamat', 'no_telepon'];
    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'id_pengunjung');
    }
}
