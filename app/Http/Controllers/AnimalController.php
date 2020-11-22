<?php

namespace App\Http\Controllers;

use App\Models\animals;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function loadAnimalRegister(Request $req) {
        $animals = animals::get();
        return view('landing/animalRegister', compact('animals'));
    }

    public function adoptAnimal() {
        $animal = animals::all();
        return view('landing/adoption', compact('animal'));
    }

    public function animalRegister(Request $req)
    {
        $animal = new animals();
        $req['id_user'] = 1;
        $animal->fill($req->all());

        if ($req->file('photo')) {
            $path = $req->file('photo')->store('animal');
            $animal['img_animal'] = $path;
        }

        if ($animal->save()) {
            return redirect('/adocao')->with('success', 'Animal cadastrado com sucesso!');
        }
        return redirect('/cadastro-animal')->with('error', 'Não foi possível efetuar o cadastro do animal');
    }
}
