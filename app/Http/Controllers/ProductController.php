<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $blogs;
    public function index()
    {
        return view('admin.product.index');
    }
    public function create(Request $request)
    {
        Product::newProduct($request);
        return redirect('/product/add')->with('message', 'Product info Create successfully..');
    }
}
