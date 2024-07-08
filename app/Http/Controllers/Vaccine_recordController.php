<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Vaccine;
use App\Models\Vaccine_record;
use Illuminate\Http\Request;

class Vaccine_recordController extends Controller
{
    public function index()
    {
        $vaccine_records = Vaccine_record::orderBy('id')->paginate(10);
        return view('vaccine_record.index', compact('vaccine_records'));
    }

    public function create()
    { 
        $vaccines = Vaccine::all();
        $students = Student::all();
        return view('vaccine_record.create', compact('students','vaccines'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'std_id' => 'required',
            'vac_id' => 'required',
            'vaccined_date' => 'required'
        ]);
        Vaccine_record::create($request->post());

        return redirect()->route('vaccine_records.index')->with('success', 'เพิ่มข้อมูลสำเร็จ');
    }

    public function show(Vaccine_record $vaccine_record)
    {
        return view('vaccine_record.show', compact('vaccine_record'));
    }

    public function edit(Vaccine_record $vaccine_record)
    {
        $vaccines = Vaccine::all();
        $students = Student::all();
        return view('vaccine_record.edit', compact('vaccine_record','vaccines','students'));
    }

    public function update(Request $request, Vaccine_record $vaccine_record)
    {
        $request->validate([
            'std_id' => 'required',
            'vac_id' => 'required',
            'vaccined_date' => 'required'
        ]);
        $vaccine_record->fill($request->post())->save();
        return redirect()->route('vaccine_records.index')->with('success', 'แก้ไขข้อมูลสำเร็จ');
    }

    public function destroy(Vaccine_record $vaccine_record)
    {
        $vaccine_record->delete();
        return redirect()->route('vaccine_records.index')->with('success', 'ลบข้อมูลสำเร็จ');
    }
}
