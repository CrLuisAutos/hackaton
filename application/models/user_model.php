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

<<<<<<< HEAD
    return $query;
=======
    function authenticate($x) {
    $query = $this->db->select('musico');


  $query = $this->db->like('nombre', $x);

    return $query->result_array();
>>>>>>> 90018a42612b6b58d3b9077289948eec5ce8da1a
  }


   function autenticarse($user, $pass) {
    $query = $this->db->get_where('musico', array('nombre' => $user, 'contrasena' => $pass));

	  return $query->result_object();
  }



 
 




}