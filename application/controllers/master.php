<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function mostrarmaster()
	{
		$this->load->view('mastermantenimiento');
	}

  public function ingresaequipos()
	{
		$this->load->view('mastermantenimiento');
	}
  public function ingresapersonal()
  {
    $this->load->view('mastermantenimiento');
  }

  public function ingresasistemas()
  {
    $this->load->view('mastermantenimiento');
  }
  public function ingresafallas()
  {
    $this->load->view('mastermantenimiento');
  }

}
