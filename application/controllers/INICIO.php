<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('menus/cabeza');
        $this->load->view('menus/principal');
        $this->load->view('menus/pie');
	}
}
