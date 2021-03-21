<?php

namespace App\Http\Controllers;

use App\Models\Elementos;
use Illuminate\Http\Request;

class ElementosController extends Controller
{
    public function index() {
        $elementos = Elementos::all(); 
    
        return view('index', ['elementos' => $elementos]);
    }

    public function vistaAgregar() {
        return view('agregar');
    }

    public function crear(Request $request){
        Elementos::create([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
        ]);
        return redirect('/');
    }

    public function edit($id){
        $elementos = Elementos::find($id); 
        return view('editar', ['elementos' => $elementos]);
    }

    public function update(Elementos $elementos, Request $request){
        $elementos->update([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
        ]);
        return redirect('/');
    }

    public function destroy($id){
        $elementos = Elementos::find($id);

        $elementos->delete();

        return redirect('/');
    }
}
