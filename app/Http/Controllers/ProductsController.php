<?php

namespace App\Http\Controllers;

use App\Test1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mysqli = new \mysqli('localhost','root','','e-shop');
        //Test1::all();

        return view('home');
    }
}
