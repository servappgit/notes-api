<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();
        return response()->json($notes);
    }
    /**
     * Display a listing of the resource.
     */
    public function indexUI()
{
    $response = Http::get('http://localhost:8000/api/notes');
    $notes = $response->json();

    \Log::debug($notes);
    return view('notes.index', compact('notes'));
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'text' => 'required|string'
        ]);

        $note = Note::create([
            'text' => $request->text
        ]);

        return response()->json($note, 201);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $note = Note::findOrFail($id);
        return response()->json($note);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
