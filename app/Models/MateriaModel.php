<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriaModel extends Model
{
    protected $table      = 'materia';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre']; // Asegúrate de incluir los campos que se pueden insertar/actualizar

    public function getEstudianteMaterias()
    {
        $builder = $this->db->table('materia');
        $builder->select('estudiante.id, estudiante.nombre, estudiante.apellidoPat, estudiante.apellidoMat, materia.nombre AS materia, materia.docente AS docente');
        $builder->join('estudiante_materia', 'estudiante_materia.idMateria = materia.id', 'inner');
        $builder->join('estudiante', 'estudiante.id = estudiante_materia.idEstudiante', 'inner');

        return $builder->get()->getResultArray();
    }
}
