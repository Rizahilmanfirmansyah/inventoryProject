<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 24rem">
                <div class="card-header">
                    Tambah Kategori
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="addCategory">
                        <div class="form-group">
                            <label for="Name">Nama Kategori</label>
                            <input type="text" class="form-control" wire:model="name">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
