<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return Inertia::render('Projects/Index', ['projects' => $projects]);
    }

    public function create()
    {
        return Inertia::render('Projects/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumbnail_url' => 'nullable|url',
            'category' => 'required|string|max:255',
            'details_link' => 'nullable|url',
        ]);

        Project::create($request->all());

        return redirect()->route('projects.index');
    }

    public function edit(Project $project)
    {
        return Inertia::render('Projects/Edit', ['project' => $project]);
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumbnail_url' => 'nullable|url',
            'category' => 'required|string|max:255',
            'details_link' => 'nullable|url',
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
