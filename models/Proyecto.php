<?php

namespace Model;

use Model\ActiveRecord;

class Proyecto extends ActiveRecord
{

    protected static $tabla = 'proyectos';
    protected static $columnasDB = ['id', 'proyecto', 'url', 'proprietarioId'];

    public $id;
    public $proyecto;
    public $url;
    public $proprietarioId;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->proyecto = $args['proyecto'] ?? '';
        $this->url = $args['url'] ?? '';
        $this->proprietarioId = $args['proprietarioId'] ?? '';
    }

    public function validarProyecto()
    {
        if (!$this->proyecto) {
            self::$alertas['error'][] = 'El nombre del Proyecto es obligatorio';
        }

        return self::$alertas;
    }
}
