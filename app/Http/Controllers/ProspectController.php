<?php

namespace App\Http\Controllers;

use App\Prospect;
use Illuminate\Http\Request;

class ProspectController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function show(Prospect $prospect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function edit(Prospect $prospect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prospect $prospect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospect $prospect)
    {
        //
    }
}
