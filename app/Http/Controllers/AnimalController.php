<?php

namespace App\Http\Controllers;

use App\Models\animals;
use DateTime;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    //Views

    public function loadAnimalRegister(Request $req) {
        $animals = animals::get();
        return view('landing/animalRegister', compact('animals'));
    }
    
    public function loadAnimal($id) {
        $date = date("d/m/Y"); 
        $animals = animals::find($id);  
        
        $animalTimeCreated = animals::where('created_at', "$date%")->get();


        return view('popup/animals', compact('animals', 'animalTimeCreated'));
    }


    public function adoptAnimal() {
        $date = date("Y-m-d H:00");
        $animals = animals::all();

        $animalTimeCreated = animals::where('created_at', "$date%")->get();

        return view('landing/adoption', compact('animals', 'animalTimeCreated'));
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
