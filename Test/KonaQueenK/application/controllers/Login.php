<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index($error = NULL)
	{
		if($error!=null){
			$data = array('error'=>$error);
			$this->load->view('login',$data);
		}else
		$this->load->view('login');
	}
	public function iniciarSesion(){
		$this->load->library('session');
		/* Obtenemos el modelo */
		$this->load->model('UserModel');
		/* Obtenemos los valores del formulario */
		$email = $_POST['email'];
		$password = $_POST['password'];
		/* Llamamos al la funcion del modelo correspondiente para saber si existe */
		$presente=$this->UserModel->getUser($email,$password);
		if($presente!=false){
			/* Obtenemos los datos del perfil del usuario */
			$data=$this->UserModel->getData($email);
			$this->session->set_userdata(array('email'=>$email));
			redirect('profile');
		}else{
			$data=array('error'=>"");
			$this->session->set_flashdata('message', 'La combinación del email y contraseña no corresponde con ningún usuario.');
			redirect('/login');
		}
	}
	
}
