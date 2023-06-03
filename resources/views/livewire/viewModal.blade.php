<!-- Modal -->
{{-- @if ($showModal) --}}
    <div wire:ignore.self class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">View Students Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>ID:</th>
                                <td>{{$view_student_id}}</td>
                            </tr>
                            <tr>
                                <th>Name:</th>
                                <td>{{$view_name}}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{{$view_email}}</td>
                            </tr>
                            <tr>
                                <th>Phone:</th>
                                <td>{{$view_phone}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
{{-- @endif --}}


