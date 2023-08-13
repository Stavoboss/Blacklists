<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\School;
use Illuminate\View\View;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $school = School::all();
        return view ('school.index')->with('school', $school);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view ('school.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        School::create($input);
        return redirect('school')->with('flash_message', 'School Addedd!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $school = School::find($id);
        return view('school.show')->with('school', $school);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $school = School::find($id);
        return view('school.edit')->with('school', $school);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $school = School::find($id);
        $input = $request->all();
        $school->update($input);
        return redirect('school')->with('flash_message', 'School Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        School::destroy($id);
        return redirect('school')->with('flash_message', 'School deleted!');  
    }
   
}

