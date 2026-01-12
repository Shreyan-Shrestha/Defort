<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactUs;
use App\Models\About;
use Illuminate\Support\Facades\Mail;
use App\Models\Post;
use App\Http\Controllers\PostController;

class DefortController extends Controller
{
    public function index(){
        $posts=Post::published()
            ->with('category')
            ->latest('published_at')
            ->paginate(3);
        return view('index', ['posts' => $posts]);
    }

    public function projects(){
        $projects = Projects::latest()->get();
        return view('projects', ['projects' => $projects]);
    }

    public function viewproject($id){
        $project = Projects::where('id', $id)->first();
        return view('viewproject', ['project' => $project]);
    }

    //Contact
    public function contact(){
        return view('contact');
    }

    public function addcontact(ContactRequest $request){
        $validated = $request->validated();
        Contact::create($validated);
        return redirect('/contact')->with('success','Message received successfully!');
        $data = $request->all();
        Mail::to('herbanjahn@gmail.com')->send(new ContactUs($data));
    }

    public function about(){
        $about = About::where('id', 1)->first();
        return view('about', ['about' => $about]);
    }
}
