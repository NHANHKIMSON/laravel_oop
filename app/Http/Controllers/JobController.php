<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index() {
        return view('jobs.index', ['jobs' => Job::all()]);
    }

    public function create() {
        return view('jobs.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => ['required', 'string', 'min:3'],
            'salary' => ['required', 'numeric', 'min:0']
        ]);

        Job::create($validated);
        return redirect()->route('job.index');
    }

    public function show(Job $job) {
        return view('jobs.show', compact('job'));
    }

    public function edit(Job $job) {
        return view('jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job) {
        $validated = $request->validate([
            'title' => ['required', 'string', 'min:3'],
            'salary' => ['required', 'numeric', 'min:0']
        ]);

        $job->update($validated);
        return redirect()->route('job.show', $job);
    }

    public function destroy(Job $job) {
        $job->delete();
        return redirect()->route('job.index');
    }
}
