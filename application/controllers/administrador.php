<?php
class Administrador extends CI_Controller {

   function index(){
		$this->load->view('administrador/index');
   }
   function form_agregar_usuario(){
   	$this->load->view('administrador/form_agregar_usuario');
   }

   function insertar_usuario(){
       $this->load->model('administrador/administrador_model');
       $login=$this->administrador_model->agregar($_POST['correo'],$_POST['contra'],$_POST['usuario'],$_POST['rol']);

    }
   
}
// <!-- 
// function login_acceder(){
//         $this->load->model('smart/usuario_model');
//         if(isset($_POST['contra']))
//         {
//             $login=$this->usuario_model->login($_POST['correo'],$_POST['contra']);
// 						//echo $login;
// 					  if($login["Rol"] == 1)
//             {
//                 redirect('smart/principal1.1');
//             }
//             else if ($login["Rol"] == 2)
//             {
//                redirect('administrador/index');
//             }
// 			else{
// 				redirect('smart/login');
// 			}
//         }
//     } -->
?>

