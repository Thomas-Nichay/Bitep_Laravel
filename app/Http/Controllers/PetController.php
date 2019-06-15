<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller {
    public function index() {
        /*
        $pet = Pet::all();
        return view('cadastrarPet',compact('pets'));
        */
    }

    public function create() {
        
    }

    public function store(Request $request) {
         //dd($request->all());

        //$dono = $request->session()->get(); //pegar o usuario ativo
        $dono = 1;
        $pet = new Pet();
        if($request->input('in') == "cadastrarPet"){
            $pet->nome = $request->input('nome');
            $pet->raca = $request->input('raca');
            $pet->dataNascimento = $request->input('dataNascimento');
            $pet->idade= $request->input('idade');
            $pet->especie = $request->input('especie');
            $pet->genero= $request->input('genero');
            $pet->dono_id = $dono; //$request->$dono; //->puck('id');     //cadastrar o id do usuario.
            $pet->save();


            //echo "$pet->nome/n,$pet->dono_id";
        }else{
            //echo "FALHA NO CADASTRO DO PET";   
        }
        return view('/meusPets',compact('pet'));
    }

    public function show($id) {
        //$pet = Pet::find($id);
        //return view('pet', compact('pet'));
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        /*
        if($request->input('in') == "editarPet"){
            $pet->nome = $request->input('nome');
            $pet->raca = $request->input('raca');
            $pet->idade = $request->input('idade');
            $pet->especie = $request->input('especie');
            $pet->genero = $request->input('genero');
            $pet->save();
        }else{
            echo "FALHA NO UPDATE DO PET";
        }*/
    }

    public function destroy($id) {
        /*
        if($request->input('in') == "excluir"){
            $pet->destroy();
        }else{
            echo "FALHA NA EXCLUSAO DO PET";
        }*/
    }
}
