<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id_reservasi','metode_pembayaran','jumlah_pembayaran', 'tanggal_transaksi'];
    protected $visible = ['id_reservasi','metode_pembayaran','jumlah_pembayaran', 'tanggal_transaksi'];

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class, 'id_reservasi');
    }
}
