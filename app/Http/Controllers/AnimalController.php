<?php

namespace App\Http\Controllers;

use App\Models\animals;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    //Views

    public function loadAnimalRegister(Request $req) {
        $animals = animals::get();
        return view('landing/animalRegister', compact('animals'));
    }
    
    public function loadAnimal(Request $req) {
        $animal = animals::where('id_animal', $req->id)->first();  
        return view('popup/animals', compact('animal'));
    }

    public function adoptAnimal() {
        $animal = animals::all();
        return view('landing/adoption', compact('animal'));
    }

    //CRUD

    public function animalImage($id) {
        $animals = animals::find($id);
        if (isset($animals['img_animal']) && !is_null($animals['img_animal'])) return response()->file(storage_path('app/' . $animals['img_animal']));
        abort(404);
    }


    public function animalRegister(Request $req)
    {
        $animal = new animals();
        $req['id_user'] = 1;
        animals::join('user', 'animals.id_user', 'user.id_user')->get();
        

        if ($req->file('photo')) {
            $path = $req->file('photo')->store('animal');
            $animal['img_animal'] = $path;
        }


        $animal->fill($req->all());

        if ($animal->save()) {
            return redirect('/adocao')->with('success', 'Animal cadastrado com sucesso!');
        } else {
            return redirect('/cadastro-animal')->with('error', 'Não foi possível efetuar o cadastro do animal');
        }
    }


}
