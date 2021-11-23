<?php

namespace App\Http\Controllers;

use App\Project;
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
        return view('inicio.index');
    }
    public function latestProject()
    {
        $project = Project::orderBy('created_at', 'desc')->first();
        return response()->json($project, 200);
    }
    public function latestThreeProject()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(3);
        return response()->json($projects, 200);
    }
    public function allProjects()
    {
        $projects = Project::orderBy('created_at', 'desc')->paginate(8);
        return response()->json($projects, 200);
    }
}
