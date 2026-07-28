<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembar extends Model
{
    use HasFactory;
    protected $table = 'peminjaman_barang';
    protected $fillable = [
        'id_barang',
        'nama_mhs',
        'semester',
        'jumlah_diminta',
        'tanggal_pengajuan',
        'tanggal_pakai',
        'tanggal_pengembalian',
        'status_persetujuan',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_barang');
    }
}
