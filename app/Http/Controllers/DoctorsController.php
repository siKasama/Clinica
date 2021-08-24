<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorsController extends Controller
{
    public function index() {
        $doctorActs = Doctor::all();
        return view('doctors.index', compact('doctorActs'));
    }

    public function create() {
        return view('doctors.create');
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'nome' => 'required|max:255',
            'crm' => 'required',
            'especialidade' => 'required',
        ]);
        $show = Doctor::create($validateData);
        return redirect('/doctors')->with('success', 'Dados adicionados!');
    }

    public function show($id) {
        $doctorId = Doctor::findOrFail($id);
        return view('doctors.show', compact('$doctorId'));
    }

    public function edit($id) {
        $doctorId = Doctor::findOrFail($id);
        return view('doctors.edit', compact('$doctorId'));
    }

    public function update(Request $request, $id) {
        $validateData = $request->validate([
            'nome' => 'required|max:255',
            'crm' => 'required',
            'especialidade' => 'required',
        ]);
        Doctor::whereId($id)->update($validateData);
        return redirect('/doctors')->with('success', 'Dados atualizados!');
    }

    public function destroy($id) {
        $doctorActs = Doctor::findOrfail($id);
        $doctorActs->delete();
        return redirect('/doctors')->with('success', 'Dados removido!');
    }

}
