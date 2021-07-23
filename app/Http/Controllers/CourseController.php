<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::all();
        if ($course != NULL) {
            return response()->json($course);
        }
        return "No existen cursos.";
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
        $course = new Course();
        $request->validate([
            'name' => 'required|max:100',
            'id_subject' => 'required',
        ]);
        $course->name = $request->name;
        $course->id_subject = $request->id_subject;
        $course->save();
        return response()->json([
            "message" => "Se ha creado un nuevo curso.",
            "id" => $course->id
        ], 202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        if ($course != NULL) {
            return response()->json($course);
        }
        return "No existe un curso con esa ID.";
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
        $course = Course::find($id);
        if ($course != NULL) {
            if ($request->name != NULL) {
                $course->name = $request->name;
            }
            if ($request->id_asignatura != NULL) {
                $course->id_asignatura = $request->id_asignatura;
            }
            $course->save();
            return response()->json($course);
        }
        return "No existe un curso con esa ID.";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        if ($course != NULL) {
            $course->delete();
            return response()->json([
                "message" => "Se ha borrado el curso",
                "id" => $id
            ]);
        }
        return "No existe un curso con esa ID.";
    }
}
