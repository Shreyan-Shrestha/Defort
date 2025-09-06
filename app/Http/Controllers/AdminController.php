<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use App\Http\Requests\ProjectRequest;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\Console\Logger\ConsoleLogger;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function projects()
    {
        return view('admin.project.project');
    }

    // public function addproject(ProjectRequest $request)
    // {
    //     $validated = $request->validated();

    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $imageName = time() . '_' . $image->getClientOriginalName();
    //         $image->move(public_path('images'), $imageName); // Save to public/images
    //         $validated['image'] = 'images/' . $imageName; // Add image path to validated data
    //     }

    //     Projects::create($validated);
    //     return redirect('/adminprojects')->with('success', 'Added Project successfully!');
    // }
    public function addproject(ProjectRequest $request)
    {
            $validated = $request->validated();

            // Handle file upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('images', $imageName, 'public'); // Store in storage/app/public/images
                $validated['image'] = 'images/' . $imageName; // Add image path to validated data
            }

            // Create the project
            Projects::create($validated);

            return redirect('/adminprojects')->with('success', 'Added Project successfully!');
    }

    public function contact()
    {
        return view('admin.contact');
    }
}
