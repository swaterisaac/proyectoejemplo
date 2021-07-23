<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group = Group::all();
        if ($group != NULL) {
            return response()->json($group);
        }
        return "No existen grupos.";
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
        $group = new Group();
        $group->name = $request->name;
        $group->id_course = $request->id_course;
        $group->save();
        return response()->json([
            "message"=>"Se ha creado un nuevo grupo.",
            "id"=> $group->id
        ],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Group::find($id);
        if ($group != NULL) {
            return response()->json($group);
        }
        return "No existe un grupo con esa ID.";
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
        $group = Group::find($id);
        if ($group != NULL) {
            if($request->name != NULL){
                $group->name = $request->name;
            }
            if($request->id_course != NULL){
                $group->id_course = $request->id_course;
            }
            $group->save();
            return response()->json($group);
        }
        return "No existe un grupo con esa ID.";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Group::find($id);
        if($group != NULL){
            $group->delete();
            return response()->json([
                "message"=>"Se ha borrado el grupo",
                "id"=>$id
            ]);
        }
        return "No existe un grupo con esa ID.";
    }
}
