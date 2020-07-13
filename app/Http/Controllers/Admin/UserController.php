<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware("auth");
    }
    
    function index(){
        if(Auth::user()->role != "Admin"){
            return redirect()->route("default");
        }
        return view("admin.user");
    }
}
