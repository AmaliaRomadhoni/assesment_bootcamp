<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::orderBy('created_at', 'DESC')->get();
        return view('student.index', compact('students'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jurusan' => 'required',
        ]));
        Student::create($request->all());
        return redirect()->route('student.index')->with('success', 'Data added successfully');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);

        return view('student.show', compact('student'));   
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $request->validate([
            'npm' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jurusan' => 'required',
        ]);
        $student->update($request->all());
        return redirect()->route('student.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        return redirect()->route('student.index')->with('success', 'Data deleted successfully');
    }
}
