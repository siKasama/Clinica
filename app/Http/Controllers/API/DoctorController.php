<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {
        $doctors = Doctor::all();

        return response()->json($doctors, 200, [
                'Accept' => 'application/json', ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $doctor = Doctor::findOrFail($id);

        return response()->json($doctor, 200, [
            'Accept' => 'application/json', ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }


}
