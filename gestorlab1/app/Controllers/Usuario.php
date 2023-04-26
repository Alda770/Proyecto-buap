<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Usuario extends Controller{

    public function index(){
        $user = new UsuarioModel();
        $datos['datitos'] = $user->orderBy('matricula', 'ASC')->findAll();
        return view('usuarios', $datos);
    }

    public function alta_usuarios(){
        return view('alta_usuarios');
    }
    
    public function guardarUsuario(){
        $request = \Config\Services::request();
        $matricula = $request->getVar('mat');
        print_r($matricula);
        $user = new UsuarioModel();
        $datos = [
            'matricula' => $request->getVar('mat'),
            'nombre' => $request->getVar('nom'),
            'apellido_pa' => $request->getVar('ape_pa'),
            'apellido_ma' => $request->getVar('ape_ma'),
            'correo' => $request->getVar('corr'),
            'telefono' => $request->getVar('tel'),
            'password' => $request->getVar('pass'),
            'Id_carrera' => $request->getVar('carrera'),
            'nss' => $request->getVar('nss'),
            'rol' => $request->getVar('rol'),
        ];
        $user->insert($datos);
        $datos['datitos'] = $user->orderBy('matricula', 'ASC')->findAll();
        return view('usuarios', $datos);
    }

    public function borrar($id = null){
        $user = new UsuarioModel();
        $user->where('idusuario', $id)->delete();
        return redirect()->to(site_url('/usuarios')); // Se cambia $this->response->redirect por redirect()->to
    }
}
?>
