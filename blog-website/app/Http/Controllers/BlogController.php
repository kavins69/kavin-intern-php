<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
        return view('home');
    }
    public function create(){
        return view('blog');
    }
    public function views(){
        return view('views');
    }

    public function store(Request $request){
        $data=$request->except('_token','submit');
        Blogs::create($data);
        return redirect('http://127.0.0.1:8000/views')->withMessage('Blog created successfully');
    }
}
