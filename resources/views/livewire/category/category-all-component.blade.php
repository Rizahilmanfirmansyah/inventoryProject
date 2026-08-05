<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="container">
        <div class="justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-header">
                    Category
                </div>
                <div class="card-body">
                    @if (Session::has('notif'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                    @endif
                    <a href="{{ route('category.add')}}" class="btn btn-success">Tambah Kategori</a>
                    <br><br>
                    <table id="data-table" class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Dibuat</th>
                                <th>Diupdate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>{{$category->updated_at}}</td>
                                <td>
                                    <a href="{{ route('category.edit', ['category_id'=>$category->id])}}" class="btn btn-secondary fa fa-pencil-square-o"></a>
                                    &nbsp;
                                    {{-- <a href="javascript:void(0)" wire:click.prevent="deleteConfirmation({{$category->id}})" class="btn btn-danger fa fa-trash"></a> --}}
                                    <a href="#" wire:click.prevent="delete({{$category->id}})" class="btn btn-danger fa fa-trash"></a>
                                </td>
                            </tr>
                            @endforeach       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        function confirmation(ev) {
          ev.preventDefault();
          var urlToRedirect = ev.currentTarget.getAttribute('href');  
          console.log(urlToRedirect); 
          swal({
              title: "Are you sure to Delete this post",
              text: "You will not be able to revert this!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willCancel) => {
              if (willCancel) {
  
  
                   
                  window.location.href = urlToRedirect;
                 
              }  
  
  
          });
  
          
      }
  </script> --}}
    <script>

        // function confirmation(ev)
        // {
        //     ev.preventDefault();

        //     var.urlToRedirect=ev.currentTarget.getAttribute('href');

        //     console.log(urlToRedirect);

        //     swal({
        //         title: "Are You Sure",
        //         text : "test",
        //         icon : "warning",
        //         button : true,
        //         dangerMode : true,
        //     })

        //     .then((willCancel)=>
        //     {
        //         if(willCancel)
        //         {
        //             window.location.href=urlToRedirect;
        //         }
        //     }
        //     )
            
        // }
        // document.addEventListener('show', function(e){
        //    Swal.fire({
        //    title: 'Are you sure?',
        //    text: "You won't be able to revert this!",
        //    icon: 'warning',
        //    showCancelButton: true,
        //    confirmButtonColor: '#3085d6',
        //    cancelButtonColor: '#d33',
        //    confirmButtonText: 'Yes, delete it!'
        //    }).then((result) => {
        //    if (result.isConfirmed) {
        //        Livewire.emit('deleteConfirmed');
        //     }
        //    });
        // });
    //     window.addEventListener('show', event => {
    //        Swal.fire({
    //        title: 'Are you sure?',
    //        text: "You won't be able to revert this!",
    //        icon: 'warning',
    //        showCancelButton: true,
    //        confirmButtonColor: '#3085d6',
    //        cancelButtonColor: '#d33',
    //        confirmButtonText: 'Yes, delete it!'
    //        }).then((result) => {
    //        if (result.isConfirmed) {
    //            Livewire.emit('deleteConfirmed');
    //         }
    //        });
    //    });
    </script>
        

 
</div>
