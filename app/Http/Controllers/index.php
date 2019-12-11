<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\Eventos;
use App\Cronograma;
use App\Fotografia;

class index extends Controller
{
    public function index() {
        $Eventos = App\Eventos::all();
        $galeria_eventos = Eventos::take(8)->get();
        $fotografias = Fotografia::all()->random(4);
        /* dd($fotografias); */
        /* dd($galeria_eventos); */
        return view('index',compact('Eventos', 'galeria_eventos', 'fotografias'));
    }

    public function cronograma(Request $request, $id){

        $Cronograma = Cronograma::where('id_evento', $id)->paginate(18);
        $cantidad = count($Cronograma);
        $evento = Eventos::where('id', $id)->first();      
        $evento = $evento->nombre;      
        
        return view('actividades_nc' ,compact('Cronograma','cantidad','evento')); 
    }   

    public function filtrar(Request $request){
        $filtro = request()->validate([
            'departamentos'=>'not_in:0'
        ],
        [
            'departamentos.not_in'=>__('¡Hohoho! Selecciona una opción valida para saber que actividades se estaran realizando en tu departamento')
        ]);
        $Cronograma_filtrado = Cronograma::where('departamento','like', $filtro)->get();
        $cantidad = count($Cronograma_filtrado);
        /* dd($Cronograma); */
        $evento = 'Para Disfrutar en Familia';
        return view('actividades_nc',compact('Cronograma_filtrado','cantidad','evento')); 
    }

}
