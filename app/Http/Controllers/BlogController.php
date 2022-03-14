<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Blog;
use App\User;

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
    
    public function index(User $user,$id){
        
        $user = $user ->find($id);
        
        return view('blog/index')->with(['blogs'=>$user->getByBlog()]);
        
    }
    
    public function show(Blog $blog,$id){
        
        $blog = $blog->find($id);
        return view('blog/show')->with(['blog'=>$blog]);
        
    }
    
    public function edit(Blog $blog,$id){
        
        $blog = $blog->find($id);
        return view('blog/edit')->with(['blog'=>$blog]);
        
    }
    
    public function edit_post(BlogRequest $request,Blog $blog,$id){
        
        $blog = $blog->find($id);
        $input_blog = $request['blog'];
        $blog -> fill($input_blog) -> save();
        
        return view('template/stored');
        
    }
    
    public function delete(Blog $blog,$id){
        
        $blog = $blog->find($id);
        $blog->delete();
        return view('template/stored');
        
    }
    
}
