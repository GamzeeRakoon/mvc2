<?php

namespace App\Http\Controllers;

use App\Models\Materials;

class MaterialController extends Controller
{
    public function getMaterials()
    {
        $materials = Materials::all();

        return $materials;
    }
}
