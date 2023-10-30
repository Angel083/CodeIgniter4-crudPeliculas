<?php

namespace App\Models;

use CodeIgniter\Model;

class PeliculaModel extends Model
{
    protected $table            = 'peliculas';
    protected $id = 'id';
    protected $allowedFields = ['titulo', 'descripcion'];
}
