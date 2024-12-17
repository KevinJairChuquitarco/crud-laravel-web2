<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{

    public function index()
    {
        $animales = Animal::all();
        return view("animales.index", compact("animales"));
    }

    public function create()
    {
        return view('animales.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|string|max:255',
            'especie'=>'required|string|max:255'
        ]);
        
        Animal::create($request->all());
        return redirect()->route('animales.index')->with('success','Animal guardado correctamente');
    }

    public function show($id)
    {
        $animal = Animal::find($id);
        return view('animales.show',compact('animal'));
    }

    public function edit($id)
    {
        $animal = Animal::find($id);
        return view("animales.edit",compact("animal"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=>'required|string|max:255',
            'especie'=>'required|string|max:255'
        ]);

        $animal = Animal::find($id);

        if (!$animal){
            return redirect()->route("animales.index")->
            with('error','Animal no encontrado');
        }

        $animal->update($request->all());
        
        return redirect()->route("animales.index")->
            with('success','Animal actualizado');
        
    }

    public function destroy($id)
    {
        $animal =  Animal::find($id);

        if (!$animal){
            return redirect()->route("animales.index")->
            with('error','Animal no encontrado');
        }

        $animal->delete();

        return redirect()->route("animales.index")->
            with('success','Animal eliminado');
    }
}
