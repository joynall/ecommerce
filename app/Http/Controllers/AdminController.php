<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
         return view('backend.home');
    }

    function addCategory(){
        return view('backend.addCategory');
   }
}
