<?php
namespace Model;

class Arbol extends ValorPlantacion {
    //base de datos
    protected static $tabla = 'valorPlantacion';
    protected static $columnasDB = ['id','anioEstablecido','vidaUtil','arbolesHA','costoArbol','id_colecta'];

    //atributos
    public $id;
    public $anioEstablecido;
    public $vidaUtil;
    public $arbolesHA;
    public $costoArbol;
    public $id_colecta;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->anioEstablecido= $args['anioEstablecido'] ?? '';
        $this->vidaUtil= $args['vidaUtil'] ?? '';
        $this->arbolesHA= $args['arbolesHA'] ?? 0;
        $this->costoArbol= $args['costoArbol'] ?? 0;
        $this->id_colecta = $args['id_colecta'] ?? null;
    }
}