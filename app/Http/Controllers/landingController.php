<?php

namespace App\Http\Controllers;

use App\Models\clients;
use App\Models\metadata;
use App\Models\portfolio;
use Illuminate\Http\Request;

class landingController extends Controller
{
    public function index()
    {
        $portfolio = portfolio::orderBy('created_at', 'desc')->take(6)->get();
        $meta = metadata::all();
        $clients = clients::all();
        return view('landing.index')->with([
            'portfolios' => $portfolio,
            'clients' => $clients,
            'meta' => $meta
            // 'award' => $award_data,
            // 'experience' => $experience_data,
            // 'education' => $education_data
        ]);
    }

}
