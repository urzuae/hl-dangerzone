<?php
class CompanionsModel extends HL_Model
{
  function __construct()
  {
    parent::__construct();
    $this->table = 'Companions';
  }
  
  public function getByOrder($user_id, $orden)
  {
    $query = $this->db->get_where($this->table, array('user_id' => $user_id, 'no_companion' => $orden));
    $result = $query->result_array();
    if(!$result) return false;
    return $result[0];
  }

}
