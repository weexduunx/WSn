<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;


class Index extends Component
{
    #[Title('Home')] 
    public function render()
    {
        return view('livewire.index');
    }
}