<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Product;
use App\Models\Pembar;
use App\Models\Suppliers;
use App\Models\Product_masuk;
use App\Models\Product_keluar;
use DB;

class DashboardComponent extends Component
{
    // Properties
    public $totalProduct;
    public $totalUser;
    public $totalPembar;
    public $totalSupplier;
    public $totalStok;
    public $stokMenipis;
    public $products;
    public $pembarPending;

    // Chart data
    public $chartMasukLabels  = [];
    public $chartMasukData    = [];
    public $chartKeluarLabels = [];
    public $chartKeluarData   = [];
    public $chartStokLabels   = [];
    public $chartStokData     = [];
    public $pembarChartLabels = [];
    public $pembarChartData   = [];

    // mount() dipanggil sekali saat komponen dimuat
    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        // mengambil data peminjaman barang yeng telah selesai untuk masuk kedalam chart
        $this->totalProduct  = Product::count();
        $this->totalUser     = User::count();
        $this->totalPembar   = Pembar::count();
        $this->totalSupplier = Suppliers::count();
        $this->totalStok     = Product::sum('qty');
        $this->stokMenipis   = Product::where('qty', '<=', 5)->count();

        $this->products = Product::with('category')
            ->orderBy('qty', 'asc')
            ->take(7)
            ->get()
            ->map(function ($p) {
                $p->status = $p->qty == 0
                    ? 'habis'
                    : ($p->qty <= 5 ? 'menipis' : 'tersedia');
                return $p;
            });

        $this->pembarPending = Pembar::with('product')
            ->where('status_persetujuan', 'pending')
            ->latest()
            ->take(5)
            ->get();
        
        $this->pembarChart = Pembar::where('status_persetujuan', 'Selesai')
            ->select(
                DB::raw("MONTHNAME(created_at) as bulan"),
                DB::raw("MONTH(created_at) as bulan_num"),
                DB::raw("SUM(qty) as total")
            )
            ->whereYear('created_at', date('Y'))
            ->groupBy('bulan', 'bulan_num')
            ->orderBy('bulan_num')
            ->get();
        
        $this->pembarChartLabels = $this->pembarChart->pluck('bulan')->toArray();
        $this->pembarChartData   = $this->pembarChart->pluck('total')->toArray();

        // Chart barang masuk per bulan
        $masuk = Product_masuk::select(
                DB::raw("MONTHNAME(created_at) as bulan"),
                DB::raw("MONTH(created_at) as bulan_num"),
                DB::raw("SUM(qty) as total")
            )
            ->whereYear('created_at', date('Y'))
            ->groupBy('bulan', 'bulan_num')
            ->orderBy('bulan_num')
            ->get();

        $this->chartMasukLabels = $masuk->pluck('bulan')->toArray();
        $this->chartMasukData   = $masuk->pluck('total')->toArray();

        // Chart barang keluar per bulan
        $keluar = Product_keluar::select(
                DB::raw("MONTHNAME(created_at) as bulan"),
                DB::raw("MONTH(created_at) as bulan_num"),
                DB::raw("SUM(qty) as total")
            )
            ->whereYear('created_at', date('Y'))
            ->groupBy('bulan', 'bulan_num')
            ->orderBy('bulan_num')
            ->get();

        $this->chartKeluarLabels = $keluar->pluck('bulan')->toArray();
        $this->chartKeluarData   = $keluar->pluck('total')->toArray();

        // Chart stok per produk
        $stok = Product::select('nama', 'qty')
            ->orderBy('qty', 'desc')
            ->take(5)
            ->get();

        $this->chartStokLabels = $stok->pluck('nama')->toArray();
        $this->chartStokData   = $stok->pluck('qty')->toArray();
    }

    // Livewire v2: emit bukan dispatch
    public function refresh()
    {
        $this->loadData();
        // $this->dispatchBrowserEvent('refreshCharts');
        // $this->emit('refreshCharts', [
        //     'masuk'  => ['labels' => $this->chartMasukLabels,  'data' => $this->chartMasukData],
        //     'keluar' => ['labels' => $this->chartKeluarLabels, 'data' => $this->chartKeluarData],
        //     'stok'   => ['labels' => $this->chartStokLabels,   'data' => $this->chartStokData],
        // ]);
    }

    public function render()
    {
        return view('livewire.dashboard-component')
            ->layout('layouts.layout-admin');
    }
}
