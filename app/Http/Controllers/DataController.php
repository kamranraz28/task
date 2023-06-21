<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    //
    public function data(){
        return view('add');
    }
    public function adddata(Request $request)
    {
        $rules =[

            'name'=>'required|max:20',
            'email'=>'required|email',
        ];
        $cm=[

            'name.required'=>'Name is empty',
            'name.max'=>'Name can not contain more than 20 characters',
            'email.required'=>'E-mail is empty',
            'email.email'=>'Please enter a valid E-mail',
        ];
        $this->validate($request,$rules,$cm);



        $query = DB::table('employees')->insert([
            'employee_name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ]);
        return view('show');
    } 

    public function logIn(Request $req){
        return $req->input();
    }
}


