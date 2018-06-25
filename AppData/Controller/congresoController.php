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
            header("Location:".URL."Congreso?msg=ok");
        }
    }
    public function modificar ($id)
    {
        $datos=$this->congresos->edit($id[0]);
        return $datos;
    }
    public function update ()
    {
        $this->congresos->set("id_congreso",$_POST['id_congreso']);
        $this->congresos->set("descripcion_congreso",$_POST['descripcion_congreso']);
        $this->congresos->update();
        header("Location:".URL."Congreso");
    }

    public function eliminar ($id)
    {
        $this->congresos->delete($id{0});
        header("Location:".URL."Congreso");
    }

}