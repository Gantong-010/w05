<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function index()
    {
       $vaccines = Vaccine::orderBy('id')->paginate(10);
        return view('vaccine.index', compact('vaccines'));
    }

    public function create()
    {
        return view('vaccine.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vaccine' => 'required',
        ]);
        Vaccine::create($request->post());

        return redirect()->route('vaccines.index')->with('success','เพิ่มข้อมูลสำเร็จ');
    }

    public function show(Vaccine $vaccine)
    {
        return view('vaccine.show', compact('vaccine'));
    }

    public function edit(Vaccine $vaccine)
    {
        return view('vaccine.edit', compact('vaccine'));
    }

    public function update(Request $request, Vaccine $vaccine)
    {
        $request->validate([
            'vaccine' => 'required',
        ]);
        $vaccine->fill($request->post())->save();
        return redirect()->route('vaccines.index')->with('success','แก้ไขข้อมูลสำเร็จ');
    }

    public function destroy(Vaccine $vaccine){
        $vaccine->delete();
        return redirect()->route('vaccines.index')->with('success','ลบข้อมูลสำเร็จ');
    }
}
