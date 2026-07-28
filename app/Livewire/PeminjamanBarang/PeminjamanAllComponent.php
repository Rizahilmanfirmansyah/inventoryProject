<?php

namespace App\Livewire\PeminjamanBarang;

use Livewire\Component;
use App\Models\Pembar;

class PeminjamanAllComponent extends Component
{
    public function deletePeminjaman($id)
    {
        $peminjaman = Pembar::find($id);
        if ($peminjaman) {
            $peminjaman->delete();
            session()->flash('message', 'Peminjaman berhasil dihapus.');
        } else {
            session()->flash('error', 'Peminjaman tidak ditemukan.');
        }
    }
    
    public function render()
    {
        $peminjaman = Pembar::all();
        return view('livewire.peminjaman-barang.peminjaman-all-component',[
            'peminjaman' => $peminjaman
        ])->layout('layouts.layout-admin');
    }
}
