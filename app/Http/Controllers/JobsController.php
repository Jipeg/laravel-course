<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Jobs::all();
        return view('jobs', compact('jobs'));
    }

    public function view(int $id)
    {
        $job = Jobs::findorfail($id);
        return view('job', compact('job'));
    }
}
