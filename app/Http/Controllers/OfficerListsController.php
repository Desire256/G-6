<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficerListsController extends Controller
{
    //
    public function index(){
        return view('officerlists');
    }
}
