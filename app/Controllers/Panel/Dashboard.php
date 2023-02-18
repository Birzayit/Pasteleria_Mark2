<?php

namespace App\Controllers\Panel;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    private function crear_vista($nombre_vista='', $datos = array())
    {   
        $datos['menu'] = array();
        return view($nombre_vista, $datos);
    }

    private function cargar_datos(){
        $datos = array();

        return $datos;
    }

    public function index()
    {
        return $this->crear_vista('Base/panel_base', $this->cargar_datos());
    }

    
    
}