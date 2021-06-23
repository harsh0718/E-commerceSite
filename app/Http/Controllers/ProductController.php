<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\cart;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
        if($rq->session()->has('user'))
        {
            $cart = new cart;
            $cart->user_id=$rq->session()->get('user')['id'];
            $cart->product_id=$rq->product_id;
            $cart->save();
            return redirect('/');


        }
        else{
            return redirect("/login");
        }
    }
    static function cart_item()
    {
        $userid = Session::get('user')['id'];
        return  cart::where('user_id',$userid)->count();
    }
}
