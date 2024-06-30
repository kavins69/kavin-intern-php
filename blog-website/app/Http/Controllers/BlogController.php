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
        $data=Blogs::all();
        // dd($data);
        return view('views',compact('data'));
    }
    public function viewblog(string $id){
        $data = Blogs::where('id', $id)->firstOrFail();
        return view('viewblog',compact('data'));
    }

    public function edit(string $id){
        $data = Blogs::where('id', $id)->firstOrFail();
        return view('edit',compact('data'));
    }

    public function update(Request $request,Blogs $blog){
        $data=$request->except('_token','_method','submit');
        $blog->update($data);

        return redirect('http://127.0.0.1:8000/views')->withMessage('Blog edited successfully'); 
    }

    public function upload(){
        return view('upload');
    }

    public function uploadpost(Request $request){
        $request->validate([
            'title'=>"required",
            'blog'=>"required"
        ],[
            'title.required'=>'please enter the title of your blog',
            'blog.required'=>'please upload your blog file'
        ]);
        $file=$request->file('blog');
        $destinationPath="upload";
        if($file->move($destinationPath,$file->getClientOriginalName())){
            echo 'file uploaded successfully';
        }
        else{
            echo 'file failed to upload';
        }
        $blog = file_get_contents($destinationPath.'/'.$file->getClientOriginalName());
        $data=$request->all('title');
        $data['blog']=$blog;
        Blogs::create($data);
        return redirect('http://127.0.0.1:8000/views')->withMessage('Blog created successfully');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>"required",
            'blog'=>"required"
        ],[
            'title.required'=>'please enter the title of your blog',
            'blog.required'=>'please fill any content for your blog'
        ]);
        $data=$request->except('_token','submit');
        Blogs::create($data);
        return redirect('http://127.0.0.1:8000/views')->withMessage('Blog created successfully');
    }

    public function delete(Blogs $blog){
        $blog->delete();
        return redirect('http://127.0.0.1:8000/views')->withMessage('Blog deleted successfully');
    }
}
