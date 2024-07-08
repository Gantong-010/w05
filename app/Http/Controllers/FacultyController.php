<?php

namespace App\Http\Controllers;

use App\Models\Faculties;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculties::orderBy('id')->paginate(10);
        return view('faculties.index', compact('faculties'));
    }

    public function create()
    {
        return view('faculties.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'faculty_th' => 'required',
            'faculty_en' => 'required',
        ]);
        faculties::create($request->post());

        return redirect()->route('faculties.index')->with('success','เพิ่มข้อมูลสำเร็จ');
    }

    public function show(faculties $faculty)
    {
        return view('faculties.show', compact('faculty'));
    }

    public function edit(faculties $faculty)
    {
        return view('faculties.edit', compact('faculty'));
    }

    public function update(Request $request, faculties $faculty)
    {
        $request->validate([
            'faculty_th' => 'required',
            'faculty_en' => 'required',
        ]);
        $faculty->fill($request->post())->save();
        return redirect()->route('faculties.index')->with('success','แก้ไขข้อมูลสำเร็จ');
    }

    public function destroy(faculties $faculty){
        $faculty->delete();
        return redirect()->route('faculties.index')->with('success','ลบข้อมูลสำเร็จ');
    }
}
