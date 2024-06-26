<div>
    <div class="card border-0 shadow my-4">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h3 class="fs-5 fw-bold mb-0">Children</h3>
            <button type="button" class="btn btn-sm btn-primary" wire:click="openChildForm">Add Child</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">Name</th>
                            <th class="border-0">Birth Date</th>
                            <th class="border-0 rounded-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($children as $data)
                            <tr>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->child_name }}</a>
                                </td>
                                <td>
                                    <a class="small fw-bold" href="#">{{ $data->child_date_of_birth }}</a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button
                                            class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="bi bi-three-dots-vertical"></span>
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu py-2">
                                            <button type="button" class="dropdown-item fw-bold"
                                                wire:click="showChild({{ $data }})"><span
                                                    class="bi bi-pencil-fill text-success me-2"></span>Edit</button>
                                            <button type="button"
                                                class="dropdown-item text-danger rounded-bottom fw-bold"
                                                wire:click="openDeleteChildModal({{ $data }})"><span
                                                    class="bi bi-trash-fill text-danger me-2"></span>Remove</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="4">No record.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $children->links(data: ['scrollTo' => false]) }}
            </div>
        </div>
    </div>

    <div>
        {{-- form modal --}}
        <div class="modal fade" wire:ignore.self id="childModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    @include('livewire.child.includes.child-form')
                </div>
            </div>
        </div>

        {{-- delete modal --}}
        <div class="modal fade" data-backdrop="static" data-keyboard="false" id="childDeleteModal" tabindex="-1"
            role="dialog" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Confirmation</h5>
                        <span class="pull-right" wire:loading>
                            <img src="{{ asset('img/spinner.gif') }}">
                        </span>
                    </div>
                    <div class="modal-body">
                        <p>Delete child?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close-button" data-bs-dismiss="modal" class="btn btn-white shadow"><i
                                class="fas fa-window-close"></i> Close </button>
                        <button type="button" wire:click="destroyChild" id="destroy-islet-activity"
                            class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            window.addEventListener('open-child-form-modal', event => {
                $('#childModal').modal('show');
            });

            window.addEventListener('close-child-form-modal', event => {
                $('#childModal').modal('hide');
            });

            window.addEventListener('open-child-delete-modal', event => {
                $('#childDeleteModal').modal('show');
            });

            window.addEventListener('close-child-delete-modal', event => {
                $('#childDeleteModal').modal('hide');
            });
        </script>
    @endpush
</div>
