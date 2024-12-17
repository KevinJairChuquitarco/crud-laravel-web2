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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
