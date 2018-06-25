<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/05/2018
 * Time: 02:30 PM
 */

namespace AppData\Model;


class Congreso
{
    private $tabla="congresos";
    private $id_congreso;
    private $descripcion_congreso;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {
        $sql="insert into {$this->tabla} values('0','{$this->descripcion_congreso}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT descripcion_congreso 
        FROM congresos";
        $datos[0]=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_congreso='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_congreso='{$id}'";
        $datos[0]=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update congreso set descripcion_congreso='{$this->descripcion_congreso}' where id_congreso='{$this->id_congreso}'";
        $this->conexion->QuerySimple($sql);
    }
}
