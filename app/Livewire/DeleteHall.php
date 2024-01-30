<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Hall;

class DeleteHall extends Component
{
    public $id;

    public function mount($id = null)
    {
        $this->id = $id;
    }

    public function render()
    {
        return view('livewire.delete-hall');
    }

    public function delete(){
        Hall::destroy($this->id);
        $this->dispatch('hall-updated');
    }
}
