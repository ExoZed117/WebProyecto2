<?php

namespace App\Controllers;
use App\Models\CobroModel;
use App\Models\UsuarioModel;
use App\Models\MateriaModel;

class Reportes extends BaseController
{
    protected $pagoModel;
    protected $userModel;
    protected $materiaModel;

    public function index()
    {
        return view('welcome_message');
    }

    public function reportes()
    {
        $this->pagoModel = new CobroModel();
        $this->userModel = new UsuarioModel();
        $this->materiaModel = new MateriaModel();

        $pagos = [
            'registros' => $this->pagoModel->getPagosSocios(),
            'usuarios' => $this->userModel->getUsuarios(),
            'clases' => $this->materiaModel->findAll() // Obtener todas las clases (materias)
        ];

        return view('Estructura/view_reportes', $pagos);
    }

    public function filtrar()
    {
        $this->pagoModel = new CobroModel();
        $this->userModel = new UsuarioModel();
        $this->materiaModel = new MateriaModel();

        $fechaIni = $this->request->getPost("fechaIni");
        $fechaFin = $this->request->getPost("fechaFin");
        $clase = $this->request->getPost("clase");

        // Obtener los pagos filtrados por rango de fechas y clase (materia)
        $pagos = $this->pagoModel->getPagosFiltrados($fechaIni, $fechaFin, $clase);

        // Obtener todos los usuarios para el dropdown de clases (materias)
        $usuarios = $this->userModel->getUsuarios();
        $clases = $this->materiaModel->findAll(); // Obtener todas las clases (materias)

        // Pasar los datos a la vista
        $data = [
            'registros' => $pagos,
            'usuarios' => $usuarios,
            'clases' => $clases
        ];

        return view('Estructura/view_reportes', $data);
    }
}
