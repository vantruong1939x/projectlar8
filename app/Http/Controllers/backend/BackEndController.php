<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackEndController extends Controller
{
    //
    function GetIndex()
    {
    		return view("backend.index");
    }
    function GetLogin()
    {
    		return view("backend.login.login");
    }
}
