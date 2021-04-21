<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        if(auth()->user()->name = 'null') {
            return 'login first';
        }
        else{
            return 'good';
        }
    }
}
