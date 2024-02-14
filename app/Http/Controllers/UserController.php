<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (){
        return 'Hello from UserController';
    }

   /*public function goto(){
        return view('users');
    }*/


    public function show($id){
        $data = array(
            "id" => $id,
            "name" => "Ma. Lyzza Joy D. Patacsil",
            "age" => 21,
            "email" => "lyzzapatacsil@gmail.com"
        );
        return Controllers('UserController', ['data' => $data]);
    }
}
