<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pembar;

class PeminjamanBarangUserComponent extends Component
{
    public function render()
    {
        $peminjaman = Pembar::all();
        return view('livewire.peminjaman-barang-user-component',[
            'peminjaman' => $peminjaman
        ])->layout('layouts.layout-user');
    }
}
