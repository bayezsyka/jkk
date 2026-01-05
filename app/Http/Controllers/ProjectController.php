<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display list of all published projects
     */
    public function index()
    {
        $projects = Project::published()
            ->orderBy('year', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        $featuredProjects = Project::published()
            ->where('is_featured', true)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('projects.index', compact('projects', 'featuredProjects'));
    }

    /**
     * Display a single project
     */
    public function show(Project $project)
    {
        // Only show published projects
        if ($project->status !== 'published') {
            abort(404);
        }

        // Get related projects (same client or location)
        $relatedProjects = Project::published()
            ->where('id', '!=', $project->id)
            ->where(function ($query) use ($project) {
                if ($project->client) {
                    $query->orWhere('client', $project->client);
                }
                if ($project->location) {
                    $query->orWhere('location', $project->location);
                }
            })
            ->take(3)
            ->get();

        return view('projects.show', compact('project', 'relatedProjects'));
    }
}
