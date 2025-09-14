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
        return view('admin.project.project');
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
