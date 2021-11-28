<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'link' => 'required',
        ]);

        $file = $request->file('image');
        //obtenemos el nombre del archivo
        $nombre = 'projects/' . $request->name . $file->getClientOriginalName();
        //$request->file('archivo')->store('public/projects');
        Storage::put('public/' . $nombre,  File::get($file));

        Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'link' => $request->link,
            'image' => $nombre,
        ]);
        return redirect()->action('ProjectController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        if ($request->file('image')) {
            Storage::delete('public/' . $project->image);
            $file = $request->file('image');
            //obtenemos el nombre del archivo
            $nombre = 'projects/' . $request->name . $file->getClientOriginalName();

            //$request->file('archivo')->store('public/projects');
            Storage::disk('local')->put('public/' . $nombre,  File::get($file));
            $project->update([
                'name' => $request->name,
                'description' => $request->description,
                'link' => $request->link,
                'image' => $nombre,
            ]);
        } else {
            $project->update([
                'name' => $request->name,
                'description' => $request->description,
                'link' => $request->link
            ]);
        }
        return redirect()->action('ProjectController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
