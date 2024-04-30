<div>
    <div class="modal-header">
        <h5 class="modal-title">{{ $skillAndHobby ? 'Update' : 'createNewSkillAndHobby' }} Skills and Hobbies</h5>
        <span class="pull-right" wire:loading>
            <img src="{{ asset('img/spinner.gif') }}">
        </span>
    </div>
    <form wire:submit="{{ $skillAndHobby ? 'updateSkillAndHobby' : 'createNewSkillAndHobby' }}">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="category">Category <x-asterisks /> </label>
                        <select class="form-select @error('category') is-invalid @enderror" id="category"
                            wire:model="category">
                            <option value="">Select Option</option>
                            <option value="skill">Skill</option>
                            <option value="hobby">Hobby</option>
                        </select>
                        @error('category')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="skill_or_hobby_name">Name of Skill or Hobby <x-asterisks /> </label>
                        <input type="text" class="form-control @error('skill_or_hobby_name') is-invalid @enderror"
                            id="skill_or_hobby_name" wire:model="skill_or_hobby_name"
                            placeholder="Name of Skill or Hobby" />
                        @error('skill_or_hobby_name')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="recognition">Non-Academic Distinctions/Recognition <x-asterisks /> </label>
                        <input type="text" class="form-control @error('recognition') is-invalid @enderror"
                            id="recognition" wire:model="recognition" placeholder="Distinctions/Recognition" />
                        @error('recognition')
                            <x-input-error message="{{ $message }}" />
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="organization">Association/Organization <x-asterisks /> </label>
                        <input type="text" class="form-control @error('organization') is-invalid @enderror"
                            id="organization" wire:model="organization" placeholder="Association/Organization" />
                        @error('organization')
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
