<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Support\Facades\Redirect;

class AgendaController extends Controller
{
    //CRUD
    //Create
    function SalvarContato(Request $request){
        $registros = $request->validate([
            'nome'=>'string|required',
            'email'=>'string|required'
        ]);
        Agenda::create($registros);
        return Redirect::route('/');
    }

    //Read
    public function showFormulario(){
        return view('cadastroagenda');
    }

    //Delete
    public function destroy(Agenda $id){
        $id->delete();
        return Redirect::route('home');
    }

    //Update
    public function update(Agenda $id, Request $request){
        $registros = $request->validate([
            'nome'=>'string|required',
            'email'=>'string|required'
        ]);
        $id->fill($registros);
        $id->save();
        return Redirect::route('home');
    }
}
