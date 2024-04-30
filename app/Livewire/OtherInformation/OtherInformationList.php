<?php

namespace App\Livewire\OtherInformation;

use App\Models\OtherInformation\OtherInformation;
use App\Models\PersonalInformation;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class OtherInformationList extends Component
{


    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $personalInformationId;

    #[Rule('required|string')]
    public $category;

    #[Rule('required|string')]
    public $title;

    public $otherInformation;

    public function render()
    {
        $personalInformation = PersonalInformation::find($this->personalInformationId);
        $otherInformations = $personalInformation->otherInformation()->latest()->paginate(5);
        return view('livewire.other-information.other-information-list', compact('otherInformations'));
    }

    public function openForm()
    {
        $this->resetValidation();
        $this->reset(['category', 'title', 'otherInformation']);
        $this->dispatch('open-other-information-form-modal');
    }

    public function createNewOtherInformation()
    {
        $data = $this->validate();
        $otherInformation = new OtherInformation();
        $otherInformation->personal_information_id = $this->personalInformationId;
        $otherInformation->category = $data['category'];
        $otherInformation->title = $data['title'];
        $otherInformation->save();

        $category = ucwords($this->category);

        $this->dispatch('alert', type: 'success', message: "{$category} has been saved.", title: "{$category}");
        $this->dispatch('close-other-information-form-modal');
    }

    public function showOtherInformation(OtherInformation $otherInformation)
    {
        $this->resetValidation();
        $this->reset(['category', 'title']);

        $this->otherInformation = $otherInformation;
        $this->category = $otherInformation->category;
        $this->title = $otherInformation->title;

        $this->dispatch('open-other-information-form-modal');
    }

    public function updateOtherInformation()
    {
        $data = $this->validate();
        $this->otherInformation->update($data);

        $category = ucwords($data['category']);
        $this->dispatch('alert', type: 'success', message: "{$category} has been updated.", title: "{$category}");
        $this->dispatch('close-other-information-form-modal');
    }

    public function openDeleteModal(OtherInformation $otherInformation)
    {
        $this->otherInformation = $otherInformation;

        $this->dispatch('open-other-information-delete-modal');
    }

    public function deleteOtherInformation()
    {
        $this->otherInformation->delete();

        $category = ucwords($this->otherInformation->category);
        $this->dispatch('alert', type: 'success', message: "{$category} has been deleted.", title: "{$category}");
        $this->dispatch('close-other-information-delete-modal');
    }
}
