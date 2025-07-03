<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::with('user')->get();
        return view('activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'datetime' => 'required|date',
            'paid' => 'required|boolean',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|between:0,10',
        ]);

        $validated['user_id'] = auth()->id();

        $activity = Activity::create($validated);

        return redirect()->route('activities.index')->with('success', 'Actividad creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = Activity::with('user')->findOrFail($id);
        return view('activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::findOrFail($id);
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activity = Activity::findOrFail($id);

        // Opcional: valida que el usuario autenticado sea el dueño
        // if ($activity->user_id !== auth()->id()) {
        //     abort(403);
        // }

        $validated = $request->validate([
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'datetime' => 'required|date',
            'paid' => 'required|boolean',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|between:0,10',
        ]);

        $activity->update($validated);

        return redirect()->route('activities.index')->with('success', 'Actividad actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id);

        // Opcional: valida que el usuario autenticado sea el dueño
        // if ($activity->user_id !== auth()->id()) {
        //     abort(403);
        // }

        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Actividad eliminada correctamente.');
    }
}