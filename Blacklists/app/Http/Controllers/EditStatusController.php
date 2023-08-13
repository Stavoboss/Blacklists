<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
 use App\Models\Teacher;
 use Illuminate\View\View;

class EditStatusController extends Controller
{
    //
    public function index(): View
    {
        $teacher = Teacher::all();
        return view ('teacher.index')->with('teacher', $teacher);
    }
    public function edit(string $id)
    {
        $teacher = Teacher::find($id);
        return view('teacher.edit_status')->with('teacher', $teacher);
    }
    public function update(Request $request, string $id)
    {
        $teacher = Teacher::find($id);
        $input = $request->only(['status']);
        $teacher->update($input);
        return redirect('teacher')->with('flash_message', 'Teacher Updated!');  
    }
}