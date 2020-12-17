<?php

namespace App\Http\Controllers;

use App\Project;
// use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return View::make('projects.index', compact('projects'));
    }

   
    public function create()
    {
        return View::make('projects.create');
    }

    
    public function store(Request $request)
    {

         $validatedData = Request::make()->validate([
            'name' => 'required',
            'track' => 'required',
            'patend' => ['required','max:3', 'min:3']
        ]);


        Project::create($validatedData);

        return Redirect::make('/projects');
    }


    public function show(Project $Project)
    {
        return View::make('projects.show', compact('Project'));
    }

    public function edit(Project $Project)
    {
        return View::make('projects.edit', compact('Project'));
    }

    public function update(Request $request, Project $project)
    {
        $validatedData = Request::make()->validate([
            'name' => 'required',
            'track' => 'required',
            'patend' => 'required'
        ]);

        $project->update($validatedData);

        return Redirect::make('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return Redirect::make('/projects');
    }
}