<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina1 extends CI_Controller {

  function __construct(){
    parent::__construct();

    $this->load->model("pagina1_model");
  }



	public function index()
	{
		$this->load->view('pagina1');

	}
public function validate (){

 $usuario=$_POST["usuario"];
$pass=$this->input->post("contrasena");
//$perfil=$this->input->post("perfil");
$respuesta=$this->pagina1_model->logear($usuario,$pass);
if($respuesta){
$this->load->view('admin');
//  print "bien";

}else{

print "Usuario no inscrito";
}


}
}
