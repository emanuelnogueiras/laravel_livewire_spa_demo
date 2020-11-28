<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Items;

class ItemList extends Component
{
    public $items;

    public function mount()
    {
        $this->actualizarLista();
    }

    public function actualizarLista()
    {
        $this->items = Items::all();
    }

    public function eliminar($id)    
    {
        Items::delete($id);
    }

    public function render()
    {
        return view('livewire.item-list');
    }
}
