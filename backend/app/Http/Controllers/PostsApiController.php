<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

class PostsApiController extends Controller
{
   
    public function index(){
        return Post::all();
    }

    public function store(){
        request()->validate([
            'company_name' => 'required',
            'job_title' => 'required',
            'content' => 'required',
            'contact_address' => 'required',
            'company_name' => 'required',
            'due_date' => 'required',            
        ]);
    
        return Post::create([
            
            'company_name' => request('title'),
            'job_title' => request('job_title'),
            'content' => request('content'),
            'contact_address' => request('contact_address'),
            'company_name' => request('company_name'),
            'due_date' => request('due_date'),            
        ]);
    }    
    public function update(Post $post){
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
    
       $success =  $post->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);
    
        return [
            'success' => '$success'
        ];
    }        

    public function destroy(Post $post){
        $success = $post->delete();

        return [
            'success' => '$success',
        ];
    } 
}