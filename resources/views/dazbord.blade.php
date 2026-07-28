<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>SIPERBA – Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
<style>
  body { background: #f0f2f5; font-family: 'Segoe UI', system-ui, sans-serif; }

  /* SIDEBAR */
  .sidebar {
    width: 240px; min-height: 100vh; background: #1a1a2e;
    position: fixed; top: 0; left: 0; bottom: 0;
    display: flex; flex-direction: column; overflow-y: auto; z-index: 100;
  }
  .sidebar-brand { padding: 20px; border-bottom: 1px solid rgba(255,255,255,.08); }
  .brand-name { font-size: 18px; font-weight: 700; color: #fff; letter-spacing: .5px; }
  .brand-sub { font-size: 11px; color: rgba(255,255,255,.4); text-transform: uppercase; letter-spacing: 1px; }
  .sidebar-section { padding: 18px 16px 4px; font-size: 10px; font-weight: 600;
    color: rgba(255,255,255,.35); text-transform: uppercase; letter-spacing: 1.2px; }
  .sidebar-item { display: flex; align-items: center; gap: 10px; padding: 9px 16px;
    margin: 1px 8px; border-radius: 8px; font-size: 13.5px; color: rgba(255,255,255,.65);
    text-decoration: none; transition: all .18s; }
  .sidebar-item:hover { background: rgba(255,255,255,.08); color: #fff; }
  .sidebar-item.active { background: linear-gradient(135deg,#6C63FF,#4f46e5); color: #fff; font-weight: 600; }
  .sidebar-item i { font-size: 16px; width: 18px; }
  .sidebar-footer { margin-top: auto; padding: 16px; }
  .sidebar-footer-card {
    background: rgba(108,99,255,.15); border: 1px solid rgba(108,99,255,.25);
    border-radius: 12px; padding: 14px;
  }

  /* MAIN */
  .main-content { margin-left: 240px; min-height: 100vh; }

  /* TOPBAR */
  .topbar {
    background: #fff; padding: 0 28px; height: 60px;
    display: flex; align-items: center; justify-content: space-between;
    border-bottom: 1px solid #e5e7eb; position: sticky; top: 0; z-index: 99;
  }

  /* STAT CARDS */
  .stat-card { border: none; border-radius: 14px; overflow: hidden; transition: transform .18s, box-shadow .18s; }
  .stat-card:hover { transform: translateY(-3px); box-shadow: 0 10px 28px rgba(0,0,0,.10) !important; }
  .stat-card .card-body { padding: 20px; }
  .stat-icon { width: 46px; height: 46px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; }
  .stat-value { font-size: 30px; font-weight: 800; line-height: 1; }
  .stat-label { font-size: 12.5px; color: #6b7280; font-weight: 500; margin-top: 3px; }
  .stat-top-bar { height: 4px; border-radius: 14px 14px 0 0; }

  /* TABLE */
  .table th { font-size: 11.5px; font-weight: 600; color: #9ca3af; text-transform: uppercase; letter-spacing: .6px; border-bottom: 1px solid #f3f4f6; }
  .table td { font-size: 13.5px; vertical-align: middle; border-bottom: 1px solid #f9fafb; }
  .table tbody tr:hover { background: #f9fafb; }
  .table tbody tr:last-child td { border-bottom: none; }

  /* BADGES */
  .badge-tersedia { background: #d1fae5; color: #065f46; }
  .badge-menipis  { background: #fff7ed; color: #9a3412; }
  .badge-habis    { background: #fef2f2; color: #991b1b; }
  .badge-pending  { background: #fef3c7; color: #92400e; }
  .badge-disetujui{ background: #d1fae5; color: #065f46; }
  .badge-cat-el   { background: #ede9fe; color: #5b21b6; }
  .badge-cat-pe   { background: #d1fae5; color: #065f46; }

  /* PROGRESS */
  .progress { height: 8px; border-radius: 4px; }

  /* ACTIVITY */
  .activity-dot { width: 34px; height: 34px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
  .activity-dot.in     { background: #d1fae5; color: #10b981; }
  .activity-dot.out    { background: #fef2f2; color: #ef4444; }
  .activity-dot.loan   { background: #ede9fe; color: #6C63FF; }

  /* LOAN */
  .loan-avatar { width: 38px; height: 38px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 700; color: #fff; flex-shrink: 0; }

  /* ALERT STOK */
  .stok-alert { border-radius: 10px; border: 1px solid; }
  .stok-alert.warn  { background: #fff7ed; border-color: #fed7aa; }
  .stok-alert.danger{ background: #fef2f2; border-color: #fecaca; }

  /* CARD */
  .content-card { border: 1px solid #e5e7eb; border-radius: 14px; }
  .content-card .card-header { background: transparent; border-bottom: 1px solid #f3f4f6; padding: 14px 20px; }

  /* MINI BARS */
  .mini-bar-wrap { display: flex; align-items: flex-end; gap: 8px; height: 70px; }
  .mini-bar { border-radius: 4px 4px 0 0; flex: 1; }
</style>
</head>
<body>

<!-- SIDEBAR -->
<aside class="sidebar">
  <div class="sidebar-brand">
    <div class="brand-name">SIPERBA</div>
    <div class="brand-sub">UNAS PASIM</div>
  </div>

  <div class="sidebar-section">Menu Utama</div>
  <a class="sidebar-item active" href="#"><i class="bi bi-grid-1x2"></i> Dashboard</a>

  <div class="sidebar-section">Item Barang</div>
  <a class="sidebar-item" href="#"><i class="bi bi-list-ul"></i> Kategori</a>
  <a class="sidebar-item" href="#"><i class="bi bi-box-seam"></i> Barang</a>
  <a class="sidebar-item" href="#"><i class="bi bi-box-arrow-in-down"></i> Barang Masuk</a>
  <a class="sidebar-item" href="#"><i class="bi bi-box-arrow-up"></i> Barang Keluar</a>
  <a class="sidebar-item" href="#">
    <i class="bi bi-arrow-left-right"></i> Peminjaman Barang
    <span class="badge bg-danger ms-auto" style="font-size:10px">3</span>
  </a>

  <div class="sidebar-section">Pengguna</div>
  <a class="sidebar-item" href="#"><i class="bi bi-people"></i> Users</a>

  <div class="sidebar-footer">
    <div class="sidebar-footer-card">
      <div style="font-size:12px;font-weight:700;color:#a78bfa">Gudang Aktif</div>
      <div style="font-size:11px;color:rgba(255,255,255,.45);margin-top:2px">Kampus UNAS PASIM</div>
      <div style="font-size:11px;color:rgba(255,255,255,.3);margin-top:8px">v1.0.0 · Laravel 11</div>
    </div>
  </div>
</aside>

<!-- MAIN -->
<div class="main-content">

  <!-- TOPBAR -->
  <div class="topbar">
    <div>
      <div class="fw-semibold" style="font-size:15px;color:#1a1a2e">Dashboard Persediaan Barang</div>
      <div class="text-muted" style="font-size:12px">Selamat datang kembali, Nandi 👋</div>
    </div>
    <div class="d-flex align-items-center gap-3">
      <button class="btn btn-light btn-sm position-relative p-2" style="border-radius:50%;width:36px;height:36px">
        <i class="bi bi-bell"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size:8px">3</span>
      </button>
      <div class="d-flex align-items-center gap-2 px-3 py-1 rounded-pill" style="background:#f0f2f5">
        <div style="width:30px;height:30px;border-radius:50%;background:linear-gradient(135deg,#6C63FF,#4f46e5);color:#fff;display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700">N</div>
        <span class="fw-semibold" style="font-size:13px">Nandi</span>
      </div>
      <a href="#" class="btn btn-sm" style="background:#fef2f2;color:#ef4444;border:1px solid #fecaca;font-size:12.5px;font-weight:600">
        <i class="bi bi-box-arrow-right me-1"></i>Logout
      </a>
    </div>
  </div>

  <!-- CONTENT -->
  <div class="p-4">

    <!-- PAGE HEADER -->
    <div class="mb-4">
      <h4 class="fw-bold mb-1" style="color:#1a1a2e">Ringkasan Persediaan Barang</h4>
      <p class="text-muted mb-2" style="font-size:13.5px">Monitor seluruh aktivitas gudang secara real-time dari satu halaman.</p>
      <span class="badge rounded-pill" style="background:#fff;border:1px solid #e5e7eb;color:#6b7280;font-size:12px;font-weight:500;padding:5px 12px">
        <i class="bi bi-calendar3 me-1"></i> Minggu, 27 Juli 2026 · 20:28 WIB
      </span>
    </div>

    <!-- STAT CARDS -->
    <div class="row g-3 mb-4">
      <!-- Total Barang -->
      <div class="col-xl-3 col-md-6">
        <div class="card stat-card shadow-sm h-100">
          <div class="stat-top-bar" style="background:linear-gradient(90deg,#6C63FF,#a78bfa)"></div>
          <div class="card-body">
            <div class="d-flex align-items-start justify-content-between mb-3">
              <div class="stat-icon" style="background:#ede9fe;color:#6C63FF"><i class="bi bi-box-seam-fill"></i></div>
              <span class="badge rounded-pill text-bg-light" style="font-size:11px;color:#10b981">▲ +1</span>
            </div>
            <div class="stat-value" style="color:#6C63FF">3</div>
            <div class="stat-label">Total Jenis Barang</div>
          </div>
        </div>
      </div>
      <!-- Total Stok -->
      <div class="col-xl-3 col-md-6">
        <div class="card stat-card shadow-sm h-100">
          <div class="stat-top-bar" style="background:linear-gradient(90deg,#0ea5e9,#06b6d4)"></div>
          <div class="card-body">
            <div class="d-flex align-items-start justify-content-between mb-3">
              <div class="stat-icon" style="background:#e0f2fe;color:#0ea5e9"><i class="bi bi-archive-fill"></i></div>
              <span class="badge rounded-pill text-bg-light" style="font-size:11px;color:#10b981">▲ +12 unit</span>
            </div>
            <div class="stat-value" style="color:#0ea5e9">110</div>
            <div class="stat-label">Total Stok Barang</div>
          </div>
        </div>
      </div>
      <!-- Peminjaman -->
      <div class="col-xl-3 col-md-6">
        <div class="card stat-card shadow-sm h-100">
          <div class="stat-top-bar" style="background:linear-gradient(90deg,#f97316,#fb923c)"></div>
          <div class="card-body">
            <div class="d-flex align-items-start justify-content-between mb-3">
              <div class="stat-icon" style="background:#fff7ed;color:#f97316"><i class="bi bi-arrow-left-right"></i></div>
              <span class="badge rounded-pill" style="background:#fef3c7;color:#92400e;font-size:11px">Pending</span>
            </div>
            <div class="stat-value" style="color:#f97316">3</div>
            <div class="stat-label">Peminjaman Aktif</div>
          </div>
        </div>
      </div>
      <!-- Stok Menipis -->
      <div class="col-xl-3 col-md-6">
        <div class="card stat-card shadow-sm h-100">
          <div class="stat-top-bar" style="background:linear-gradient(90deg,#ef4444,#f87171)"></div>
          <div class="card-body">
            <div class="d-flex align-items-start justify-content-between mb-3">
              <div class="stat-icon" style="background:#fef2f2;color:#ef4444"><i class="bi bi-exclamation-triangle-fill"></i></div>
              <span class="badge rounded-pill" style="background:#fef2f2;color:#991b1b;font-size:11px">▼ Kritis</span>
            </div>
            <div class="stat-value" style="color:#ef4444">1</div>
            <div class="stat-label">Stok Hampir Habis</div>
          </div>
        </div>
      </div>
    </div>

    <!-- ROW 2: Tabel Barang + Sidebar kanan -->
    <div class="row g-3 mb-3">

      <!-- Tabel Barang -->
      <div class="col-xl-8">
        <div class="card content-card shadow-sm h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <div>
              <div class="fw-bold" style="font-size:14px;color:#1a1a2e">Daftar Barang</div>
              <div class="text-muted" style="font-size:12px">Status stok seluruh barang</div>
            </div>
            <a href="#" class="text-decoration-none fw-semibold" style="font-size:12px;color:#6C63FF">Lihat semua →</a>
          </div>
          <div class="card-body p-0">
            <table class="table mb-0">
              <thead>
                <tr>
                  <th class="ps-4">Nama Barang</th>
                  <th>Kategori</th>
                  <th>Stok</th>
                  <th>Status</th>
                  <th>Grafik Stok</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="ps-4"><strong>TV</strong><div class="text-muted" style="font-size:11px">Kode: BRG-001</div></td>
                  <td><span class="badge badge-cat-el rounded-pill px-3">Elektronik</span></td>
                  <td><strong>64</strong> <span class="text-muted" style="font-size:11px">unit</span></td>
                  <td><span class="badge badge-tersedia rounded-pill px-3 py-1"><i class="bi bi-circle-fill me-1" style="font-size:7px"></i>Tersedia</span></td>
                  <td style="width:120px">
                    <div class="progress"><div class="progress-bar" style="width:80%;background:linear-gradient(90deg,#6C63FF,#a78bfa)"></div></div>
                    <div class="text-muted mt-1" style="font-size:10px">80% dari maks</div>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4"><strong>Monitor</strong><div class="text-muted" style="font-size:11px">Kode: BRG-002</div></td>
                  <td><span class="badge badge-cat-pe rounded-pill px-3">Perabot</span></td>
                  <td><strong>36</strong> <span class="text-muted" style="font-size:11px">unit</span></td>
                  <td><span class="badge badge-tersedia rounded-pill px-3 py-1"><i class="bi bi-circle-fill me-1" style="font-size:7px"></i>Tersedia</span></td>
                  <td>
                    <div class="progress"><div class="progress-bar" style="width:45%;background:linear-gradient(90deg,#0ea5e9,#06b6d4)"></div></div>
                    <div class="text-muted mt-1" style="font-size:10px">45% dari maks</div>
                  </td>
                </tr>
                <tr>
                  <td class="ps-4"><strong>Lemari</strong><div class="text-muted" style="font-size:11px">Kode: BRG-003</div></td>
                  <td><span class="badge badge-cat-pe rounded-pill px-3">Perabot</span></td>
                  <td><strong>10</strong> <span class="text-muted" style="font-size:11px">unit</span></td>
                  <td><span class="badge badge-menipis rounded-pill px-3 py-1"><i class="bi bi-circle-fill me-1" style="font-size:7px"></i>Menipis</span></td>
                  <td>
                    <div class="progress"><div class="progress-bar" style="width:13%;background:linear-gradient(90deg,#f97316,#fb923c)"></div></div>
                    <div class="text-muted mt-1" style="font-size:10px">13% dari maks</div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- Mini chart -->
          <div class="card-footer bg-white border-top" style="border-color:#f3f4f6!important;padding:14px 20px">
            <div class="text-muted mb-2" style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.6px">Distribusi Stok</div>
            <div class="mini-bar-wrap">
              <div style="display:flex;flex-direction:column;align-items:center;flex:1">
                <div class="mini-bar" style="height:80%;background:linear-gradient(180deg,#6C63FF,#a78bfa)" title="TV: 64 unit"></div>
                <div class="text-muted mt-1" style="font-size:10px">TV<br>64</div>
              </div>
              <div style="display:flex;flex-direction:column;align-items:center;flex:1">
                <div class="mini-bar" style="height:46%;background:linear-gradient(180deg,#0ea5e9,#06b6d4)" title="Monitor: 36 unit"></div>
                <div class="text-muted mt-1" style="font-size:10px">Monitor<br>36</div>
              </div>
              <div style="display:flex;flex-direction:column;align-items:center;flex:1">
                <div class="mini-bar" style="height:13%;background:linear-gradient(180deg,#f97316,#fb923c)" title="Lemari: 10 unit"></div>
                <div class="text-muted mt-1" style="font-size:10px">Lemari<br>10</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Kolom kanan -->
      <div class="col-xl-4 d-flex flex-column gap-3">

        <!-- Alert Stok -->
        <div class="card content-card shadow-sm">
          <div class="card-header d-flex align-items-center gap-2">
            <i class="bi bi-exclamation-triangle-fill text-warning"></i>
            <div>
              <div class="fw-bold" style="font-size:14px;color:#1a1a2e">Peringatan Stok</div>
              <div class="text-muted" style="font-size:12px">Barang perlu perhatian</div>
            </div>
          </div>
          <div class="card-body">
            <div class="stok-alert warn d-flex align-items-center gap-3 p-3">
              <div style="width:38px;height:38px;background:#fef3c7;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:18px">⚠️</div>
              <div class="flex-grow-1">
                <div class="fw-bold" style="font-size:13px">Lemari</div>
                <div class="text-muted" style="font-size:11.5px">Stok hampir habis · Perabot</div>
              </div>
              <div class="fw-bold" style="font-size:22px;color:#f97316">10</div>
            </div>
          </div>
        </div>

        <!-- Peminjaman Pending -->
        <div class="card content-card shadow-sm flex-grow-1">
          <div class="card-header d-flex align-items-center justify-content-between">
            <div>
              <div class="fw-bold" style="font-size:14px;color:#1a1a2e">Peminjaman Pending</div>
              <div class="text-muted" style="font-size:12px">Perlu persetujuan admin</div>
            </div>
            <a href="#" class="text-decoration-none fw-semibold" style="font-size:12px;color:#6C63FF">Kelola →</a>
          </div>
          <div class="card-body p-0">
            <div class="list-group list-group-flush rounded-bottom">
              <div class="list-group-item border-0 d-flex align-items-center gap-3 py-3 px-4">
                <div class="loan-avatar" style="background:linear-gradient(135deg,#6C63FF,#4f46e5)">A</div>
                <div class="flex-grow-1">
                  <div class="fw-bold" style="font-size:13px">Ahmad Fauzi</div>
                  <div class="text-muted" style="font-size:11.5px">Monitor × 2 unit</div>
                  <div style="font-size:11px;color:#f97316;font-weight:600">Jatuh tempo: 1 Agu 2026</div>
                </div>
                <span class="badge badge-pending rounded-pill px-2 py-1">Pending</span>
              </div>
              <div class="list-group-item border-0 d-flex align-items-center gap-3 py-3 px-4">
                <div class="loan-avatar" style="background:linear-gradient(135deg,#0ea5e9,#06b6d4)">S</div>
                <div class="flex-grow-1">
                  <div class="fw-bold" style="font-size:13px">Siti Rahayu</div>
                  <div class="text-muted" style="font-size:11.5px">TV × 1 unit</div>
                  <div style="font-size:11px;color:#f97316;font-weight:600">Jatuh tempo: 3 Agu 2026</div>
                </div>
                <span class="badge badge-pending rounded-pill px-2 py-1">Pending</span>
              </div>
              <div class="list-group-item border-0 d-flex align-items-center gap-3 py-3 px-4">
                <div class="loan-avatar" style="background:linear-gradient(135deg,#10b981,#34d399)">B</div>
                <div class="flex-grow-1">
                  <div class="fw-bold" style="font-size:13px">Budi Santoso</div>
                  <div class="text-muted" style="font-size:11.5px">Lemari × 1 unit</div>
                  <div style="font-size:11px;color:#f97316;font-weight:600">Jatuh tempo: 5 Agu 2026</div>
                </div>
                <span class="badge badge-pending rounded-pill px-2 py-1">Pending</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ROW 3: Komposisi + Aktivitas -->
    <div class="row g-3">

      <!-- Komposisi Stok -->
      <div class="col-xl-6">
        <div class="card content-card shadow-sm h-100">
          <div class="card-header">
            <div class="fw-bold" style="font-size:14px;color:#1a1a2e">Komposisi Stok per Kategori</div>
            <div class="text-muted" style="font-size:12px">Persentase dari total 110 unit</div>
          </div>
          <div class="card-body">
            <div class="mb-4">
              <div class="d-flex justify-content-between mb-1">
                <span class="fw-semibold" style="font-size:13px">Elektronik — TV</span>
                <span class="text-muted" style="font-size:12px">64 unit · 58%</span>
              </div>
              <div class="progress"><div class="progress-bar" style="width:58%;background:linear-gradient(90deg,#6C63FF,#a78bfa)"></div></div>
            </div>
            <div class="mb-4">
              <div class="d-flex justify-content-between mb-1">
                <span class="fw-semibold" style="font-size:13px">Perabot — Monitor</span>
                <span class="text-muted" style="font-size:12px">36 unit · 33%</span>
              </div>
              <div class="progress"><div class="progress-bar" style="width:33%;background:linear-gradient(90deg,#0ea5e9,#06b6d4)"></div></div>
            </div>
            <div class="mb-2">
              <div class="d-flex justify-content-between mb-1">
                <span class="fw-semibold" style="font-size:13px">Perabot — Lemari</span>
                <span class="text-muted" style="font-size:12px">10 unit · 9%</span>
              </div>
              <div class="progress"><div class="progress-bar" style="width:9%;background:linear-gradient(90deg,#f97316,#fb923c)"></div></div>
            </div>
            <!-- Summary -->
            <div class="row g-2 mt-4">
              <div class="col-4">
                <div class="rounded-3 p-3 text-center" style="background:#ede9fe">
                  <div class="fw-bold" style="color:#6C63FF;font-size:18px">2</div>
                  <div style="font-size:11px;color:#5b21b6">Kategori</div>
                </div>
              </div>
              <div class="col-4">
                <div class="rounded-3 p-3 text-center" style="background:#d1fae5">
                  <div class="fw-bold" style="color:#10b981;font-size:18px">110</div>
                  <div style="font-size:11px;color:#065f46">Total Unit</div>
                </div>
              </div>
              <div class="col-4">
                <div class="rounded-3 p-3 text-center" style="background:#fff7ed">
                  <div class="fw-bold" style="color:#f97316;font-size:18px">1</div>
                  <div style="font-size:11px;color:#9a3412">Perlu Restock</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Aktivitas Terbaru -->
      <div class="col-xl-6">
        <div class="card content-card shadow-sm h-100">
          <div class="card-header d-flex align-items-center justify-content-between">
            <div>
              <div class="fw-bold" style="font-size:14px;color:#1a1a2e">Aktivitas Terbaru</div>
              <div class="text-muted" style="font-size:12px">Log transaksi gudang</div>
            </div>
            <a href="#" class="text-decoration-none fw-semibold" style="font-size:12px;color:#6C63FF">Semua log →</a>
          </div>
          <div class="card-body p-3">
            <div class="d-flex align-items-start gap-3 py-2 border-bottom" style="border-color:#f9fafb!important">
              <div class="activity-dot in"><i class="bi bi-plus-lg"></i></div>
              <div>
                <div style="font-size:13px;color:#374151">Barang masuk: <strong>TV × 10 unit</strong></div>
                <div class="text-muted" style="font-size:11.5px"><i class="bi bi-clock me-1"></i>Hari ini · 18:42 WIB</div>
              </div>
            </div>
            <div class="d-flex align-items-start gap-3 py-2 border-bottom" style="border-color:#f9fafb!important">
              <div class="activity-dot out"><i class="bi bi-dash-lg"></i></div>
              <div>
                <div style="font-size:13px;color:#374151">Barang keluar: <strong>Monitor × 2 unit</strong></div>
                <div class="text-muted" style="font-size:11.5px"><i class="bi bi-clock me-1"></i>Hari ini · 15:10 WIB</div>
              </div>
            </div>
            <div class="d-flex align-items-start gap-3 py-2 border-bottom" style="border-color:#f9fafb!important">
              <div class="activity-dot loan"><i class="bi bi-arrow-left-right"></i></div>
              <div>
                <div style="font-size:13px;color:#374151">Pengajuan pinjam: <strong>TV × 1 unit</strong> oleh Siti</div>
                <div class="text-muted" style="font-size:11.5px"><i class="bi bi-clock me-1"></i>Hari ini · 13:25 WIB</div>
              </div>
            </div>
            <div class="d-flex align-items-start gap-3 py-2 border-bottom" style="border-color:#f9fafb!important">
              <div class="activity-dot in"><i class="bi bi-plus-lg"></i></div>
              <div>
                <div style="font-size:13px;color:#374151">Barang masuk: <strong>Monitor × 5 unit</strong></div>
                <div class="text-muted" style="font-size:11.5px"><i class="bi bi-clock me-1"></i>Kemarin · 10:00 WIB</div>
              </div>
            </div>
            <div class="d-flex align-items-start gap-3 py-2">
              <div class="activity-dot loan"><i class="bi bi-arrow-left-right"></i></div>
              <div>
                <div style="font-size:13px;color:#374151">Pengembalian: <strong>Lemari × 1 unit</strong> oleh Ahmad</div>
                <div class="text-muted" style="font-size:11.5px"><i class="bi bi-clock me-1"></i>Kemarin · 08:30 WIB</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>