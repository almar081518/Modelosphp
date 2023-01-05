<?php
namespace Model;

class Arbol extends CombustiblesLubricantes{
    //base de datos
    protected static $tabla = 'combustiblesLubricantes';
    protected static $columnasDB = ['id','nombreCombustiblesLubricantes','litros','precioUnitario','costo','id_colecta'];

    //atributos
    public $id;
    public $nombreCombustiblesLubricantes;		
    public $litros;
    public $precioUnitario;
    public $costo;
    public $id_colecta;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombreCombustiblesLubricantes= $args['nombreCombustlesLubricantes'] ?? '';
        $this->litros= $args['litros'] ?? 0;
        $this->precioUnitario= $args['precioUnitario'] ?? 0;
        $this->costo= $args['costo'] ?? 0;
        $this->id_colecta = $args['id_colecta'] ?? null;
    }
}