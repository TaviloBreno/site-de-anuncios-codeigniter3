<?php
defined('BASEPATH') or exit('Ação não permitida');

class Usuarios extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'titulo' => 'Usuários cadastrados',
			'styles' => array(
				'assets/bundles/datatables/datatables.min.css',
				'assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css',
			),
			'scripts' => array(
				'assets/bundles/datatables/datatables.min.js',
				'assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js',
				'assets/bundles/jquery-ui/jquery-ui.min.js',
				'assets/js/page/datatables.js',
			),
			'usuarios' => $this->ion_auth->users()->result(),
		);

		$this->load->view('restrita/layout/header', $data);
		$this->load->view('restrita/usuarios/index');
		$this->load->view('restrita/layout/footer');
	}

}
