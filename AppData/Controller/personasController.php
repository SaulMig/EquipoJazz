<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 31/05/2018
 * Time: 09:49 AM
 */

namespace AppData\Controller;


class personasController
{
    private $personas;
    private $congresos;
    private $medicos;

    public function __construct()
    {
        $this->personas= new \AppData\Model\Personas();
        $this->congresos= new \AppData\Model\Congreso();
        $this->medicos= new \AppData\Model\Medico();
    }

    public function index()
    {
        $datos1=$this->personas->getAll();
        $datos2=$this->congresos->getAll();
        $datos3=$this->medicos->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[3]=$datos3;
        return $datos;
    }

    public function crear(){
        if($_POST)
        {
            $this->personas->set('ap_persona',$_POST["ap_persona"]);
            $this->personas->set('am_persona',$_POST["am_persona"]);
            $this->personas->set('nombre_per',$_POST["nombre_per"]);
            $this->personas->set('no_cedula',$_POST["no_cedula"]);
            $this->personas->set('direccion',$_POST["direccion"]);
            $this->personas->set('ciudad',$_POST["ciudad"]);
            $this->personas->set('telefono',$_POST["telefono"]);
            $this->personas->set('email',$_POST["email"]);
            $this->personas->set('especialidad',$_POST["especialidad"]);
            $this->personas->set('ano_titulacion',$_POST["ano_titulacion"]);
            $this->personas->set('codigo_minsa',$_POST["codigo_minsa"]);
            $this->personas->set('ano_estudio',$_POST["ano_estudio"]);
            $this->personas->set('estado',$_POST["estado"]);
            $this->personas->set('id_congreso',$_POST["id_congreso"]);
            $this->personas->set('id_medico',$_POST["id_medico"]);
            
            $this->personas->add();
            $datos=$this->personas->getAll();
            return $datos;
        }

    }
    public function eliminar($id)
    {
        $this->personas->delete($id[0]);
        $datos=$this->personas->getAll();
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->personas->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->personas->set('ap_persona',$_POST["ap_persona"]);
            $this->personas->set('am_persona',$_POST["am_persona"]);
            $this->personas->set('nombre_per',$_POST["nombre_per"]);
            $this->personas->set('no_cedula',$_POST["no_cedula"]);
            $this->personas->set('direccion',$_POST["direccion"]);
            $this->personas->set('ciudad',$_POST["ciudad"]);
            $this->personas->set('telefono',$_POST["telefono"]);
            $this->personas->set('email',$_POST["email"]);
            $this->personas->set('especialidad',$_POST["especialidad"]);
            $this->personas->set('ano_titulacion',$_POST["ano_titulacion"]);
            $this->personas->set('codigo_minsa',$_POST["codigo_minsa"]);
            $this->personas->set('ano_estudio',$_POST["ano_estudio"]);
            $this->personas->set('estado',$_POST["estado"]);
            $this->personas->set('id_congreso',$_POST["id_congreso"]);
            $this->personas->set('id_medico',$_POST["id_medico"]);
            
            $this->personas->update();
            $datos=$this->personas->getAll();
            return $datos;
        }
    }
     public function print_pdf()
    {
        $datos=$this->personas->getAll();
        return $datos;
    }
}