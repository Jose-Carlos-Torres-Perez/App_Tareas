<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;



class ProjectController extends Controller
{
 public function show(Project $project)
{
    if ($project->user_id !== auth()->$this->id()) {
        abort(403);
    }

    return view('projects.show', compact('project'));
}
}
