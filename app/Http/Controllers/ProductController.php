<?php

namespace App\Http\Controllers;

use App\Models\product;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $product_data = product::all();
        return view("products",['product_data'=>$product_data]);
    }

    function detail($id)
    {
        $data = product::find($id);
        return view("detail",["data"=>$data]);
    }

    function search(Request $rq)
    {
        $data = product::where('name','like','%'.$rq->input('search'). '%')->get();
        return View("search",["data"=>$data]);
    }
    function cart(Request $rq)
    {
        return "Hello Id Is ";
    }
}
