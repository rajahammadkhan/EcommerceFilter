<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ColourPivot;
use App\Models\SizePivot;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::get();
        return view('management/product/index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::where('status', 1)->get();
        return view('management/product/create', compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
        ]);
        if ($request->file('image')) {
            $image = $request->file('image');
            $main_next = $image->getClientOriginalExtension();
            $main_file = 'image' . time() . rand(1000, 14000000000) . '.' . $main_next;
            $image->move(public_path('/images/media'), $main_file);
        } else {
            $main_file = null;
        }
        $product = Product::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'size' => $request->size != null ? json_encode($request->size) : null,
            'colour' => $request->colour != null ? json_encode($request->colour) : null,
            'brand' => $request->brand,
            'price' => $request->price,
            'status' => $request->status,
            'image' => $main_file,
        ]);
        ProductController::sizeData($request, $product->id);
        ProductController::colorData($request, $product->id);
        return redirect()->route('product.show', $product->id)->with('success', "Product Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $cate = Category::where('status', 1)->get();
        return view('management/product/edit', compact('cate', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $product = Product::find($id);
        SizePivot::where('product_id',$id)->delete();
        ColourPivot::where('product_id',$id)->delete();
        if ($request->file('image')) {
            $image = $request->file('image');
            $main_next = $image->getClientOriginalExtension();
            $main_file = 'image' . time() . rand(1000, 14000000000) . '.' . $main_next;
            $image->move(public_path('/images/media'), $main_file);
        } else {
            $main_file = $product->image;
        }
        $product->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'size' => $request->size != null ? json_encode($request->size) : null,
            'colour' => $request->colour != null ? json_encode($request->colour) : null,
            'brand' => $request->brand,
            'price' => $request->price,
            'status' => $request->status,
            'image' => $main_file,
        ]);
        ProductController::sizeData($request,$id);
        ProductController::colorData($request,$id);
        return redirect()->back()->with('success', "Product Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function sizeData(Request $request, $id)
    {
        if (isset($request->size)) {
            foreach ($request->size as $size) {
                $size_data = [
                    'product_id' => $id,
                    'size' => $size,
                ];
                SizePivot::create($size_data);
            }
        }
    }

    public function colorData(Request $request, $id)
    {
        if (isset($request->colour)) {
            foreach ($request->colour as $colour) {
                $colour_data = [
                    'product_id' => $id,
                    'colour' => $colour,
                ];
                ColourPivot::create($colour_data);
            }
        }
    }
}
