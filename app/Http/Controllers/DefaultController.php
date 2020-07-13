<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DefaultController extends Controller
{   

    function __construct()
    {
        $this->middleware("auth");
    }

    function index(){
        return view("auth.login");
    }

    function dashboard(){
        return view("dashboard");
    }
}
