<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class DefortController extends Controller
{
    public function index(){
        return view('index');
    }

    public function projects(){
        $projects = Projects::latest()->get();
        return view('projects', ['projects' => $projects]);
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

}
