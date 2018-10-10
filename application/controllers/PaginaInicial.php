<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaginaInicial extends CI_Controller {

	public function index()
	{
		$this->load->library('parser');

		$data = array(
			'title'       => 'App Party',
			'author'      => 'Higor Sapo',
			'description' => 'Site para compra de ingressos e bebidas nas melhores baladas :-)',
			'copyright'   => 'Copyright &copy; App Party ' . date('Y')
		);

		$this->parser->parse('pagina_inicial', $data);
	}
}
