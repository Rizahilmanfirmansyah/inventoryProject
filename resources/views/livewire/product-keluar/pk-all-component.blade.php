<div>
    {{-- Be like water. --}}
    <div class="container">
        <div class="justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-header text-center">
                    Data Product Keluar 
                </div>
                <div class="card-body">
                    <a href="{{ route('product_keluar.add')}}" class="btn btn-success">Tambah Produk Keluar</a>
                    <a href="{{ route('product_keluar.export')}}"  class="btn btn-secondary">Export Data</a>
                    <br><br>
                    @if (Session::has('notif'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                    @endif
                    <table class="table" id="data-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>User</th>
                                <th>Quantity</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products_keluar as $product_keluar)
                            <tr>
                                <td>{{$product_keluar->product->nama}}</td>
                                <td>{{$product_keluar->customer->nama}}</td>
                                <td>{{$product_keluar->qty}}</td>
                                <td>{{$product_keluar->tanggal}}</td>
                                <td>
                                    <a href="{{ route('product_keluar.edit', ['pk_id'=>$product_keluar->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
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
        new DataTable('#product-keluar', {
            order: [['3', 'desc']]
        });
    </script>
</div>
