<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
class Products extends Component
{
    #[Title('Products')] 
    public function render()
    {
        return view('livewire.products');
    }
}