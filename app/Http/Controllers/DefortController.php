<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class DefortController extends Controller
{
    public function index(){
        return view('index');
    }

    public function projects(){
        $projects = Projects::latest()->get();
        return view('projects', ['projects' => $projects]);
    }

    public function contact(){
        return view('contact');
    }

}
