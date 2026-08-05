<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="container">
        <div class="justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    All User
                </div>
                <div class="card-body">
                    <a href="{{route('user.add')}}" class="btn btn-success">Tambah User</a>
                    <br><br>
                    @if (Session::has('notif'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                    @endif
                    <table class="table" id="data-table">
                        <thead>
                            <tr>
                                <th>Nama Pengguna</th>
                                <th>Email</th>
                                {{-- <th>Password</th> --}}
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                {{-- <td>{{$user->password}}</td> --}}
                                <td>{{$user->role}}</td>
                                <td>
                                    <a href="#" class="btn btn-secondary fa fa-pencil-square-o"></a>
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
        $(document).ready(function() {
        var table = $('#coba').DataTable( {
        scrollY:        "false",
        scrollX:        true,
        scrollCollapse: false,
        paging:         true,
        // fixedColumns:   {
        //     left: 0
        // }
    });
});
    </script>
</div>
