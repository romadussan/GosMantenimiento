<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina1_model extends CI_Model {

  function __construct(){


    parent::__construct();

}

function logear($usuario,$pass){

$this->db->where("user",$usuario);
$this->db->where("pass",$pass);
//$this->db->where("rol",$perfil);
$respuesta=$this->db->get("usuario");
if($respuesta->num_rows()>0){
return $respuesta->row();


}else {return FALSE;}

}

}




?>
