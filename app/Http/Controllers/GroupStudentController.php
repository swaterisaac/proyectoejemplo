<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GroupStudent;

class GroupStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupStudent = GroupStudent::all();
        if ($groupStudent != NULL) {
            return response()->json($groupStudent);
        }
        return "No existen grupos de estudiantes.";
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
        $groupStudent = new GroupStudent();
        if ($groupStudent->name != NULL) {
            $groupStudent->name = $request->name;
        }
        $groupStudent->save();
        return response()->json([
            "message" => "Se ha creado un nuevo grupo de estudiantes.",
            "id" => $groupStudent->id
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
        $groupStudent = GroupStudent::find($id);
        if ($groupStudent != NULL) {
            return response()->json($groupStudent);
        }
        return "No existe un grupo de estudiantes con esa ID.";
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
        $groupStudent = GroupStudent::find($id);
        if ($groupStudent != NULL) {
            if ($request->name != NULL) {
                $groupStudent->name = $request->name;
            }
            if ($request->id_asignatura != NULL) {
                $groupStudent->id_asignatura = $request->id_asignatura;
            }
            $groupStudent->save();
            return response()->json($groupStudent);
        }
        return "No existe un grupo de estudiantes con esa ID.";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $groupStudent = GroupStudent::find($id);
        if ($groupStudent != NULL) {
            if ($groupStudent != NULL) {
                $groupStudent->delete();
            }
            return response()->json([
                "message" => "Se ha borrado el grupo de estudiantes.",
                "id" => $id
            ]);
        }
        return "No existe un grupo de estudiantes con esa ID.";
    }
}
