<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Projects;
use App\Models\Contact;
use App\Models\About;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Http\Requests\ProjectRequest;
use App\Http\Requests\AboutRequest;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function projects()
    {
        $projects = Projects::latest()->get();
        return view('admin.project.projectlist', ['projects' => $projects]);
    }

    public function addprojectform()
    {
        return view('admin.project.addproject');
    }

    public function addproject(ProjectRequest $request)
    {
        $validated = $request->validated();

        // Handling the image file upload
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

    public function editproject($id)
    {
        $project = Projects::where('id', $id)->first();
        return view('admin.project.editproject', ['project' => $project]);
    }

   public function editprojectsubmit(ProjectRequest $request)
{
    $validated = $request->validated();

    $oldImagePath = null;

    // Handling the image file upload ONLY if a new one is provided
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
        $image->storeAs('images', $imageName, 'public');
        $validated['image'] = 'images/' . $imageName;

        // Get the current (old) image path before updating
        $project = Projects::find($request['id']);
        $oldImagePath = $project->image;
    }

    // Update the project
    Projects::where('id', $request['id'])->update($validated);

    // Delete old image file ONLY if a new one was uploaded
    if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
        Storage::disk('public')->delete($oldImagePath);
    }

    return redirect('/adminprojects')->with('success', 'Project updated successfully!');
}

    public function delproject($id)
    {
        $project = Projects::where('id', $id)->first();

        // Delete the image file if it exists
        if ($project->image && Storage::disk('public')->exists($project->image)) {
            Storage::disk('public')->delete($project->image);
        }

        // Delete the project record
        Projects::where('id', $id)->delete();

        return redirect('/adminprojects')->with('success', 'Project deleted successfully!');
    }

    //Contact
    public function contact()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.contact', ['contacts' => $contacts]);
    }

    public function destroycontact($id)
    {
        Contact::where('id', $id)->delete();
        return redirect('/admincontact')->with('success', 'Message has been deleted');
    }

    //About
    public function about()
    {
        About::firstOrCreate(['id' => 1]);
        $about = About::where('id', 1)->first();
        if ($about && $about->description) {
        $about->description = strip_tags($about->description, '<p><strong><em><ul><ol><li><a>');
        // Remove problematic characters
        $about->description = str_replace(['`', "\n", "\r", '"', "'"], ['\\`', ' ', ' ', '\\"', "\\'"], $about->description);
    }
        return view('admin.about.about', ['about' => $about]);
    }

    public function addabout(AboutRequest $request)
    {
        $validated = $request->validated();
        $validated['description'] = strip_tags($validated['description'], '<p><strong><em><ul><ol><li><a>');
        $validated['description'] = str_replace(['`', "\n", "\r"], ['\\`', ' ', ' '], $validated['description']);
        About::where('id', 1)->update($validated);
        return redirect('/adminabout')->with('success', 'About updated successfully!');
    }
}
