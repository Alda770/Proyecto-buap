<?php

namespace App\Controllers;
use CodeIgniter\Controller;
//use App\Models\GestorModel;


class Home extends BaseController
{
    //public function __construct()
    //{
        //$db = \Config\Database::connect();
        //$this->gm=new GestorModel();
    //}
    public function index()
    {
      //  $modelo=$this->gm;
      // $query1 = $modelo->conscarr;
       //$datos['result'] = $query1->getResultArray();
       return view('registro');
    }
    public function login()
    {
        return view('login');
    }
    public function alta_capacitacion()
    {
        return view('alta_capacitacion');
    }
    public function alta_equipos()
    {
        return view('alta_equipos');
    }
    public function prestamo()
    {
        return view('prestamo');
    }
    public function capacitacion()
    {
        return view('capacitacion');
    }
    public function laboratorios()
    {
        return view('laboratorios');
    }
}
