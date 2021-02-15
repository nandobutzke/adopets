<?php

namespace App\Http\Controllers;

use App\Models\animals;
use App\Models\user;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $user = user::where('id_user', $animals['id_user']);

        $animalTimeCreated = animals::where('created_at', "$date%")->get();


        return view('popup/animals', compact('animals', 'animalTimeCreated'));
    }

    public function findAnimal(Request $req) {

        $animals = new animals();

        if(!is_null($req->nm_name)) {
            $animals = $animals->where('nm_name', $req->nm_name);
        }

        if(!is_null($req->ds_species)) {
            $animals = $animals->where('ds_species', $req->ds_species);
        }

        if(!is_null($req->ds_genre)) {
            $animals = $animals->where('ds_genre', $req->ds_genre);
        }

        $animals = $animals->get();

        return view('landing.results', compact('animals'));

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

    public function updateAnimal(Request $req) {
        $animal = animals::find($req['id_animal']);

        $animal['nm_name'] = $req['nm_name'];
        $animal['nr_age'] = $req['nr_age'];
        $animal['ds_genre'] = $req['ds_genre'];
        $animal['ds_species'] = $req['ds_species'];
        $animal['ds_breed'] = $req['ds_breed'];
        $animal['ds_bio'] = $req['ds_bio'];
        $animal['dt_born'] = $req['dt_born'];
        //$animal['img_animal'] = $req['img_animal'];

        if ($req->file('photo_edit')) {
            $path = $req->file('photo_edit')->store('animal');
            $animal['img_animal'] = $path;
        }

        $animal->fill($req->all());

        $animal->save();

        return redirect('/perfil')->with('success', 'As informações foram salvas com sucesso');
    }


    public function animalRegister(Request $req)
    {
        $animals = new animals();

        if ($req->file('photo')) {
            $path = $req->file('photo')->store('animal');
            $animals['img_animal'] = $path;
        }

        $animals->fill($req->all());
        /* $animals['id_animal'] = $req->session()->get('animal')->id_animal; */

        if ($animals->save()) {
            return redirect('/animais')->with('success', 'Animal cadastrado com sucesso!');
        } else {
            return redirect('/cadastro-animal')->with('error', 'Não foi possível efetuar o cadastro do animal');
        }
    }

    public function deleteAnimal(Request $req, $id) {
        animals::destroy($id);

        $req->session()->flash(
            'delete',
            "Sucesso! O animal foi excluído!"
        );

        return redirect('/animais');
    }
}
