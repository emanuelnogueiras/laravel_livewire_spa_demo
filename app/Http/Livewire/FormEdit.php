<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormEdit extends Component
{
    public $item;
    public $titulo;
    public $descripcion;

    public function mount($item)
    {                
        $this->item = $item;
        $this->titulo = $item->titulo;
        $this->descripcion = $item->descripcion;
    }

    public function actualizar()
    {
        $this->item->titulo = $this->titulo;
        $this->item->descripcion = $this->descripcion;
        $this->item->save();

        $this->redirect("/");
    }

    public function render()
    {
        return view('livewire.form-edit');
    }
}
