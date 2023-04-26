<?php 
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{
    protected $table      = 'usuario';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_usuario';
    protected $allowedFields=['id_usuario','matricula','nombre','apellidos','correo','telefono','password','id_carrera','nss','rol'];
    
}
?>