<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 04/06/2018
 * Time: 02:53 PM
 */

namespace AppData\Controller;


class congresoController
{
    private $congresos;
    public function __construct()
    {
        $this->congresos=new \AppData\Model\Congreso();
    }

    public function index()
    {
        $datos= $this->congresos->getAll();
        return $datos;
    }
    public function crear()
    {
        if($_POST)
        {
            $this->congresos->set("descripcion_congreso",$_POST['descripcion_congreso']);
            $this->congresos->add();
            $datos= $this->congresos->getAll();
            return $datos;
            //header("Location:".URL."congreso?msg=ok");
        }
    }
    public function modificar ($id)
    {
        $datos=$this->congresos->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {


        if($_POST)
        {
            $this->congresos->set("id_congreso",$id[0]);
            $this->congresos->set("descripcion_congreso",$_POST['descripcion_congreso']);
            $this->congresos->update();
            $datos=$this->congresos->getAll();
            return $datos;
        }
    }

    public function eliminar ($id)
    {
        $this->congresos->delete($id{0});
        $datos=$this->congresos->getAll();
        return $datos;
    }

}