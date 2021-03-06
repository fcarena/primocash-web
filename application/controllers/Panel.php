<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logueado')){			
			redirect('login');
		}else{
			$this->load->model('Usuarios_model');
			$this->load->model('M_Cliente');
		}
	}
	public function index()
	{
		$data = array();
		$data['username'] = $this->session->userdata('username');
		$user_id = $this->session->userdata('id');
		$data['menus_permitidos'] = $this->Usuarios_model->listar_menu_permitidos($user_id);
		$user = $this->Usuarios_model->read($user_id);
 		$this->load->view('template/inicio_panel', $data);
		$this->load->view('panel');
		$this->load->view('template/fin_panel');
	}
	public function cerrar_sesion()
	{
		$usuario_data = array(
         'logueado' => FALSE
		);
		$this->session->set_userdata($usuario_data);
		redirect(base_url());
	}
}