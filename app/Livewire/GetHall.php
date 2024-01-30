<?php

namespace App\Livewire;

use App\Models\Hall;
use Livewire\Component;
use Livewire\Attributes\On;

class GetHall extends Component
{
    public $halls;

    //Слушаем событие - зал создан и перерисовываем компонент
    #[On('hall-updated')]
    public function hallCreated() {
        $this->refreshComponent();
    }

    //Функция перерисовки компонента
    protected function refreshComponent()
    {
        $this->dispatch('$refresh');
    }

    //Рендер
    public function render()
    {
        $this->halls = Hall::all();
        return view('livewire.get-hall');
    }


}
