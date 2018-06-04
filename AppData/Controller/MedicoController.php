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

}