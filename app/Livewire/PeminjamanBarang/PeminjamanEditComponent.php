<?php

namespace App\Livewire\PeminjamanBarang;

use Livewire\Component;
use App\Models\Pembar;
use App\Models\Product;

class PeminjamanEditComponent extends Component
{
    public $peminjaman_id;
    public $id_barang;
    public $qty;
    public $tanggal_pakai;
    public $tanggal_pengembalian;
    public $status_persetujuan;
    public $id_user;
    public $tanggal_pengajuan;
    public $nama_mhs;
    public $semester;
    public $jurusan;

    public function mount($peminjaman_id)
    {
        $peminjaman = Pembar::find($peminjaman_id);

        $this->nama_mhs = $peminjaman->nama_mhs;
        $this->semester = $peminjaman->semester;
        $this->jurusan = $peminjaman->jurusan;
        $this->id_barang = $peminjaman->id_barang;
        $this->qty = $peminjaman->qty;
        $this->tanggal_pengajuan  = $peminjaman->tanggal_pengajuan 
        ? \Carbon\Carbon::parse($peminjaman->tanggal_pengajuan)->format('Y-m-d') 
        : null;

        $this->tanggal_pakai      = $peminjaman->tanggal_pakai 
        ? \Carbon\Carbon::parse($peminjaman->tanggal_pakai)->format('Y-m-d') 
        : null;

        $this->tanggal_pengembalian = $peminjaman->tanggal_pengembalian 
        ? \Carbon\Carbon::parse($peminjaman->tanggal_pengembalian)->format('Y-m-d') 
        : null;
        $this->status_persetujuan = $peminjaman->status_persetujuan;
        $this->peminjaman_id = $peminjaman->id;
    }

    public function EditPeminjaman()
    {
        $peminjaman = Pembar::find($this->peminjaman_id);

        // Simpan status lama
        $statusLama = $peminjaman->status_persetujuan;

        /*
        |--------------------------------------------------------------------------
        | Jika status berubah menjadi "Selesai"
        | Maka stok barang dikembalikan
        |--------------------------------------------------------------------------
        */

        if ($statusLama != 'Selesai' && $this->status_persetujuan == 'Selesai') {

            $product = Product::find($peminjaman->id_barang);

            if ($product) {

                // qty adalah stok barang
                $product->qty = $product->qty + $peminjaman->qty;

                $product->save();
            }
        }

        /*
        |--------------------------------------------------------------------------
        | Update data peminjaman
        |--------------------------------------------------------------------------
        */

        $peminjaman->nama_mhs = $this->nama_mhs;
        $peminjaman->semester = $this->semester;
        $peminjaman->jurusan = $this->jurusan;
        $peminjaman->id_barang = $this->id_barang;
        $peminjaman->qty = $this->qty;
        $peminjaman->tanggal_pengajuan = now();
        $peminjaman->tanggal_pakai = $this->tanggal_pakai;
        $peminjaman->tanggal_pengembalian = $this->tanggal_pengembalian;
        $peminjaman->status_persetujuan = $this->status_persetujuan;

        $peminjaman->save();

        session()->flash('notif', 'PeminjamanBerhasil diupdate.');

        return redirect()->route('peminjaman.all');
    }

    public function render()
    {
        return view('livewire.peminjaman-barang.peminjaman-edit-component', [
            'peminjaman' => Product::all()
        ])->layout('layouts.layout-admin');
    }
}