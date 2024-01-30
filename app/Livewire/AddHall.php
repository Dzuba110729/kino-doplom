<?php

namespace App\Livewire;

use App\Models\Hall;
use Livewire\Component;
use Livewire\Attributes\Validate;

class AddHall extends Component
{
    public $show = false; // Показываем ли попап

    #[Validate('required')]
    public $name = ""; //Название зала


    //Показать попап
    public function doShow() {
        $this->show = true;
    }
    //Скрыть попап
    public function doClose() {
        $this->show = false;
    }
    //Добавление зала
    public function save() {

        //Валидация формы
        $this->validate();

        //Создаем зал
        Hall::create([
            'name' =>  $this->name,
            'row' => 0,
            'place' => 0,
            'price' =>0,
            'vip_price' => 0,
            'is_active' => 0,
        ]);

        //Закрываем попап
        $this->show = false;

        //Отправляем событие - зал создан
        $this->dispatch('hall-updated');

    }

    public function render()
    {
        return view('livewire.add-hall');
    }
}
