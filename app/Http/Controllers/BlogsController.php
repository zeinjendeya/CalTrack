<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class BlogsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:');
    // }

    // public function is_admin()
    // {
    //     if (Auth::user()->email == 'admin@admin.com') {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.blogs', compact('blogs'));
        // if($this->is_admin()){
        // } else {
        //     return redirect('/');
        // }
    
    }

    public function add()
    {
        return view('admin.blogs.addBlog');
        // if($this->is_admin()){
        // } else {
        //     return redirect('/');
        // }
    }

    public function create()
    {
        $data = request()->validate(['title' => 'required', 'body' => '', 'posted' => '']);
        if (array_key_exists('posted', $data)) {
            $data['posted'] = 1;
        } else {
            $data['posted'] = 0;
        }
        // dd($data);

        Blog::create([
            'title' => $data['title'],
            'body' => $data['body'],
            'posted' => $data['posted']
        ]);

        return redirect('/admin/blogs');
        // if($this->is_admin()){
        // } else {
        //     return redirect('/');
        // }
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.editBlog', compact('blog'));
    }

    public function update(Blog $blog){
        // dd(request()->all());
        $data = request()->validate([
            'title' => 'required',
            'body' => '',
            'posted' => ''
        ]);

        if(array_key_exists('posted', $data)){
            $data['posted'] = 1;
        }else{
            $data['posted'] = 0;
        }

        $blog->update($data);

        return redirect('/admin/blogs');
        // if($this->is_admin()){
        // } else {
        //     return redirect('/');
        // }
    }

    public function delete(Blog $blog){
        $blog->delete();
        return redirect('/admin/blogs');
        // if($this->is_admin()){
        // } else {
        //     return redirect('/');
        // }
    }
}
