<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    public function show(Request $request){
        $sensor = Sensor::where('codigo', $request->codigo)->first();
        if(!$sensor){
            return response()->json(['error' => 'Sensor não encontrado'], 404);
        }

        return response()->json([
            'success'=>'Sensor Econtrado',
            'status'=> $sensor->status
        ]);
    }

    public function update(Request $request){
        $sensor = Sensor::where('codigo', $request->codigo)->first();
        if(!$sensor){
            return response()->json(['error' => 'Sensor não encontrado'], 404);
        }

        $sensor->status = !$sensor->status;
        $sensor->save();

        return response()->json([
            'success'=>'Sensor Atualizado',
            'status'=> $sensor->status
        ]);
    }
}
