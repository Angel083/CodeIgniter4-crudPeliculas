<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;

class Categoria extends BaseController
{
    public function index()
    {
        $categoriaModel = new CategoriaModel();
        $categorias = $categoriaModel->findAll();
        return view("categoria/index", ["categorias"=> $categorias]);
    }
    public function show ($id){
        $categoriaModel = new CategoriaModel();
        $categoria = $categoriaModel->find($id);
        return view("categoria/show", ["categoria"=> $categoria]);
    }

    public function new()
    {
        return view("categoria/new");
    }
    public function create (){
        $titulo = $this->request->getPost("titulo");
        $categoriaModel = new CategoriaModel();
        $categoriaModel->insert([
            "titulo"=> $titulo
        ]);
        return redirect("categoria");
    }

    public function edit ($id){
        $categoriaModel = new CategoriaModel();
        $categoria = $categoriaModel->find($id);
        return view("categoria/edit", ["categoria" => $categoria]);
    }
    public function update ($id){
        $categoriaModel = new CategoriaModel();
        $categoriaModel->update($id,[
            "titulo"=> $this->request->getPost("titulo")
        ]);
        return redirect("categoria");
    }

    public function delete ($id){
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);
        return redirect("categoria");
    }
}
