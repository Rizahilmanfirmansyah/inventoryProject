<div wire:poll.60s="refresh">
    {{-- ============================================================
     SIPERBA – Dashboard Component
     Livewire + Bootstrap 5 + Chart.js
     Auto-refresh setiap 60 detik via wire:poll
     ============================================================ --}}

    {{-- TOPBAR --}}
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h4 class="fw-bold mb-1" style="color:#1a1a2e">
                Ringkasan Persediaan Barang
            </h4>
            <p class="text-muted mb-0" style="font-size:13.5px">
                <i class="bi bi-calendar3 me-1"></i>
                {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM YYYY') }}
                &nbsp;·&nbsp;
                <i class="bi bi-arrow-repeat me-1"></i>
                Auto-refresh setiap 60 detik
            </p>
        </div>
        {{-- <button wire:click="refresh" class="btn btn-sm d-flex align-items-center gap-2"
            style="background:#ede9fe;color:#6C63FF;border:none;font-weight:600;padding:8px 16px;border-radius:10px">
            <i class="bi bi-arrow-clockwise" wire:loading.class="spin" wire:target="refresh"></i>
            Refresh Data
        </button> --}}
    </div>

    {{-- LOADING INDICATOR --}}
    {{-- <div wire:loading wire:target="refresh"
         class="alert alert-info d-flex align-items-center gap-2 py-2 mb-3"
         style="font-size:13px;border-radius:10px">
        <div class="spinner-border spinner-border-sm" role="status"></div>
        Memperbarui data dashboard...
    </div> --}}

    {{-- ============================================================ --}}
    {{-- STAT CARDS                                                   --}}
    {{-- ============================================================ --}}
    <div class="row g-3 mb-4">

        {{-- Total Barang --}}
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100" style="border-radius:14px;overflow:hidden">
                <div style="height:4px;background:linear-gradient(90deg,#6C63FF,#a78bfa)"></div>
                <div class="card-body p-4">
                    <div class="d-flex align-items-start justify-content-between mb-3">
                        <div
                            style="width:46px;height:46px;background:#ede9fe;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:22px;color:#6C63FF">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <span class="badge rounded-pill" style="background:#d1fae5;color:#065f46;font-size:11px">
                            Aktif
                        </span>
                    </div>
                    <div style="font-size:32px;font-weight:800;color:#6C63FF;line-height:1">
                        {{ $totalProduct }}
                    </div>
                    <div class="text-muted mt-1" style="font-size:12.5px;font-weight:500">
                        Total Jenis Barang
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Stok --}}
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100" style="border-radius:14px;overflow:hidden">
                <div style="height:4px;background:linear-gradient(90deg,#0ea5e9,#06b6d4)"></div>
                <div class="card-body p-4">
                    <div class="d-flex align-items-start justify-content-between mb-3">
                        <div
                            style="width:46px;height:46px;background:#e0f2fe;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:22px;color:#0ea5e9">
                            <i class="bi bi-archive-fill"></i>
                        </div>
                        <span class="badge rounded-pill" style="background:#e0f2fe;color:#0369a1;font-size:11px">
                            Unit
                        </span>
                    </div>
                    <div style="font-size:32px;font-weight:800;color:#0ea5e9;line-height:1">
                        {{ $totalStok }}
                    </div>
                    <div class="text-muted mt-1" style="font-size:12.5px;font-weight:500">
                        Total Stok Tersedia
                    </div>
                </div>
            </div>
        </div>

        {{-- Peminjaman Aktif --}}
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100" style="border-radius:14px;overflow:hidden">
                <div style="height:4px;background:linear-gradient(90deg,#f97316,#fb923c)"></div>
                <div class="card-body p-4">
                    <div class="d-flex align-items-start justify-content-between mb-3">
                        <div
                            style="width:46px;height:46px;background:#fff7ed;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:22px;color:#f97316">
                            <i class="bi bi-arrow-left-right"></i>
                        </div>
                        @if ($pembarPending->count() > 0)
                            <span class="badge rounded-pill" style="background:#fef3c7;color:#92400e;font-size:11px">
                                {{ $pembarPending->count() }} Pending
                            </span>
                        @else
                            <span class="badge rounded-pill" style="background:#d1fae5;color:#065f46;font-size:11px">
                                Bersih
                            </span>
                        @endif
                    </div>
                    <div style="font-size:32px;font-weight:800;color:#f97316;line-height:1">
                        {{ $totalPembar }}
                    </div>
                    <div class="text-muted mt-1" style="font-size:12.5px;font-weight:500">
                        Total Peminjaman
                    </div>
                </div>
            </div>
        </div>

        {{-- Stok Menipis --}}
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100" style="border-radius:14px;overflow:hidden">
                <div style="height:4px;background:linear-gradient(90deg,#ef4444,#f87171)"></div>
                <div class="card-body p-4">
                    <div class="d-flex align-items-start justify-content-between mb-3">
                        <div
                            style="width:46px;height:46px;background:#fef2f2;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:22px;color:#ef4444">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                        </div>
                        @if ($stokMenipis > 0)
                            <span class="badge rounded-pill" style="background:#fef2f2;color:#991b1b;font-size:11px">
                                ▼ Kritis
                            </span>
                        @else
                            <span class="badge rounded-pill" style="background:#d1fae5;color:#065f46;font-size:11px">
                                Aman
                            </span>
                        @endif
                    </div>
                    <div style="font-size:32px;font-weight:800;color:#ef4444;line-height:1">
                        {{ $stokMenipis }}
                    </div>
                    <div class="text-muted mt-1" style="font-size:12.5px;font-weight:500">
                        Stok Hampir Habis
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- CHART ROW: Barang Masuk + Barang Keluar                     --}}
    {{-- ============================================================ --}}
    <div class="row g-3 mb-3">

        {{-- Chart Barang Masuk --}}
        <div class="col-xl-6">
            <div class="card border shadow-sm h-100" style="border-radius:14px;border-color:#e5e7eb!important">
                <div class="card-header bg-white border-bottom d-flex align-items-center justify-content-between"
                    style="border-color:#f3f4f6!important;border-radius:14px 14px 0 0;padding:14px 20px">
                    <div>
                        <div class="fw-bold" style="font-size:14px;color:#1a1a2e">
                            <i class="bi bi-graph-up-arrow me-2" style="color:#6C63FF"></i>
                            Barang Masuk per Bulan
                        </div>
                        <div class="text-muted" style="font-size:12px">Tahun {{ date('Y') }}</div>
                    </div>
                    <span class="badge" style="background:#ede9fe;color:#5b21b6;font-size:11px">
                        Bar Chart
                    </span>
                </div>
                <div class="card-body p-3">
                    <canvas id="chartMasuk" height="220"></canvas>
                </div>
            </div>
        </div>

        {{-- Chart Barang Keluar --}}
        <div class="col-xl-6">
            <div class="card border shadow-sm h-100" style="border-radius:14px;border-color:#e5e7eb!important">
                <div class="card-header bg-white border-bottom d-flex align-items-center justify-content-between"
                    style="border-color:#f3f4f6!important;border-radius:14px 14px 0 0;padding:14px 20px">
                    <div>
                        <div class="fw-bold" style="font-size:14px;color:#1a1a2e">
                            <i class="bi bi-graph-down-arrow me-2" style="color:#ef4444"></i>
                            Barang Keluar per Bulan
                        </div>
                        <div class="text-muted" style="font-size:12px">Tahun {{ date('Y') }}</div>
                    </div>
                    <span class="badge" style="background:#fef2f2;color:#991b1b;font-size:11px">
                        Bar Chart
                    </span>
                </div>
                <div class="card-body p-3">
                    <canvas id="chartKeluar" height="220"></canvas>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- TABEL PRODUK + DOUGHNUT STOK                                --}}
    {{-- ============================================================ --}}
    <div class="row g-3 mb-3">

        {{-- Tabel Produk --}}
        <div class="col-xl-8">
            <div class="card border shadow-sm" style="border-radius:14px;border-color:#e5e7eb!important">
                <div class="card-header bg-white border-bottom d-flex align-items-center justify-content-between"
                    style="border-color:#f3f4f6!important;border-radius:14px 14px 0 0;padding:14px 20px">
                    <div>
                        <div class="fw-bold" style="font-size:14px;color:#1a1a2e">Daftar Barang</div>
                        <div class="text-muted" style="font-size:12px">Status stok seluruh barang</div>
                    </div>
                    <a href="{{ route('product.all')}}" class="text-decoration-none fw-semibold" style="font-size:12px;color:#6C63FF">
                        Lihat semua →
                    </a>
                </div>
                <div class="card-body p-0">
                    <table id="data-t" class="table mb-0">
                        <thead>
                            <tr style="background:#f9fafb">
                                <th class="ps-4"
                                    style="font-size:11.5px;color:#9ca3af;font-weight:600;text-transform:uppercase;letter-spacing:.6px;padding:10px 12px;border-bottom:1px solid #f3f4f6">
                                    Nama Barang</th>
                                <th
                                    style="font-size:11.5px;color:#9ca3af;font-weight:600;text-transform:uppercase;letter-spacing:.6px;border-bottom:1px solid #f3f4f6">
                                    Kategori</th>
                                <th
                                    style="font-size:11.5px;color:#9ca3af;font-weight:600;text-transform:uppercase;letter-spacing:.6px;border-bottom:1px solid #f3f4f6">
                                    Stok</th>
                                <th
                                    style="font-size:11.5px;color:#9ca3af;font-weight:600;text-transform:uppercase;letter-spacing:.6px;border-bottom:1px solid #f3f4f6">
                                    Status</th>
                                <th
                                    style="font-size:11.5px;color:#9ca3af;font-weight:600;text-transform:uppercase;letter-spacing:.6px;border-bottom:1px solid #f3f4f6">
                                    Grafik Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $item)
                                <tr style="border-bottom:1px solid #f9fafb">
                                    <td class="ps-4"
                                        style="font-size:13.5px;padding:11px 12px;vertical-align:middle">
                                        <strong>{{ $item->nama }}</strong>
                                        {{-- <div class="text-muted" style="font-size:11px">{{ $item-> ?? '-' }}
                                        </div> --}}
                                    </td>
                                    <td style="vertical-align:middle">
                                        <span class="badge rounded-pill px-3"
                                            style="background:#ede9fe;color:#5b21b6;font-size:11.5px">
                                            {{ $item->category->name ?? '-' }}
                                        </span>
                                    </td>
                                    <td style="font-size:13.5px;vertical-align:middle">
                                        <strong>{{ $item->qty }}</strong>
                                        <span class="text-muted" style="font-size:11px"> unit</span>
                                    </td>
                                    <td style="vertical-align:middle">
                                        @if ($item->status === 'tersedia')
                                            <span class="badge rounded-pill px-3 py-1"
                                                style="background:#d1fae5;color:#065f46;font-size:11.5px">
                                                <i class="bi bi-circle-fill me-1" style="font-size:7px"></i>Tersedia
                                            </span>
                                        @elseif($item->status === 'menipis')
                                            <span class="badge rounded-pill px-3 py-1"
                                                style="background:#fff7ed;color:#9a3412;font-size:11.5px">
                                                <i class="bi bi-circle-fill me-1" style="font-size:7px"></i>Menipis
                                            </span>
                                        @else
                                            <span class="badge rounded-pill px-3 py-1"
                                                style="background:#fef2f2;color:#991b1b;font-size:11.5px">
                                                <i class="bi bi-circle-fill me-1" style="font-size:7px"></i>Habis
                                            </span>
                                        @endif
                                    </td>
                                    <td style="vertical-align:middle;width:130px">
                                        @php
                                            $maxStok = $products->max('qty') ?: 1;
                                            $pct = round(($item->qty / $maxStok) * 100);
                                            $color =
                                                $item->qty == 'tersedia'
                                                    ? 'linear-gradient(90deg,#6C63FF,#a78bfa)'
                                                    : ($item->status === 'menipis'
                                                        ? 'linear-gradient(90deg,#f97316,#fb923c)'
                                                        : 'linear-gradient(90deg,#ef4444,#f87171)');
                                        @endphp
                                        <div class="progress" style="height:8px;border-radius:4px">
                                            <div class="progress-bar"
                                                style="width:{{ $pct }}%;background:{{ $color }}">
                                            </div>
                                        </div>
                                        <div class="text-muted mt-1" style="font-size:10px">{{ $pct }}% dari
                                            maks</div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4" style="font-size:13px">
                                        <i class="bi bi-inbox me-2"></i>Belum ada data barang
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Doughnut Chart Stok --}}
        <div class="col-xl-4">
            <div class="card border shadow-sm h-100" style="border-radius:14px;border-color:#e5e7eb!important">
                <div class="card-header bg-white border-bottom"
                    style="border-color:#f3f4f6!important;border-radius:14px 14px 0 0;padding:14px 20px">
                    <div class="fw-bold" style="font-size:14px;color:#1a1a2e">
                        <i class="bi bi-pie-chart-fill me-2" style="color:#0ea5e9"></i>
                        Komposisi Stok
                    </div>
                    <div class="text-muted" style="font-size:12px">Top 5 barang terbanyak</div>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center p-3">
                    <canvas id="chartStok" height="260"></canvas>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- PEMINJAMAN PENDING + ALERT STOK                             --}}
    {{-- ============================================================ --}}
    <div class="row g-3">

        {{-- Peminjaman Pending --}}
        <div class="col-xl-7">
            <div class="card border shadow-sm" style="border-radius:14px;border-color:#e5e7eb!important">
                <div class="card-header bg-white border-bottom d-flex align-items-center justify-content-between"
                    style="border-color:#f3f4f6!important;border-radius:14px 14px 0 0;padding:14px 20px">
                    <div>
                        <div class="fw-bold" style="font-size:14px;color:#1a1a2e">
                            <i class="bi bi-hourglass-split me-2" style="color:#f97316"></i>
                            Peminjaman Pending
                        </div>
                        <div class="text-muted" style="font-size:12px">Menunggu persetujuan admin</div>
                    </div>
                    <a href="{{ route('peminjaman.all') }}" class="text-decoration-none fw-semibold"
                        style="font-size:12px;color:#6C63FF">
                        Kelola →
                    </a>
                </div>
                <div class="card-body p-0">
                    @forelse($pembarPending as $pinjam)
                        <div class="d-flex align-items-center gap-3 px-4 py-3"
                            style="border-bottom:1px solid #f9fafb">
                            <div
                                style="width:40px;height:40px;border-radius:10px;background:linear-gradient(135deg,#6C63FF,#4f46e5);color:#fff;display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700;flex-shrink:0">
                                {{ strtoupper(substr($pinjam->nama_mhs ?? 'U', 0, 1)) }}
                            </div>
                            <div class="flex-grow-1">
                                <div class="fw-bold" style="font-size:13px">
                                    {{ $pinjam->nama_mhs ?? '-' }}
                                </div>
                                <div class="text-muted" style="font-size:11.5px">
                                    {{ $pinjam->product->nama ?? '-' }}
                                    × {{ $pinjam->jumlah ?? 1 }} unit
                                </div>
                                <div style="font-size:11px;color:#f97316;font-weight:600">
                                    <i class="bi bi-calendar me-1"></i>
                                    Jatuh tempo:
                                    {{ \Carbon\Carbon::parse($pinjam->tgl_kembali ?? now())->format('d M Y') }}
                                </div>
                            </div>
                            <span class="badge rounded-pill px-3 py-2"
                                style="background:#fef3c7;color:#92400e;font-size:11.5px">
                                Pending
                            </span>
                        </div>
                    @empty
                        <div class="text-center text-muted py-4" style="font-size:13px">
                            <i class="bi bi-check-circle me-2 text-success"></i>
                            Tidak ada peminjaman pending
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        {{-- Alert Stok Menipis --}}
        <div class="col-xl-5">
            <div class="card border shadow-sm h-100" style="border-radius:14px;border-color:#e5e7eb!important">
                <div class="card-header bg-white border-bottom"
                    style="border-color:#f3f4f6!important;border-radius:14px 14px 0 0;padding:14px 20px">
                    <div class="fw-bold" style="font-size:14px;color:#1a1a2e">
                        <i class="bi bi-exclamation-triangle-fill me-2 text-warning"></i>
                        Peringatan Stok
                    </div>
                    <div class="text-muted" style="font-size:12px">Barang dengan stok ≤ 5 unit</div>
                </div>
                <div class="card-body">
                    @php
                        $kritis = collect($products)->where('qty', '<=', '5');
                    @endphp
                    @forelse($kritis as $item)
                        <div class="d-flex align-items-center gap-3 p-3 mb-2 rounded-3"
                            style="{{ $item->status === 'habis' ? 'background:#fef2f2;border:1px solid #fecaca' : 'background:#fff7ed;border:1px solid #fed7aa' }}">
                            <div
                                style="width:38px;height:38px;border-radius:10px;background:{{ $item->status === 'habis' ? '#fee2e2' : '#fef3c7' }};display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0">
                                {{ $item->status === 'habis' ? '🚨' : '⚠️' }}
                            </div>
                            <div class="flex-grow-1">
                                <div class="fw-bold" style="font-size:13px">{{ $item->nama }}</div>
                                <div class="text-muted" style="font-size:11.5px">
                                    {{ $item->category->name ?? '-' }}
                                </div>
                            </div>
                            <div class="fw-bold"
                                style="font-size:22px;color:{{ $item->status === 'habis' ? '#ef4444' : '#f97316' }}">
                                {{ $item->qty }}
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-muted py-4" style="font-size:13px">
                            <i class="bi bi-shield-check me-2 text-success"
                                style="font-size:24px;display:block;margin-bottom:8px"></i>
                            Semua stok dalam kondisi aman!
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    {{-- DEBUG SEMENTARA --}}
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        initDashboardCharts();
    });

    document.addEventListener('livewire:load', function() {
        initDashboardCharts();
    });

    function initDashboardCharts() {

        var allBulan = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];

        var labelMasukRaw  = {!! json_encode($chartMasukLabels) !!};
        var dataMasukRaw   = {!! json_encode($chartMasukData) !!};
        var labelKeluarRaw = {!! json_encode($chartKeluarLabels) !!};
        var dataKeluarRaw  = {!! json_encode($chartKeluarData) !!};
        var labelStok      = {!! json_encode($chartStokLabels) !!};
        var dataStok       = {!! json_encode($chartStokData) !!};

        var bulanMap = {
            'January':0,'February':1,'March':2,'April':3,
            'May':4,'June':5,'July':6,'August':7,
            'September':8,'October':9,'November':10,'December':11
        };

        var dataMasuk = [0,0,0,0,0,0,0,0,0,0,0,0];
        labelMasukRaw.forEach(function(bln, i) {
            var idx = bulanMap[bln];
            if (idx !== undefined) dataMasuk[idx] = dataMasukRaw[i];
        });

        var dataKeluar = [0,0,0,0,0,0,0,0,0,0,0,0];
        labelKeluarRaw.forEach(function(bln, i) {
            var idx = bulanMap[bln];
            if (idx !== undefined) dataKeluar[idx] = dataKeluarRaw[i];
        });

        if (!labelStok.length) { labelStok = ['Belum ada data']; dataStok = [0]; }

        if (window.myChartMasuk)  { window.myChartMasuk.destroy(); }
        if (window.myChartKeluar) { window.myChartKeluar.destroy(); }
        if (window.myChartStok)   { window.myChartStok.destroy(); }

        var canvasMasuk = document.getElementById('chartMasuk');
        if (canvasMasuk) {
            window.myChartMasuk = new Chart(canvasMasuk.getContext('2d'), {
                type: 'bar',
                data: {
                    labels: allBulan,
                    datasets: [{
                        label: 'Barang Masuk',
                        data: dataMasuk,
                        backgroundColor: 'rgba(108,99,255,0.25)',
                        borderColor: 'rgba(108,99,255,1)',
                        borderWidth: 1.5
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    legend: { display: false },
                    scales: {
                        yAxes: [{
                            ticks: { beginAtZero: true, fontSize: 10, fontColor: '#9ca3af', stepSize: 5 },
                            gridLines: { color: '#f3f4f6' }
                        }],
                        xAxes: [{
                            ticks: { fontSize: 10, fontColor: '#9ca3af' },
                            gridLines: { display: false }
                        }]
                    },
                    tooltips: {
                        callbacks: {
                            label: function(item) { return ' ' + item.yLabel + ' unit masuk'; }
                        }
                    }
                }
            });
        }

        var canvasKeluar = document.getElementById('chartKeluar');
        if (canvasKeluar) {
            window.myChartKeluar = new Chart(canvasKeluar.getContext('2d'), {
                type: 'bar',
                data: {
                    labels: allBulan,
                    datasets: [{
                        label: 'Barang Keluar',
                        data: dataKeluar,
                        backgroundColor: 'rgba(239,68,68,0.18)',
                        borderColor: 'rgba(239,68,68,1)',
                        borderWidth: 1.5
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    legend: { display: false },
                    scales: {
                        yAxes: [{
                            ticks: { beginAtZero: true, fontSize: 10, fontColor: '#9ca3af', stepSize: 5 },
                            gridLines: { color: '#f3f4f6' }
                        }],
                        xAxes: [{
                            ticks: { fontSize: 10, fontColor: '#9ca3af' },
                            gridLines: { display: false }
                        }]
                    },
                    tooltips: {
                        callbacks: {
                            label: function(item) { return ' ' + item.yLabel + ' unit keluar'; }
                        }
                    }
                }
            });
        }

        var canvasStok = document.getElementById('chartStok');
        if (canvasStok) {
            window.myChartStok = new Chart(canvasStok.getContext('2d'), {
                type: 'doughnut',
                data: {
                    labels: labelStok,
                    datasets: [{
                        data: dataStok,
                        backgroundColor: [
                            'rgba(108,99,255,0.85)',
                            'rgba(14,165,233,0.85)',
                            'rgba(249,115,22,0.85)',
                            'rgba(16,185,129,0.85)',
                            'rgba(239,68,68,0.85)'
                        ],
                        borderWidth: 2,
                        borderColor: '#fff'
                    }]
                },
                options: {
                    responsive: true,
                    cutoutPercentage: 65,
                    legend: { position: 'bottom', labels: { fontSize: 11, padding: 10 } }
                }
            });
        }

        console.log('Charts berhasil dimuat!');
    }

    window.addEventListener('refreshCharts', function() {
        initDashboardCharts();
    });
</script>

