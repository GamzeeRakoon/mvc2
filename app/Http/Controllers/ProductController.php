<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct()
    {
        $products = Product::all();

        return $products;
    }

    public function cleanUrl()
    {
        $url = url()->current();

        $baseUrl = url('/');
        $cleanedUrl = str_replace($baseUrl, '', $url);

        return $cleanedUrl;
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
