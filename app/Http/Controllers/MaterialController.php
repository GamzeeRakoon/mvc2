<?php

namespace App\Http\Controllers;

use App\Models\Materials;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class MaterialController extends Controller
{
    public function load($categoryButton, $CategoryId)
    {
        $resultId = $CategoryId;
        $resultButton = $categoryButton;

        return view('index', compact('resultId', 'categoryButton'));
    }

    public function getMaterials()
    {
        $materials = Materials::all();

        return $materials;
    }
}
