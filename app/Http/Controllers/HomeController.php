<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['user']=User::get();
        $data['category']=Category::where('status',1)->get();
        $data['product']=Product::where('status',1)->get();
        $data['products']=Product::where('status',1)->latest()->take(3)->get();
        return view('management/dashboard/index',$data);
    }
}
