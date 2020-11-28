<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Items;

class Item extends Component
{
    public $item;

    public function mount($id)
    {
        $this->item = Items::find($id);
    }

    public function render()
    {
        return view('livewire.item');
    }
}
