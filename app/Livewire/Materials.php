<?php

namespace App\Livewire;

use App\Models\Material;
use Livewire\Component;

class Materials extends Component
{
    public $materials = []; // Initialize $materials as an empty array
    public $selectedCategoryId;

    public function selectCategory($categoryId)
    {
        $this->selectedCategoryId = $categoryId;
        $this->materials = Material::where('category_id', $categoryId)->get();
    }

    public function render()
    {
        return view('livewire.materials');
    }
}
