<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $currentUrl = $request->url();

        // Calculate URL depth
        $urlDepth = count(array_filter(explode('/', $currentUrl)));

        return view('index', ['urlDepth' => $urlDepth]);
    }
}
