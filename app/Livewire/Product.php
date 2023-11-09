<?php

namespace App\Livewire;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Livewire\Component;

class Product extends Component
{
    public $product;

    public $url;

    public function mount()
    {
        $this->product = app(ProductController::class)->getProduct();
        $this->url = app(ProductController::class)->cleanUrl();
    }

    public function render()
    {


        return view('livewire.product');
    }
}
