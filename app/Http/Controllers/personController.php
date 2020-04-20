<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\person;

class personController extends Controller
{
     public function index(){
       
         return person::all();
     }
}
