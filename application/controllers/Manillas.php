<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manillas extends CI_Controller {

	public function index()
	{
		$this->load->view('menus/cabeza');
        $this->load->view('servicios/manillas');
        $this->load->view('menus/pie');
	}
}