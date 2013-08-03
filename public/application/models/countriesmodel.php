<?php
class CountriesModel extends HL_Model
{
  function __construct()
  {
    parent::__construct();
    $this->table = 'Countries';
  }
}
