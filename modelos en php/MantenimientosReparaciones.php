<?php
namespace Model;

class Arbol extends MantenimientosReparaciones{
    //base de datos
    protected static $tabla = 'mantenimientosReparaciones';
    protected static $columnasDB = ['id','nombreMantenimietoReparacion','unidades','precioUnitario','costoMes','costoAnual','porcenajeUso','id_colecta'];

    //atributos
    public $id;
    public $nombreMantenimietoReparacion;		
    public $unidades;
    public $precioUnitario;
    public $costoMes;
    public $costoAnual;
    public $porcenajeUso;
    public $id_colecta;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombreMantenimietoReparacion= $args['nombreMantenimietoReparacion'] ?? '';
        $this->unidades= $args['unidades'] ?? 0;
        $this->precioUnitario= $args['precioUnitario'] ?? 0;
        $this->costoMes= $args['costoMes'] ?? 0;
        $this->costoAnual= $args['costoAnual'] ?? 0;
        $this->porcenajeUso= $args['porcenajeUso'] ?? 0;
        $this->id_colecta = $args['id_colecta'] ?? null;
    }
}