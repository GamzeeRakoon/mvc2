<?php

namespace App\Livewire;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MaterialController;
use Livewire\Component;

class Product extends Component
{
    public $url;

    public function mount()
    {
        $this->url = app(MaterialController::class)->getUrl();
    }

    public function render()
    {
        return view('livewire.product');
    }
}
