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
    
    public function loadAnimal($id) {
        $animals = animals::find($id);  
        return view('popup/animals', compact('animals'));
    }

    public function animalPopUp($id) {
        $animals = animals::find($id);
        if(isset($animals['id_animal']) && !is_null($animals['id_animal'])) {

        }
    }

    public function adoptAnimal() {
        $animals = animals::all();
        return view('landing/adoption', compact('animals'));
    }

    //CRUD

    public function animalImage($id) {
        $animals = animals::find($id);
        if (isset($animals['img_animal']) && !is_null($animals['img_animal'])) return response()->file(storage_path('app/' . $animals['img_animal']));
        abort(404);
    }


    public function animalRegister(Request $req)
    {
        $animals = new animals();
        $req['id_user'] = 1;

        if ($req->file('photo')) {
            $path = $req->file('photo')->store('animal');
            $animals['img_animal'] = $path;
        }

        $animals->fill($req->all());
        $animals['id_user'] = $req->session()->get('user')->id_user;

        if ($animals->save()) {
            return redirect('/adocao')->with('success', 'Animal cadastrado com sucesso!');
        } else {
            return redirect('/cadastro-animal')->with('error', 'Não foi possível efetuar o cadastro do animal');
        }
    }


}
