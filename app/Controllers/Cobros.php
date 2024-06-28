<?php

namespace App\Controllers;

use App\Models\CobroModel;
use App\Models\UsuarioModel;

class Cobros extends BaseController
{
    protected $cobroModel;
    protected $usuarioModel;

    public function __construct()
    {
        $this->cobroModel = new CobroModel();
        $this->usuarioModel = new UsuarioModel();
    }

    public function index()
    {
        $data['clientes'] = $this->usuarioModel->findAll();
        return view('Estructura/registroPago', $data);
    }

    public function store()
    {
        $data = [
            'tipoPago' => $this->request->getPost('tipoPago'),
            'monto' => $this->request->getPost('monto'),
            'descuento' => $this->request->getPost('descuento'),
            'fecha' => $this->request->getPost('fecha'),
            'descripcion' => $this->request->getPost('descripcion'),
            'idUsuarioPago' => $this->request->getPost('idUsuarioPago'),
            'estado' => 'activo'
        ];

        $this->cobroModel->insert($data);
        return redirect()->to(base_url('cobros'))->with('mensaje', 'Cobro registrado exitosamente');
    }

    public function list()
    {
        $data['pagos'] = $this->cobroModel->getPagosWithUsers();
        return view('Estructura/listaPagos', $data);
    }

    public function edit($id)
    {
        $data['pago'] = $this->cobroModel->find($id);
        $data['clientes'] = $this->usuarioModel->findAll();
        return view('Estructura/editarPago', $data);
    }

    public function update($id)
    {
        $data = [
            'tipoPago' => $this->request->getPost('tipoPago'),
            'monto' => $this->request->getPost('monto'),
            'descuento' => $this->request->getPost('descuento'),
            'fecha' => $this->request->getPost('fecha'),
            'descripcion' => $this->request->getPost('descripcion'),
            'idUsuarioPago' => $this->request->getPost('idUsuarioPago')
        ];

        $this->cobroModel->update($id, $data);
        return redirect()->to(base_url('cobros/list'))->with('mensaje', 'Cobro actualizado exitosamente');
    }

    public function delete($id)
    {
        $this->cobroModel->delete($id);
        return redirect()->to(base_url('cobros/list'))->with('mensaje', 'Cobro eliminado exitosamente');
    }
}
