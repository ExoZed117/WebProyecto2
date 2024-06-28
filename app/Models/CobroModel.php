<?php
namespace App\Models;

use CodeIgniter\Model;

class CobroModel extends Model
{
    protected $table      = 'pago';
    protected $primaryKey = 'idPago';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['idPago', 'tipoPago', 'monto', 'descuento', 'fecha', 'descripcion', 'mes', 'year', 'estado', 'idUsuarioPago'];

    public function getPagosSocios()
    {
        $builder = $this->db->table('pago');
        $builder->select('usuario.idUsuario, usuario.nombre, usuario.apellidoPat, usuario.apellidoMat, pago.monto, pago.fecha, pago.mes, pago.year, pago.tipoPago');
        $builder->join('usuario', 'usuario.idUsuario = pago.idUsuarioPago', 'inner');

        return $builder->get()->getResultArray();
    }

    public function getPagosFiltradosPorClase($fechaIni, $fechaFin, $clase)
    {
        $builder = $this->db->table('pago');
        $builder->select('usuario.nombre, usuario.apellidoPat, usuario.apellidoMat, pago.monto, pago.mes, pago.year');
        $builder->join('usuario', 'usuario.idUsuario = pago.idUsuarioPago');
        $builder->join('materia', 'materia.id = pago.idMateria');
        $builder->where('pago.fecha >=', $fechaIni);
        $builder->where('pago.fecha <=', $fechaFin);
        if ($clase != 0) {
            $builder->where('materia.id', $clase);
        }
        $query = $builder->get();

        return $query->getResultArray();
    }
    public function getPagosWithUsers()
    {
        $builder = $this->db->table($this->table);
        $builder->select('pago.*, usuario.nombre as nombreCliente');
        $builder->join('usuario', 'usuario.idUsuario = pago.idUsuarioPago');
        return $builder->get()->getResultArray();
    }
}
