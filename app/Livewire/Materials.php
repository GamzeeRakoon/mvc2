<?php

namespace App\Livewire;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProductController;
use App\Models\Material;
use Livewire\Component;

class Materials extends Component
{
    public $materials;
    public $resultId;
    public $cleanedUrl;
    public $urlHasProduct;

    public function mount()
    {
        $this->cleanedUrl = app(ProductController::class)->cleanUrl();
        $this->materials = app(MaterialController::class)->getMaterials();
    }


    public function render()
    {
        return view('livewire.materials');
    }
}
