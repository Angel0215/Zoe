<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mujer extends CI_Controller {

	public function index()
	{
		$this->load->view('menus/cabeza');
        $this->load->view('genero/mujeres');
        $this->load->view('menus/pie');
	}
}
