<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('menus/cabeza');
        $this->load->view('menus/welcome');
        $this->load->view('menus/pie');
	}
}
