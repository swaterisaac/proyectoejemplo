<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject = Subject::all();
        if ($subject != NULL) {
            return response()->json($subject);
        }
        return "No existe asignaturas.";
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
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->save();
        return response()->json([
            "message" => "Se ha creado una nueva asignatura.",
            "id" => $subject->id
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
        $subject = Subject::find($id);
        if ($subject != NULL) {
            return response()->json($subject);
        }
        return "No existe una asignatura con esa ID.";
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
        $subject = Subject::find($id);
        if ($subject != NULL) {
            if ($request->name != NULL) {
                $subject->name = $request->name;
            }
            $subject->save();
            return response()->json($subject);
        }
        return "No existe una asignatura con esa ID.";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        if ($subject != NULL) {
            $subject->delete();
            return response()->json([
                "message" => "Se ha borrado la asignatura.",
                "id" => $id
            ]);
        }
        return "No existe una asignatura con esa ID.";
    }
}
