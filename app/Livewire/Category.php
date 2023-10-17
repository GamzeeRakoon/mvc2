<?php

namespace App\Livewire;

use App\Http\Controllers\CategoryController;
use Livewire\Component;

class Category extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = app(CategoryController::class)->getCategories();
    }

    public function render()
    {
        return view('livewire.category');
    }
}
