<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <style>
        .position{
            margin-top: 5px;
        }
    </style>
    <div class="container">
        <div class="justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    Data-Supplier
                </div>
                <div class="card-body">
                    <a href="{{ route('suppliers.add')}}" class="btn btn-success position">Tambah Supplier</a>
                    <a href="{{ route('supplier.export')}}" class="btn btn-secondary position">Export Data Supplier</a>
                    <br><br>
                    @if (Session::has('notif'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                    @endif
                    <table class="table" id="data-table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($suppliers as $supplier)
                        <tbody>
                            <tr>
                                <td>{{$supplier->nama}}</td>
                                <td>{{$supplier->alamat}}</td>
                                <td>{{$supplier->email}}</td>
                                <td>{{$supplier->telepon}}</td>
                                <td class="col-2">
                                    <a href="{{ route('suppliers.edit', ['suppliers_id'=>$supplier->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                    {{-- <a href="#" wire:click.prevent="delete({{$supplier->id}})" class="btn btn-danger fa fa-trash"></a> --}}
                                </td>
                            </tr>    
                        </tbody>
                        @endforeach    
                    </table>
                </div>
            </div>
        </div>
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Import Data Supplier
            </div>
            <div class="card-body">
                <form action="{{ route('supplier.import')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        {{-- <label class="input-group-text" for="inputGroupFile01">Upload</label> --}}
                        <input type="file" name="file" class="form-control" id="inputGroupFile01">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
