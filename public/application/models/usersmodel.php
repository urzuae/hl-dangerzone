<?php
class UsersModel extends HL_Model
{
  function __construct()
  {
    parent::__construct();
    $this->table = 'Users';
  }
  
  public function search($id_herbalife, $password)
  {
    $query = $this->db->get_where($this->table, array('password' => $password, 'id_herbalife' => $id_herbalife));
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
