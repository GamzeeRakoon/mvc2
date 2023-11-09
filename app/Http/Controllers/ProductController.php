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

    public function load($cleanedUrl = null, $productId = null)
    {
        if ($cleanedUrl !== null && $productId !== null) {
            $resultProductId = $productId;
            $resultUrl = $cleanedUrl;
        } else {
            $resultProductId = '0';
            $resultUrl = '/';
        }

        return view('index', compact('resultProductId', 'resultUrl'));
    }

}
