<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display list of all published services
     */
    public function index()
    {
        $services = Service::published()
            ->ordered()
            ->paginate(12);

        $featuredServices = Service::published()
            ->featured()
            ->ordered()
            ->take(6)
            ->get();

        return view('services.index', compact('services', 'featuredServices'));
    }

    /**
     * Display a single service
     */
    public function show(Service $service)
    {
        // Only show published services
        if ($service->status !== 'published') {
            abort(404);
        }

        // Get related services (other featured or same category)
        $relatedServices = Service::published()
            ->where('id', '!=', $service->id)
            ->ordered()
            ->take(3)
            ->get();

        return view('services.show', compact('service', 'relatedServices'));
    }
}
