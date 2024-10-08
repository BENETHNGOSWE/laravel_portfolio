<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    protected $data = [];

    public function __construct()
    {
        $this->data['site_name'] = 'Beneth';
    }
    public function index(): View
    {
        $this->data['project'] = Project::all();
        $this->data['emails'] = Email::all();
        return view('home', $this->data);
    }

    public function homepage()
    {
        $project = Project::all();

        return view('homepage.homepage', compact('project'));
    }

    public function homepage_method(): View
    {
        $project = Project::all();

        return view('homepage.homepage', compact('project'));
    }

    public function create()
    {
        return view('createproject.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'projectname' => 'required',
            'projectlink' => 'required|url',
            'image' => 'required',
        ]);

        $project = new Project();
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        $project->projectname = $request->projectname;
        $project->projectlink = $request->projectlink;
        $project->image = $file_name;

        $project->save();

        return redirect()->route('index')->with('success', 'Latest Prdoct Added');
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'projectname' => 'required',
            'projectlink' => 'required|url',
            'image' => 'nullable|image',
        ]);

        $project->projectname = $request->projectname;
        $project->projectlink = $request->projectlink;

        if ($request->hasFile('image')) {
            // Handle image upload
            $file_name = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $file_name);
            $project->image = $file_name;
        }

        $project->save();

        return redirect()->route('index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        // Optionally, you can delete the image file from storage
        $imagePath = public_path('images/' . $project->image);
        if (file_exists($imagePath)) {
            unlink($imagePath); // Delete the image file
        }

        $project->delete();

        return redirect()->route('index')->with('success', 'Project deleted successfully.');
    }

    public function storeemail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required|numeric',
            'message' => 'required',
        ]);
        // dd($request->all());

        $email = new Email();

        $email->name = $request->name;
        $email->email = $request->email;
        $email->contact = $request->contact;
        $email->message = $request->message;

        $email->save();

        return to_route('website.index')->with('success', 'Email sent successfuly');
    }
}
