<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Blog;

class BlogController extends Controller
{
    public function create($id){
        
        return view('blog/create')->with(['id'=>$id]);
        
    }
    
    public function store(BlogRequest $request,Blog $post){
        
        $input_blog = $request['blog'];
        $post ->fill($input_blog)->save();
        
        return view('template/stored');
        
    }
}
