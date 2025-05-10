<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Hero;
use App\Models\Project;
use App\Models\Prolog;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::first();
        $prolog = Prolog::first();
        $sertif = Certificate::all()->take(3);
        $projects = Project::select('id','image', 'title', 'description', 'link')
            ->inRandomOrder()
            ->take(3)
            ->get();

        // dd($project);

        return view('landing', compact('hero', 'prolog', 'sertif', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hero $hero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hero $hero)
    {
        //
    }
}
