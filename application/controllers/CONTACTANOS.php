<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactanos extends CI_Controller {

	public function index()
	{
		$this->load->view('menus/cabeza');
        $this->load->view('menus/Contactos');
        $this->load->view('menus/pie');
	}
}
