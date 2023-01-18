<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return MainController::class;
        return view('welcome');
    }
    public function poster(){
        return response()->json(['test' => 'ok']);
    }
    public function putter(){
        return response()->json(["putter ok"]);
    }
    public function html(){
        return response("current html string");
    }
}
