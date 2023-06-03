{{-- //Modal Edit --}}
@if ($deleteModal)
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">delete Confirm</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
        <div class="modal-body pt-4 pb-4">
            <h6>Are you sur to delete data!</h6>
        </div>

        <div class="modal-footer">
            <button class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
            <button class="btn btn-danger" wire:click="deletestudentData()">Yes Delete!</button>
        </div>

    </div>
</div>
</div>
@endif
