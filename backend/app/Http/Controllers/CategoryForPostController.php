<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryForPost;


class CategoryForPostController extends Controller
{
    public function index(){
        return CategoryForPost::All();
    }
    public function store(){
        request()->validate([
            'name' => 'required',
        ]);
    
        return CategoryForPost::create([
            'name' => request('name'),
        ]);
    } 
}
