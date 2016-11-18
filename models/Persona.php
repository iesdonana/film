<?php

namespace app\models;

use yii\base\Model;

class Persona extends Model
{
    /**
     * Nombre por defecto.
     * @var string
     */
    const NOMBRE_DEFECTO = 'Manolo';
    /**
     * Apellidos por defecto.
     * @var string
     */
    const APELLIDOS_DEFECTO = 'Pérez';

    /**
     * El nombre de la persona.
     * @var string
     */
    private $_nombre = self::NOMBRE_DEFECTO;
    /**
     * Los apellidos de la persona.
     * @var string
     */
    private $_apellidos = self::APELLIDOS_DEFECTO;

    public function __construct($nombre = '', $apellidos = '', $config = [])
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        parent::__construct($config);
    }

    /**
     * Devuelve el nombre de la persona.
     * @return string El nombre de la persona.
     */
    public function getNombre()
    {
        return $this->_nombre;
    }

    /**
     * Asigna un nombre a la persona.
     * @param string $nombre El nuevo nombre de la persona.
     */
    public function setNombre($nombre = '')
    {
        $this->_nombre = trim($nombre) ?: self::NOMBRE_DEFECTO;
    }

    /**
     * Devuelve los apellidos de la persona.
     * @return string Los apellidos de la persona.
     */
    public function getApellidos()
    {
        return $this->_apellidos;
    }

    /**
     * Asigna unos apellidos a la persona.
     * @param string $apellidos Los nuevos apellidos de la persona.
     */
    public function setApellidos($apellidos = '')
    {
        $this->_apellidos = trim($apellidos) ?: self::APELLIDOS_DEFECTO;
    }
}
