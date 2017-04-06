<?php
class User_model extends CI_Model {

  
  function save($user)
  {
    $r = $this->db->insert('musico', $user);
    return $r;
  }

/*
	FUNCION PARA EL LOGIN
   function autenticarse($user, $pass) {
    $query = $this->db->get_where('musico', array('nombre' => $user, 'contrasena' => $pass));

	  return $query->result_object();
  }
*/


 
  function instrumentos() {
    $query = $this->db->get('instrumentos');
    return $query->result_array();
  }




}