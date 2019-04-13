<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function mostrarmaster()
	{
		$this->load->view('mastermantenimiento');
	}
}
