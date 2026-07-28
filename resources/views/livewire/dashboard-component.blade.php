<div>
    <h3>Hi, {{Auth::user()->name}} Selamat Datang Di SIPERBA PASIM Yaitu Sistem Persediaan Barang UNAS PASIM</h3>
    <br>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-cash"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{$customer}}</span></div>
                                <div class="stat-heading">Customer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-2">
                            <i class="pe-7s-cart"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{$supplier}}</span></div>
                                <div class="stat-heading">Supplier</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-3">
                            <i class="pe-7s-browser"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{$product}}</span></div>
                                <div class="stat-heading">Product</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-4">
                            <i class="pe-7s-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{$user}}</span></div>
                                <div class="stat-heading">User</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                Product
            </div>
            <div class="card-body">
                <table class="table table-head">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$product->nama}}</td>
                            <td>{{$product->qty}}</td>
                            <td>{{$product->category->name}}</td>              
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Custom Table</strong>
            </div>
            <div class="table-stats order-table ov-h">
                <table class="table" id="data-product">
                    <thead>
                        <tr>
                            <th class="serial">#</th>
                            <th class="avatar">Avatar</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="serial">1.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5469 </td>
                            <td>  <span class="name">Louis Stanley</span> </td>
                            <td> <span class="product">iMax</span> </td>
                            <td><span class="count">231</span></td>
                            <td>
                                <span class="badge badge-complete">Complete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="serial">2.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="images/avatar/2.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5468 </td>
                            <td>  <span class="name">Gregory Dixon</span> </td>
                            <td> <span class="product">iPad</span> </td>
                            <td><span class="count">250</span></td>
                            <td>
                                <span class="badge badge-complete">Complete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="serial">3.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="images/avatar/3.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5467 </td>
                            <td>  <span class="name">Catherine Dixon</span> </td>
                            <td> <span class="product">SSD</span> </td>
                            <td><span class="count">250</span></td>
                            <td>
                                <span class="badge badge-complete">Complete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="serial">4.</td>
                            <td class="avatar">
                                <div class="round-img">
                                    <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
                                </div>
                            </td>
                            <td> #5466 </td>
                            <td>  <span class="name">Mary Silva</span> </td>
                            <td> <span class="product">Magic Mouse</span> </td>
                            <td><span class="count">250</span></td>
                            <td>
                                <span class="badge badge-pending">Pending</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- /.table-stats -->
        </div>
    </div> --}}
    <script>
        new DataTable('#data-product', {
            info: false,
            order: false,
            paging: false
        });
    </script>
</div>
