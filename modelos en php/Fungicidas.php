<?php
namespace Model;

class Arbol extends Fungicidas {
    //base de datos
    protected static $tabla = 'fungicidas';
    protected static $columnasDB = ['id','nombreFungicida','unidad','cantidadHA','precioUnitario','id_colecta'];

    //atributos
    public $id;
    public $nombreFungicida;		
    public $unidad;
    public $cantidadHA;
    public $precioUnitario;
    public $id_colecta;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombreFungicida= $args['nombreFungicida'] ?? '';
        $this->unidad= $args['unidad'] ?? '';
        $this->cantidadHA= $args['cantidadHA'] ?? 0;
        $this->precioUnitario= $args['precioUnitario'] ?? 0;
        $this->id_colecta = $args['id_colecta'] ?? null;
    }
}