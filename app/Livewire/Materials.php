<?php

namespace App\Livewire;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MaterialController;
use App\Models\Material;
use Livewire\Component;

class Materials extends Component
{
    public $materials;
    public $resultId;
    public $url;


    public function mount()
    {
        $this->url = app(MaterialController::class)->getUrl();
        $this->materials = app(MaterialController::class)->getMaterials();
    }

    public function render()
    {
        return view('livewire.materials');
    }
}
