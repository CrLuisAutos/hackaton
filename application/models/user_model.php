<?php
class User_model extends CI_Model {

  

  function save($user)
  {
    $r = $this->db->insert('musico', $user);
    return $r;
  }

 

}