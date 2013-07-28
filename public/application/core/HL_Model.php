<?php
class HL_Model extends CI_Model
{
  protected $table = null;

  function __construct()
  {
    parent::__construct();
  }

  public function select($id)
  {
    $query = $this->db->get_where($this->table, array('id' => $id));
    $row = $query->result_array();
    return $row[0];
  }

  public function insert($params)
  {
    $this->db->insert($this->table, $params);
    return $this->db->insert_id();
  }

  public function update($id, $params)
  {
    $this->db->update($this->table, $params, array('id' => $id));
  }

  public function delete($id)
  {
    return $this->db->delete($this->table, array('id' => $id));
  }

  public function getAll()
  {
    $query = $this->db->get($this->table);
    return $query->result_array();
  }
}
