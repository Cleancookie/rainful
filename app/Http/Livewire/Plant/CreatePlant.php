<?php

namespace App\Http\Livewire\Plant;

use App\Models\Plants\Plant;
use Livewire\Component;

class CreatePlant extends Component
{
    public Plant $plant;

    protected array $rules = [
        'plant.name' => ['required', 'string', 'min:3'],
        'plant.description' => ['required', 'string', 'max:420'],
    ];

    public function __construct($id = null)
    {
        parent::__construct($id);

        $this->plant = new Plant();
    }

    public function mount()
    {
        $this->plant->owned_by = auth()->user()->id;
    }

    public function save()
    {
        if (!$this->validate()) {
            return;
        }
        $this->plant->owned_by = auth()->user()->id;
        $this->plant->save();
        redirect()->route('plant.show', $this->plant->id);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.plant.create-plant');
    }
}
