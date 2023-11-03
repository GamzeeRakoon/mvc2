<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Request;

class CategoryController extends Controller
{
    public function getCategories()
    {
        $categories = Category::all();

        return $categories;
    }
}
