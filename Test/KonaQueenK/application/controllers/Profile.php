<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function index()
	{
		$this->load->library('session');
		if(!isset($_SESSION['email'])){
			redirect('login');
		}
		/* Obtenemos el modelo */
		$this->load->model('UserModel');
		$data=$this->UserModel->getData($_SESSION['email']);
		$this->load->view('/profile',$data);
	}
}
