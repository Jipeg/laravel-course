<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Jobs::latest()->get();
        return view('jobs.index', compact('jobs'));
    }

    public function view(int $id)
    {
        $job = Jobs::findorfail($id);
        return view('jobs.show', compact('job'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
        Jobs::create([
            'name' => request('username'),
            'skills' => "foo",
            'salary' => request('salary')
        ]);

        return redirect("/jobs");
    }
}
