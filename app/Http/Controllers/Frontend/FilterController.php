<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend/home/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Category()
    {
        $data['categories'] = Category::where('status', 1)->get();
        $data['products'] = Product::where('status', 1)->get();
        $data['all_products'] = Product::where('status', 1)->get();
        return view('frontend/category/index', $data);
    }

    public function getCollection(Request $request)
    {
        $data['all_products'] = Product::where('status', 1)->get();
        $product = Product::where('products.status', 1);
        if (isset($request->category)) {
            $product->whereIn('products.category_id', $request->category);
        }
        if (isset($request->brand)) {
            $product->whereIn('products.brand', $request->brand);
        }
        if (isset($request->price)) {
            foreach ($request->price as $range) {
                $lol = explode('-', $range);
                $minRange[] = $lol[0];
                $maxRange[] = $lol[1];
            }
            $product->whereBetween('products.price', [$minRange, $maxRange]);
        }
        $data['products']= $product->get();
        return view('frontend/snippets/product',$data);
    }

}
