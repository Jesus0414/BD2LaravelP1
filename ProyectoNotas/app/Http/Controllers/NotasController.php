<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;

class NotasController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function index() {
        $notas = Notas::all(); 
    
        return view('notas', ['notas' => $notas]);
    }
    
    public function vistaAgregar() {
        return view('agregar');
    }

    public function crear(Request $request){
        Notas::create([
            'titulo' => $request -> input('title'),
            'contenido' => $request -> input ('content'),
        ]);
    
        return redirect('/notas');
    }

    public function edit($id){
        $notas = Notas::find($id); //DB::table('notas')->where('id', $id)->first();
            
        return view('editar', ['notas' => $notas]);
            #return 'Aqui se van a editar las notas' .$id;
    }

    public function update(Notas $notas, Request $request){
        $notas->update([
            'titulo' => $request->input('title'),
            'contenido' => $request->input('content'),
        ]);
        return redirect('/notas');
    }

    public function destroy($id){
        $notas = Notas::find($id);

        $notas->delete();

        return redirect('/notas');
    }
}
