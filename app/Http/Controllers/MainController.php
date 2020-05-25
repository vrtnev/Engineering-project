<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }
    public function categories() {
        return view('categories');
    }
    public function category($code) {
        $category = Category::where('code', $code)->first();
        dd($category);
        return view('category', compact('category'));
    }
    public function product($product = null) {
        dump($product);
        return view('product', ['product' => $product]);
    }
}
