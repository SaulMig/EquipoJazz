<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 09/05/2018
 * Time: 09:48 PM
 */

namespace AppData\Model;


class Personas
{
    private $tabla='personas';
    private $id_persona;
    private $ap_persona;
    private $am_persona;
    private $nombre_per;
    private $no_cedula;
    private $direccion;
    private $ciudad;
    private $telefono;
    private $email;
    private $especialidad;
    private $ano_titulacion;
    private $codigo_minsa;
    private $ano_estudio;
    private $estado;
    private $id_congreso;
    private $id_medico;

    private $conexion;

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

    function add(){
        $sql="insert into personas VALUES ('0','{$this->ap_persona}','{$this->am_persona}','{$this->nombre_per}',
{$this->no_cedula},{$this->direccion},{$this->ciudad},{$this->telefono},{$this->email},{$this->especialidad},
{$this->ano_titulacion},{$this->codigo_minsa},{$this->ano_estudio},{$this->estado},{$this->id_congreso},
{$this->id_medico})";
        $this->conexion->QuerySimple($sql);
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_persona='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="Select * from personas";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_persona='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update()
    {
        $sql = "update personas set ap_persona='{$this->ap_persona}',
               am_persona='{$this->am_persona}', nombre_per='{$this->nombre_per}',
               no_cedula='{$this->no_cedula}', direccion='{$this->direccion}', direccion='{$this->direccion}',
               ciudad='{$this->ciudad}', telefono='{$this->telefono}', email='{$this->email}', especialidad='{$this->especialidad}'
               , ano_titulacion='{$this->ano_titulacion}', codigo_minsa='{$this->codigo_minsa}', ano_estudio='{$this->ano_estudio}' 
               , estado='{$this->estado}', id_congreso='{$this->id_congreso}', id_medico='{$this->id_medico}' where id_persona='{$this->id_persona}'";
        $this->conexion->QuerySimple($sql);
    }
}