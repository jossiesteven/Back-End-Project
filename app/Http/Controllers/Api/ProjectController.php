<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projectfs;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    //

    public function index(){

        return true;
    }


//GET
    public function read(Request $request){

        $clients = new Projectfs();

        $data = $clients->all();

        //return $data;
        return response()->json($data,200);

        
    }

//POST
    public function create(Request $request){

        $client = new Projectfs();

        $client->names=$request->input("names");
        $client->lastnames=$request->input("lastnames");
        $client->typeid=$request->input("typeid");
        $client->numberid=$request->input("numberid");
        $client->telephone=$request->input("telephone");
        $client->email=$request->input("email");
        $client->occupation=$request->input("occupation");
        $client->role=$request->input("role");

        $client->save();
        
        $message=["message"=>"Registro exitoso!!"];

        //Ojo con Response, se puede borrar y reemplazar por 201

    return response()->json($message,Response::HTTP_CREATED);
    //return response()->json($message,201);
        
    }

//PUT
    public function update(Request $request){

        $idClient = $request->query('id');

        $client = new Projectfs();

        $clientParticular = $client->find($idClient);

        $clientParticular->names=$request->input("names");
        $clientParticular->lastnames=$request->input("lastnames");
        $clientParticular->typeid=$request->input("typeid");
        $clientParticular->numberid=$request->input("numberid");
        $clientParticular->telephone=$request->input("telephone");
        $clientParticular->email=$request->input("email");
        $clientParticular->occupation=$request->input("occupation");
        $clientParticular->role=$request->input("role");
        
        $clientParticular->save();

        $message=[
            "message"=>"Actualización exitosa!!",
            "idClient"=>$request->query("id"),
            "nameClient"=>$clientParticular->names
        ];   

        return $message;
    }

//DEL
    public function delete(Request $request){

        $idClient = $request->query('id');

        $client = new Projectfs();

        $clientParticular = $client->find($idClient);
        
        $clientParticular->delete();

        $message=[
            "message"=>"Eliminación exitosa!!",
            "idClient"=>$request->query("id")            
        ];

        return $message;
    }
}
