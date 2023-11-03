<?php

namespace App\Livewire;

use App\Http\Controllers\MaterialController;
use App\Models\Material;
use Livewire\Component;

class Materials extends Component
{
    public $materials;
    public $resultId;

    public function mount($resultId)
    {
        $this->resultId = $resultId;
        $this->materials = Materials::all();
        $this->materials = app(MaterialController::class)->getMaterials();

    }

    public function render()
    {
        return view('livewire.materials');
    }
}
