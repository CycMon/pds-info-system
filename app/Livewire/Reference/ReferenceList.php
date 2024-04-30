<?php

namespace App\Livewire\Reference;

use App\Models\PersonalInformation;
use App\Models\Reference\Reference;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class ReferenceList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $personalInformationId;

    #[Rule('required|string')]
    public $name;

    #[Rule('required|string')]
    public $address;

    #[Rule('required|string')]
    public $telephone_no;

    public $reference;

    public function render()
    {
        $personalInformation = PersonalInformation::find($this->personalInformationId);
        $references = $personalInformation->reference()->latest()->paginate(5);
        return view('livewire.reference.reference-list', compact('references'));
    }

    public function openForm()
    {
        $this->reset(['name', 'address', 'telephone_no', 'reference']);
        $this->resetValidation();
        $this->dispatch('open-reference-form-modal');
    }

    public function createNewReference()
    {
        $data = $this->validate();
        $reference = new Reference();
        $reference->personal_information_id = $this->personalInformationId;
        $reference->name = $data['name'];
        $reference->address = $data['address'];
        $reference->telephone_no = $data['telephone_no'];
        $reference->save();

        $this->dispatch('alert', type: 'success', message: "Reference has been added.", title: "Reference");
        $this->dispatch('close-reference-form-modal');
    }

    public function showReference(Reference $reference)
    {
        $this->resetValidation();
        $this->reference = $reference;
        $this->name = $reference->name;
        $this->address = $reference->address;
        $this->telephone_no = $reference->telephone_no;
        $this->dispatch('open-reference-form-modal');
    }

    public function updateReference()
    {
        $data = $this->validate();
        $this->reference->update($data);
        $this->dispatch('alert', type: 'success', message: "Reference has been updated.", title: "Reference");
        $this->dispatch('close-reference-form-modal');
    }

    public function openDeleteReferenceModal(Reference $reference)
    {
        $this->reference = $reference;
        $this->dispatch('open-reference-delete-modal');
    }

    public function destroyReference()
    {
        $this->reference->delete();
        $this->dispatch('alert', type: 'success', message: "Reference has been deleted.", title: "Reference");
        $this->dispatch('close-reference-delete-modal');
    }
}
