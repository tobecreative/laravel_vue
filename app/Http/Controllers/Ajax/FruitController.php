<?php

// ajax
namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    //
    public function index()
    {
        // ←自動でjsonにする;
        // return \App\Fruit::all();

         return response()->json(\App\Fruit::all()->toArray());
    }

}
