<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $projects = Project::orderBy('created_at', 'desc')->paginate(12);
        return view('inicio.index', compact('categories', 'projects'));
    }

    public function showProjects()
    {
    $categories = Category::all();
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('inicio.projects', compact('projects','categories'));
    }

    public function showProject(Project $project)
    {
        return view('inicio.project', compact('project'));
    }
}
