<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends HL_Controller
{
  public function index()
  {
    $this->view = 'main/index';
  }
  
  public function formulario()
  {
    $this->view = 'main/formulario';
  }
}
