<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use App\Models\Alumno;
use Illuminate\Http\Request;
 
class AlumnosController extends Controller
{
   public function getAll()
   {
    $response = new \stdClass();

    $alumno= Alumno::all();

    $response->success=true;
    $response->data=$alumno;

    return response()->json($response,200);

   }
   public function getItem($id)
   {
    $response = new \stdClass();

    $alumnos= Alumno::all();

    $response->success=true;
    $response->data=$alumnos;

    return response()->json($response,200);
   }
   public function save(Request $request)
   {
    $response = new \stdClass();

    $alumno= new Alumno();
    $alumno->save();

    $response->success=true;
    $response->data=$alumnos;

    return response()->json($response,200);
   }
}