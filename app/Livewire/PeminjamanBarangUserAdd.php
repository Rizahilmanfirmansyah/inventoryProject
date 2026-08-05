<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pembar;
use App\Models\Product;


class PeminjamanBarangUserAdd extends Component
{
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
    public $product_id;
    
    public function addPeminjaman()
    {
        $this->validate([
            'id_barang' => 'required',
            'qty' => 'required|numeric|min:1',
            'tanggal_pakai' => 'required|date',
            'tanggal_pengembalian' => 'required|date|after_or_equal:tanggal_pakai',
        ]);


        $peminjaman = new Pembar();
        $peminjaman->nama_mhs = $this->nama_mhs;
        $peminjaman->semester = $this->semester;
        $peminjaman->jurusan = $this->jurusan;
        $peminjaman->id_barang = $this->id_barang;
        $peminjaman->qty = $this->qty;
        $peminjaman->tanggal_pengajuan = now();
        $peminjaman->tanggal_pakai = $this->tanggal_pakai;
        $peminjaman->tanggal_pengembalian = $this->tanggal_pengembalian;
        $peminjaman->status_persetujuan = 'pending';
        $peminjaman->save();

        $barang = Product::find($this->id_barang);
        $barang->qty -= $this->qty;
        $barang->save();

        session()->flash('notif', 'Peminjaman Berhasil Di Input. Cek status peminjaman secara berkala.');
        return redirect()->route('peminjaman.user');
    }

    public function render()
    {
        $peminjaman = Product::all();
        return view('livewire.peminjaman-barang-user-add',[
            'peminjaman' => $peminjaman
        ])->layout('layouts.test-layout');
    }
}
