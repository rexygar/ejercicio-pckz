<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Pagos;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('agendar');
    }

    public function agendar(Request $request){
        try {
            if($request->ajax()){
                $agenda = new Agenda();
                $pago = new Pagos();

                $titulo = (isset($request->titulo) && $request->titulo != null) ? $request->titulo : '';
                $fecha = (isset($request->fecha) && $request->fecha != null) ? $request->fecha : '';
                $inicio = (isset($request->inicio) && $request->inicio != null) ? $request->inicio : '';
                $duracion = (isset($request->duracion) && $request->duracion != null) ? $request->duracion : '';
                $monto = (isset($request->monto) && $request->monto != null) ? $request->monto : '';
                $descripcion = (isset($request->descripcion) && $request->descripcion != null) ? $request->descripcion : '';

                $pago->monto = $monto;
                $pago->descripcion = $descripcion;
                $pago->fecha = $fecha;
                $pago->save();

                $agenda->titulo = $titulo;
                $agenda->fecha = $fecha;
                $agenda->inicio = $inicio;
                $agenda->duracion = $duracion;
                $agenda->estado = 'Pendiente';
                $agenda->id_pago = $pago->id;
                $agenda->save();

                return ['message' => "Successful"];
            }
        } catch (\Throwable $th) {
            return "Error " + $th;
        }
    }
}
