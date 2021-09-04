<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;
use App\Models\Doctor;
use App\Models\Paciente;
use App\Http\Requests\StoreDiaryRequest;
use App\Http\Requests\UpdateDiaryRequest;


class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  {

        $diaries = Diary::all();
        return view('diaries.index', compact('diaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  {

        $pacientes = Paciente::orderBy('name')->get();
        $doctors = Doctor::orderBy('name')->get();

        return view('diaries.create', compact('pacientes', 'doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreDiaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiaryRequest $request)  {

        $diary = Diary::create($request->validated());

        return redirect()->route('diaries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)  {
        $diary = Diary::findOrFail($id);

        return view('diaries.show', compact('diary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)   {
        $diary = Diary::findOrFail($id);

        return view('diaries.edit', compact('diary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateAppointmentRequest  $request
     * @param  Diary  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiaryRequest $request, Diary $diary)   {
        $diary->update(array_filter($request->validated()));

        return redirect()->route('diaries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Diary  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diary $diary)  {
        $diary->delete();

        return redirect()->route('diaries.index');
    }
}
