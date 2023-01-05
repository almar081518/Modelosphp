<?php
namespace Model;

class Arbol extends Insecticidas {
    //base de datos
    protected static $tabla = 'insecticidas';
    protected static $columnasDB = ['id','nombreInsecticida','unidad','cantidadHA','precioUnitario','id_colecta'];

    //atributos
    public $id;
    public $nombreInsecticida;	
    public $unidad;
    public $cantidadHA;
    public $precioUnitario;
    public $id_colecta;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombreInsecticida= $args['nombreInsecticida'] ?? '';
        $this->unidad= $args['unidad'] ?? '';
        $this->cantidadHA= $args['cantidadHA'] ?? 0;
        $this->precioUnitario= $args['precioUnitario'] ?? 0;
        $this->id_colecta = $args['id_colecta'] ?? null;
    }
}