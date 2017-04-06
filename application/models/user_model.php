<?php
class User_model extends CI_Model {

  
  function save($user)
  {
    $r = $this->db->insert('musico', $user);
    return $r;
  }


   function instrumentos() {
    $query = $this->db->select('nombre');
    $query = $this->db->from('instrumento');
    $query = $this->db->get();
    return $query->result_array();
  }


    function authenticate($x) {
    $query = $this->db->select('musico');


  $query = $this->db->like('nombre', $x);

    return $query->result_array();
  }


/*
	FUNCION PARA EL LOGIN
   function autenticarse($user, $pass) {
    $query = $this->db->get_where('musico', array('nombre' => $user, 'contrasena' => $pass));

	  return $query->result_object();
  }
*/


 
 




}