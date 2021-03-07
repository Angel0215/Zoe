<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aretes extends CI_Controller {

	public function index()
	{
		$this->load->view('menus/cabeza');
        $this->load->view('servicios/aretes');
        $this->load->view('menus/pie');
	}
}
