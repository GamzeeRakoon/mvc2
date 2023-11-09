<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getUrl($ProductId)
    {
        $url = url()->current();
        return $url;
    }

}
