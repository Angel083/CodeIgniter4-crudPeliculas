<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

use App\Models\PeliculaModel;

class PeliculaController extends BaseController
{
    public function index()
    {
        $peliculaModel = new PeliculaModel();
        $peliculas = $peliculaModel->findAll();

        return view("dashboard/pelicula/index", [
            'peliculas' => $peliculas
        ]);
    }
    public function show ($id)
    {
        $peliculaModel = new PeliculaModel();
        $pelicula = $peliculaModel->find($id);
        return view("dashboard/pelicula/show", [
            "pelicula" => $pelicula
        ]);
    }

    public function new ()
    {
      return view('dashboard/pelicula/new');
    }

    public function create ()
    {
        $peliculaModel = new PeliculaModel();
        $this->request->getPost('titutlo');
        $this->request->getPost('descripcion');
        $peliculaModel->insert([
            'titulo'=> $this->request->getPost('titulo'),
            'descripcion'=> $this->request->getPost('descripcion')
        ]);
        return redirect('dashboard/pelicula');
    }

    public function edit ($id)
    {
        $peliculaModel = new PeliculaModel();
        $pelicula = $peliculaModel->find($id); 
        return view('dashboard/pelicula/edit', ["pelicula" => $pelicula]);
    }

    public function update ($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->update($id, [
            'titulo' => $this->request->getPost("titulo"),
            'descripcion' => $this->request->getPost("descripcion")
        ]);
        return redirect('dashboard/pelicula');
    }
    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);
        return redirect('dashboard/pelicula');
    }
}


