<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Pest\Support\View;

class ProjectController extends Controller
{


     /* Display a listing of the resource.
     */
   public function index()
{
      $projects = Auth::user()->projects;

    return view('project.index', compact('projects'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required']);
    Project::create([
        'title'=>$request->title,
        'user_id'=> Auth::id()
    ]);
    return redirect()->route('project.index');
    
        //
    }

    /**
     * Display the specified resource.
     */
  public function show()
{
    
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return View('project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Project $project)
    {
      $request->validate([
        'title' => 'required']);
    $project->update([
        'title'=>$request->title,
    ]);
    return redirect()->route('project.index');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
    $project->delete();
    return redirect()->route('project.index');
    }
}
