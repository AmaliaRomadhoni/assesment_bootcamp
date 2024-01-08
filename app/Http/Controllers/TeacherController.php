<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::orderBy('created_at', 'DESC')->get();
        return view('teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(([
            'nip' => 'required',
            'nama' => 'required',
            'gelar' => 'required',
            'jabatan' => 'required',
            'fakultas' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]));
        Teacher::create($request->all());
        return redirect()->route('teacher.index')->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'gelar' => 'required',
            'jabatan' => 'required',
            'fakultas' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);
        $teacher->update($request->all());
        return redirect()->route('teacher.index')->with('success', 'Data updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->delete();

        return redirect()->route('teache.index')->with('success', 'Data deleted successfully');
    }
}
