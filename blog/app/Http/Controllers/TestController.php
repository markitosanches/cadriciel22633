<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request){
        //$name = 'Peter';
        //return print_r($_POST);
        
        
        $name  = $request->prenom;
        $last_name  = $request->nom;



        return view('test', ['name' => $name, 
                            'last_name' => $last_name, 
                            'request' => $request]);
    }
    public function test(){
        return 'abc';
    }

    public function form(){
        return view('form');
    }

}
