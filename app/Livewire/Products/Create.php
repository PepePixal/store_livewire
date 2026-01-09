<?php

namespace App\Livewire\Products;

use Livewire\Component;

class Create extends Component
{
    public function store()
    {
        dump('Storing product...');
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
