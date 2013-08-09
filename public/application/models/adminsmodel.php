<?php
class AdminsModel extends HL_Model
{
  function __construct()
  {
    parent::__construct();
    $this->table = 'Admins';
  }
  
  public function search($username, $password)
  {
    $query = $this->db->get_where($this->table, array('username' => $username, 'password' => $password));
    $result = $query->result_array();
    if(!$result) return false;
    return $result[0];
  }
  
  public function select_by_id($id)
  {
    $query = $this->db->get_where($this->table, array('id_herbalife' => $id));
    $row = $query->result_array();
    if(!$row) return false;
    return $row[0];
  }
}
