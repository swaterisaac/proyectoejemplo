<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Enrollment;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enrollment = Enrollment::all();
        if ($enrollment != NULL) {
            return response()->json($enrollment);
        }
        return "No existen matrículas.";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enrollment = new Enrollment();
        if ($request != NULL) {
            if ($request->level != NULL) {
                $enrollment->level = $request->level;
            }
            if ($request->date != NULL) {
                $enrollment->date = $request->date;
            }
            if ($request->id_student != NULL) {
                $enrollment->id_student = $request->id_student;
            }
            $enrollment->save();
            return response()->json([
                "message" => "Se ha creado una nueva matrícula.",
                "id" => $enrollment->id
            ], 202);
        }
        return "No existe una matrícula con esa ID.";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enrollment = Enrollment::find($id);
        if ($enrollment != NULL) {
            return response()->json($enrollment);
        }
        return "No existe una matrícula con esa ID.";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $enrollment = Enrollment::find($id);
        if ($enrollment != NULL) {
            if ($request->level != NULL) {
                $enrollment->level = $request->level;
            }
            if ($request->date != NULL) {
                $enrollment->date = $request->date;
            }
            if ($request->id_student != NULL) {
                $enrollment->id_student = $request->id_student;
            }
            $enrollment->save();
            return response()->json($enrollment);
        }
        return "No existe una matrícula con esa ID.";
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enrollment = Enrollment::find($id);
        if ($enrollment != NULL) {
            $enrollment->delete();
            return response()->json([
                "message" => "Se ha borrado la matrícula",
                "id" => $id
            ]);
        }
        return "No existe una matrícula con esa ID.";
    }
}
