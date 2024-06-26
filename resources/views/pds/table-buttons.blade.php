<x-three-dots-dropdown>
    <a class="dropdown-item rounded-top" href="{{ route('pds.show', $id) }}"><span
            class="bi bi-pencil-fill text-success me-2"></span>Edit</a>
    {{-- @if ($status === 'active')
        <button class="deactivate-user dropdown-item" data-id="{{ $id }}"><span
                class="bi bi-person-fill-x text-warning me-2"></span>Deactivate</button>
    @else
        <button class="activate-user dropdown-item" data-id="{{ $id }}"><span
                class="bi bi-person-fill-check text-info me-2"></span>Activate</button>
    @endif --}}
    <button class="delete-pds dropdown-item rounded-bottom" data-id="{{ $id }}"><span
            class="bi bi-trash-fill text-danger me-2"></span>Remove</button>
    <a class="export-pds dropdown-item rounded-bottom" target="_blank" href="{{ route('pds.export-pds', $id) }}"><span
            class="bi bi-file-earmark-arrow-down-fill text-success me-2"></span>Export</a>
</x-three-dots-dropdown>
