<?php

namespace App\Models;

use CodeIgniter\Model;

class ParqueoModelo extends Model
{
    protected $table = 'vehiculo';
    public function getParqueo($vehplaca = false)
    {
        if ($vehplaca === false) {
            return $this->findAll();
        }

        return $this->where(['vehplaca' => $vehplaca])->first();
    }
    public function getById($placa=false){
        if ($placa===false) {
            return $this->findAll();
        }
        return $this->where(['vehplaca' => $placa])->first();
    }
    protected $allowedFields = ['vehplaca', 'vehtipo', 'vehconductor'];
}

