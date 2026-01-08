<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class Index extends Component
{

    //definición de propiedad pública
    public $products;

    //función que se ejecuta solo una vez. Como un constructor
    public function mount()
    {
        //obtine get(), 10 registros de productos, con la clase del modelo Products
        //y los asigna a la propiedad pública $products
        $this->products = Product::take(10)->get();
    }

    //función que se ejecuta en cada renderizado del componente, 
    //cada vez que hay un cambio en el componente
    public function render()
    {
        return view('livewire.products.index');
    }
}
