<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class servicios extends CI_Controller {

	public function index()
	{
		$this->load->view('menus/cabeza');
        $this->load->view('servicios/aretes');
		$this->load->view('servicios/cadenas');
		$this->load->view('servicios/manillas');
		$this->load->view('servicios/pulseras');
        $this->load->view('menus/pie');
	}
}
