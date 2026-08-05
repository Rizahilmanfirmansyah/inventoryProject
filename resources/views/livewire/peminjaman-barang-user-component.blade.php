<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h4>Data Peminjaman Barang</h4>
            </div>
            @if (Session::has('notif'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{ Session::get('notif') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card-body">
                <a href="{{ route('peminjaman.add') }}" class="btn btn-secondary">tambah</a>
                <div class="mt-2">
                    <table id="data-table" class="table">
                        <thead>
                            <tr>
                                {{-- <th>ID</th> --}}
                                <th>User</th>
                                <th>Barang</th>
                                <th>Jumlah Diminta</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Tanggal Pakai</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Status Persetujuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjaman as $item)
                                <tr>
                                    {{-- <td>{{ $item->id }}</td> --}}
                                    <td>{{ $item->nama_mhs }}</td>
                                    <td>{{ $item->product->nama ?? 'Barang tidak ditemukan' }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->tanggal_pengajuan }}</td>
                                    <td>{{ $item->tanggal_pakai }}</td>
                                    <td>{{ $item->tanggal_pengembalian }}</td>
                                    <td>{{ $item->status_persetujuan }}</td>
                                    
                                       
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>

</div>
