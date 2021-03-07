<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pulseras extends CI_Controller {

	public function index()
	{
		$this->load->view('menus/cabeza');
        $this->load->view('servicios/pulseras');
        $this->load->view('menus/pie');
	}
}