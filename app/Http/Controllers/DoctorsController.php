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
        $doctors = Doctor::findOrFail($id);
        return view('doctors.show', compact('doctors'));
    }

    public function edit($id) {
        $doctors = Doctor::findOrFail($id);
        return view('doctors.edit', compact('$doctors'));
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
