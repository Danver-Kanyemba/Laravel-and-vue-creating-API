<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TitleForWeb;

class TitleApiController extends Controller
{
    public function index()
    {
        return TitleForWeb::all();
    }
}
