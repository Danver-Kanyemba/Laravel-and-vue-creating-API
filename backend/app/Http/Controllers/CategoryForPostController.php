<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryForPost;


class CategoryForPostController extends Controller
{
    function index(){
        return CategoryForPost::All();
    }
}
