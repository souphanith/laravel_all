<div>
    @include('livewire.stModal')
    @include('livewire.editmodal')
    @include('livewire.deleteModal')
    @include('livewire.viewModal')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="float:left;">Hello Students</h4>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#stModal"
                            style="float: right">
                            Add Students
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($students->count() > 0)
                        @foreach ($students as $item)
                            <tr>
                                <td>{{ $item->student_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>

                                <td class="text-center">
                                    <button wire:click="viewStudent({{$item->id}})" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal">View</button>
                                    <button wire:click="editstudent({{$item->id}})" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                                    <button wire:click="deleteConfirm({{$item->id}})" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                            <td colspan="4" style="text-align: center"><small>ບໍ່ມີຂໍ້ມູນ..........!</small></td>
                    @endif
                </tbody>
            </table>
        </div>
    </div>


</div>
