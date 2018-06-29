<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function editarData(){
		$this->load->library('session');
		$Usuario = $_SESSION['email'];
		/* subir foto a uploads */
		$mi_archivo = 'foto';
		$config['upload_path'] = "././assets/uploads/";
		$config['file_name'] = "nombre_archivo";
		$config['allowed_types'] = "*";
		$config['max_size'] = "50000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($mi_archivo)) {
			/*$this->session->set_flashdata('message_foto', $this->upload->display_errors());
			redirect('/profile');*/
		}
		else{
			$data =  $this->upload->data();
		}
		if(isset($data)){
			$foto =  $data['raw_name'].$data['file_ext'];
		}
		/* Cambiar los del usuario en base de datos ( url de la foto incluida) */
		$Nombre = $_POST['nombre'];
		$Apellidos = $_POST['apellidos'];
		$Calle = $_POST['calle'];
		$Portal = $_POST['portal'];
		$Piso = $_POST['piso'];
		$Letra = $_POST['letra'];
		$Ciudad = $_POST['ciudad'];
		$Provincia = $_POST['provincia'];
		$Url = "assets/uploads/".$foto;
		$this->load->model('UserModel');
		$this->UserModel->editarData($Nombre,$Apellidos,$Calle,$Portal,$Piso,$Letra,$Ciudad,$Provincia,$Url,$Usuario);
		$this->session->set_flashdata('correcto', 'Editado con éxito');
		redirect('/profile');

	}
	public function registrarUsuario(){
		/* Obtenemos el modelo */
		$this->load->model('UserModel');
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordRepeat= $_POST['passwordRepeat'];
		/*Si las contraseñas no coinciden volvemos a la misma pantalla con un mensaje que se lo indique al usuario,si son iguales procedemos a meterlo en base de datos*/
		if($passwordRepeat!=$password){
			$this->session->set_flashdata('message', 'Las contraseñas no coinciden.');
			redirect('/login');
		}else{
			$registrado=$this->UserModel->registrarDataUsuario($email,$password);
			if($registrado=='registrado'){
				$data=$this->UserModel->getData($email);
				$this->session->set_userdata(array('email'=>$email));
				redirect('/profile');
			}
			else{
				$this->session->set_flashdata('message', $registrado);
				redirect('/login');
			}

		}
	}
}
