<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogInController extends Controller
{
    public function index(){

    	$aha = 'Cek 1 2 3 Oke';

    	return view("LogIn", compact('aha'));
    }
}
