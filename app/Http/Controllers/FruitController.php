<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class FruitController extends Controller
{

    // public function index() {
    //     return view('fruit');
    // }


    public function index() {

        // 自動でjsonする
        //return \App\Fruit::all();

           return response()->json(\App\Fruit::all()->toArray()):

    }

}
