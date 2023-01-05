<?php
namespace Model;

class Arbol extends FertilizantesGranular {
    //base de datos
    protected static $tabla = 'fertilizantesGranular';
    protected static $columnasDB = ['id','nombreFertilizante','unidad','cantidadHA','precioUnitario','id_colecta'];

    //atributos
    public $id;
    public $nombreFertilizante;	
    public $unidad;
    public $cantidadHA;
    public $precioUnitario;
    public $id_colecta;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombreFertilizante= $args['nombreFertilizante'] ?? '';
        $this->unidad= $args['unidad'] ?? '';
        $this->cantidadHA= $args['cantidadHA'] ?? 0;
        $this->precioUnitario= $args['precioUnitario'] ?? 0;
        $this->id_colecta = $args['id_colecta'] ?? null;
    }
}