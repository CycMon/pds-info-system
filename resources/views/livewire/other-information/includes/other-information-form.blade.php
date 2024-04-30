<div>
    <div class="modal-header">
        <h5 class="modal-title">{{ $otherInformation ? 'Update' : 'Add' }} Other Information</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $otherInformation ? 'updateOtherInformation' : 'createNewOtherInformation' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="category">Category <x-asterisks /> </label>
                        <select class="form-select @error('category') is-invalid @enderror" id="category"
                            wire:model="category">
                            <option value="">Select Option</option>
                            <option value="skill_and_hobby">Skill And Hobby</option>
                            <option value="recognition">Recognition</option>
                            <option value="organization">Organization</option>
                        </select>
                        @error('category')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="title">Title <x-asterisks /> </label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            wire:model="title" placeholder="Title" />
                        @error('title')
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
