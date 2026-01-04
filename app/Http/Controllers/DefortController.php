<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Models\About;

class DefortController extends Controller
{
    public function index(){
        return view('index');
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
        return redirect('/')->with('success','Message received successfully!');
    }

    public function about(){
        $about = About::where('id', 1)->first();
        return view('about', ['about' => $about]);
    }
}
