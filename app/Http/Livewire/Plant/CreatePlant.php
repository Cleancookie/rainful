<?php

namespace App\Http\Livewire\Plant;

use Livewire\Component;

class CreatePlant extends Component
{
    public $name = 'default name';

    public $description = 'default description';

    public function render()
    {
        return view('livewire.plant.create-plant');
    }
}
