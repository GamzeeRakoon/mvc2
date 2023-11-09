<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Materials;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class MaterialController extends Controller
{
    public function getUrl()
    {
        $url = url()->current();

        $baseUrl = url('/');
        $cleanedUrl = str_replace($baseUrl, '', $url);

        return $cleanedUrl;
    }

    public function getMaterials()
    {
        $materials = Materials::all();

        return $materials;
    }

    public function load($categoryButton = null, $CategoryId = null)
    {
        if ($categoryButton !== null && $CategoryId !== null) {
            $resultId = $CategoryId;
            $resultButton = $categoryButton;
        } else {
            $resultId = '0';
            $resultButton = 'home';
        }

        return view('index', compact('resultId', 'categoryButton'));
    }
}
