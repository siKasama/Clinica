<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;


class DoctorsController extends Controller
{
    public function index() {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    public function create() {
        return view('doctors.create');
    }

    public function store(StoreDoctorRequest $request) {
        $doctor = Doctor::create($request->validated());
        return redirect('/doctors')->route('doctors.index');
    }

    public function show($id) {
        $doctorId = Doctor::findOrFail($id);
        return view('doctors.show', compact('doctorId'));
    }

    public function edit($id) {
        $doctorId = Doctor::findOrFail($id);
        return view('doctors.edit', compact('$doctorId'));
    }

    public function update(UpdateDoctorRequest $request, Doctor $doctor) {
        $doctor->update(array_filter($request->validated()));
        return redirect('/doctors')->route('doctors.index');
    }

    public function destroy(Doctor $doctor) {
        $doctor->delete();
        return redirect('/doctors')->route('doctors.index');
    }

}
