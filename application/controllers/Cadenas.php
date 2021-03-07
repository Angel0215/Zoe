<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadenas extends CI_Controller {

	public function index()
	{
		$this->load->view('menus/cabeza');
        $this->load->view('servicios/cadenas');
        $this->load->view('menus/pie');
	}
}