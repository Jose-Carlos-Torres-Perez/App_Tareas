<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Project $project)
    {
         

         $tasks= $project->tasks;

    return view('task.index', compact('tasks','project'));
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
   public function store(Request $request, Project $project)
    {
        
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $project->tasks()->create([
            'title' => $request->title,
            'status' => 'pending',
        ]);

        return redirect()->route('projects.show', $project);
    }


    /**
     * 
     */
    public function show(Task $task)
    {
    if ($task->Project_id !== auth()->$this->id()) {
        abort(403);
    }

    return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
