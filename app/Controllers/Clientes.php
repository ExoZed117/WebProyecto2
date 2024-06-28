<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Clientes extends BaseController
{
    protected $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function index()
    {
        $data['clientes'] = $this->usuarioModel->where('rol', 'Cliente')->findAll();
        return view('Estructura/view_clientes', $data);
    }
}
