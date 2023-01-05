<?php
namespace Model;

class Arbol extends Herbicidas {
    //base de datos
    protected static $tabla = 'herbicidas';
    protected static $columnasDB = ['id','nombreHerbicida','unidad','cantidadHA','precioUnitario','id_colecta'];

    //atributos
    public $id;
    public $nombreHerbicida;		
    public $unidad;
    public $cantidadHA;
    public $precioUnitario;
    public $id_colecta;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombreHerbicida= $args['nombreHerbicida'] ?? '';
        $this->unidad= $args['unidad'] ?? '';
        $this->cantidadHA= $args['cantidadHA'] ?? 0;
        $this->precioUnitario= $args['precioUnitario'] ?? 0;
        $this->id_colecta = $args['id_colecta'] ?? null;
    }
}