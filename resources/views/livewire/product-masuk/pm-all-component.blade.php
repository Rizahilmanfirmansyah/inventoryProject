<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="container">
        <div class="justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    Product Masuk
                </div>
                <div class="card-body">
                    <a href="{{ route('product_masuk.add')}}" class="btn btn-success">Tambah Product Masuk</a>
                    <a href="{{ route('product_masuk.export')}}" class="btn btn-secondary">Export Data</a>
                    <br><br>
                    @if (Session::has('notif'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                    @endif
                    <table class="table" id="data-table">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Supplier Dari</th>
                                <th>Quantity</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products_masuk as $product_masuk)
                            <tr>
                                <td>{{$product_masuk->product->nama}}</td>
                                <td>{{$product_masuk->supplier->nama}}</td>
                                <td>{{$product_masuk->qty}}</td>
                                <td>{{$product_masuk->tanggal}}</td>
                                <td>
                                    <a href="{{ route('product_masuk.edit', ['pm_id'=>$product_masuk->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        new DataTable('#product-masuk', {
            order: [['3', 'desc']]
        });
    </script>
</div>
