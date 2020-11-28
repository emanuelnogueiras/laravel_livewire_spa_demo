<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Items;

class ItemForm extends Component
{
    public $titulo;
    public $descripcion;

    public function mount()
    {        
        $this->titulo = "";
        $this->descripcion = "";
    }

    public function guardar()
    {
        $this->validate([
            "titulo" => "required",
            "descripcion" => "required"
        ]);

        Items::create([
            "titulo" => $this->titulo,
            "descripcion" => $this->descripcion
        ]);

        $this->redirect("/");
    }

    public function render()
    {
        return view('livewire.item-form');
    }
}
