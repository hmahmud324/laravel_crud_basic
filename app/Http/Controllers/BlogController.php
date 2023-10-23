<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog,$blogs;
    public function index()
    {
        return view('blog.index');
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'name'                  => 'required',
            'email'                 => 'required|unique:blogs,email',
            'password'              => 'required|min:9',
            'confirm_password'      => 'required|min:9|same:password',
        ],[
            'name.required'         => 'Name field is required',
            'email.required'        => 'Email field is required',
            'email.unique'          => 'Email has already been taken',
            'password.required'     => 'Password field is required',
        ]);
        Blog::newBlog($request);
        return back()->with('message', 'Blog info created successfully.');
    }

    public function manage()
    {
        $this->blogs = Blog::all();
        return view('blog.manage', ['blogs' => $this->blogs]);
    }

    public function edit($id)
    {
        $this->blog = Blog::find($id);
        return view('blog.edit',['blog' => $this->blog]);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name'                  => 'required',
            'email'                 => 'required',
            'current_password'      => 'required|min:9',
            'password'              => 'required|min:9|confirmed',
        ]);
        Blog::updateBlog($request, $id);
        return redirect('/blog/manage')->with('message', 'Blog info updated successfully');
    }

    public function delete($id)
    {
        Blog::deleteBlog($id);
        return back()->with('message', 'Blog info deleted successfully');
    }

}
