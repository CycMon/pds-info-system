<div>
    <div class="modal-header">
        <h5 class="modal-title">{{ $reference ? 'Update' : 'Add' }} Reference</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $reference ? 'updateReference' : 'createNewReference' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="name">Name <x-asterisks /> </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            wire:model="name" placeholder="Name" />
                        @error('name')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address <x-asterisks /> </label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                            wire:model="address" placeholder="Address" />
                        @error('address')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="telephone_no">Telephone no <x-asterisks /> </label>
                        <input type="text" class="form-control @error('telephone_no') is-invalid @enderror"
                            id="telephone_no" wire:model="telephone_no" placeholder="Telephone no" />
                        @error('telephone_no')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="close-button" class="btn btn-white shadow" data-bs-dismiss="modal"><i
                    class="far fa-window-close"></i>
                Close </button>
            <button type="submit" id="save" class="btn btn-primary"><i class="far fa-plus"></i> Save
            </button>
        </div>
    </form>
</div>
