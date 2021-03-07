<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hombre extends CI_Controller {

	public function index()
	{
		$this->load->view('menus/cabeza');
        $this->load->view('genero/Hombres');
        $this->load->view('menus/pie');
	}
}
