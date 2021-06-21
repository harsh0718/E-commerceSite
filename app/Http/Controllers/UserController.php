<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $rq)
    {
        $user = User::where(['email'=>$rq->email])->first();

        if(!$user || !Hash::check($rq->password, $user->password))
        {
            return "Username And Password Are Not Matching";
        }
        else
        {
            $rq->session()->put('user',$user);
            return redirect("/");
        }
    }
}
