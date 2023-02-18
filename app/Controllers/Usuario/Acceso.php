<?php

namespace App\Controllers\Usuario;
use App\Controllers\BaseController;

class Acceso extends BaseController
{
    private function crear_vista ($nombre_vista='')
    {
        return view($nombre_vista);
    }

    public function index()
    {
        return $this->crear_vista('usuario/acceso');
    }

    
    
}
 