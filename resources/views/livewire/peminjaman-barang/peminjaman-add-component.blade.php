<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow" style="width: 30rem">
                    <div class="card-header">
                        <h3>Tambah Peminjaman Barang</h3>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="addPeminjaman">
                            <div class="form-group">
                                <label class="form-label" for="id_user">Nama Mahasiswa</label>
                                <input type="text" class="form-control" id="id_user" wire:model="nama_mhs"
                                    required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="id_barang">Barang</label>
                                <select class="form-control" id="id_barang" wire:model="id_barang" required>
                                    <option value="">Pilih Barang</option>
                                    @foreach ($peminjaman as $barang)
                                        <option value="{{ $barang->id }}">{{ $barang->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="jumlah_diminta">Jumlah Diminta</label>
                                <input type="number" class="form-control" id="jumlah_diminta" wire:model="qty"
                                    required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tanggal_pengajuan">Tanggal Pengajuan</label>
                                <input type="date" class="form-control" id="tanggal_pengajuan"
                                    wire:model="tanggal_pengajuan" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tanggal_pakai">Tanggal Pakai</label>
                                <input type="date" class="form-control" id="tanggal_pakai" wire:model="tanggal_pakai"
                                    required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="tanggal_pengembalian">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" id="tanggal_pengembalian"
                                    wire:model="tanggal_pengembalian" required>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>


                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
