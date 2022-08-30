<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;


class bootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "aqui se va a mostrar todos los bootcamp";
        return response()->json(["sucess" => true,"datos" => Bootcamp::all()] , 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verificar que llego aqui el payload
        $b=Bootcamp::create([
            "name" => $request->name,
            "description" => $request->description,
            "website" => $request->website,
            "phone" => $request->phone,
            "user_id" => $request->user_id
        ]);
        return response([ "success" => true , "data" => $b] , 201 );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(["success" => true , "data" => Bootcamp::find($id)] , 200);
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
        //1. seleccionar el bootcamp por id
        $bootcamp = Bootcamp::find($id);
        //2. Actualizarlo
        $bootcamp->update(
            $request->all()
        );
        //3. Hacer el Response respectivo
        return response()->json(["success" => true , "data" => $bootcamp], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //echo "aqui se va a eliminar el bootcamp cuyo id es $id";
        //1. seleccionas el bootcamp
        $bootcamp = Bootcamp::find($id);
        //2. eliminar ese bootcamp
        $bootcamp->delete();
        //3. Response:
        return response()->json(["success" => true ,"message" => "bootcamp eliminado", "data" => $bootcamp->id ], 200);
    }
}
