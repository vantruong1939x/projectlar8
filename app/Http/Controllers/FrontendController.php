<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    function GetIndex()
    {
    	// echo 'nội dung';
    		return view("frontend.index");
    }
    function GetContact()
    {
    	// echo 'nội dung';
    		return view("frontend.contact-us");
    }
    function GetLogin()
    {
    	// echo 'nội dung';
    		return view("frontend.login");
    }
}
