<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos extends CI_Controller {

	public function index()
	{
		$this->load->view('menus/cabeza');
        $this->load->view('menus/productos');
        $this->load->view('menus/pie');
	}
}
