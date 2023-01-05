<?php
namespace Model;

class Arbol extends RepuestoHerramientas {
    //base de datos
    protected static $tabla = 'repuestoHerramientas';
    protected static $columnasDB = ['id','nombreHerramienta','cantidadHectarea','precioUnitario','vidaUtil','valorRepocicion','id_colecta'];

    //atributos
    public $id;
    public $nombreHerramienta;
    public $cantidadHectarea;
    public $precioUnitario;
    public $vidaUtil;
    public $valorRepocicion;
    public $id_colecta;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombreHerramienta= $args['anioEstablecido'] ?? '';
        $this->cantidadHectarea= $args['vidaUtil'] ?? 0;
        $this->precioUnitario= $args['arbolesHA'] ?? 0;
        $this->vidaUtil= $args['costoArbol'] ?? 0;
        $this->valorRepocicion=$args['valorRepocicion'] ?? 0;
        $this->id_colecta = $args['id_colecta'] ?? null;
    }
}