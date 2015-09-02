<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
     $users= User::lists('name','id')->all();
    return \View::make('home',compact('users'));
    }
    
}


