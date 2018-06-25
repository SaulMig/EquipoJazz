<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 10:52 PM
 */

namespace AppData\Controller;


class MedicoController
{
    private $Medico;

    public function __construct()
    {
        $this->Medico= new \AppData\Model\Medico();
    }

    public function index()
    {
        $datos=$this->Medico->getAll();
        return $datos;
    }
    public  function  crear(){
        if($_POST)
        {
            $this->Medico->set('id_medico',$_POST["id_medico"]);
            $this->Medico->set('descripcion_medico',$_POST["descripcion_medico"]);

            $this->Medico->add();
            $datos=$this->Medico->getAll();
            return $datos;
        }
    }
    public function eliminar($id){
        $this->Medico->delete($id[0]);
        $datos=$this->Medico->getAll();
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->Medico->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->Medico->set("id_medico",$id[0]);
            $this->Medico->set('descripcion_medico',$_POST["descripcion_medico"]);
            $this->Medico->update();
            $datos=$this->Medico->getAll();
            return $datos;
        }
    }

}