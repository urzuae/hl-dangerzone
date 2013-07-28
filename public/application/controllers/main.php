<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends HL_Controller
{
  public function index()
  {
    $this->template_file = 'template/general';
    $this->view = 'main/index';
  }
  
  public function formulario()
  {
    $this->view = 'main/formulario';
  }
  
  public function sign_in()
  {
    $id = $this->input->post('id_herbalife');
    $password = $this->input->post('password');
    $user = $this['users']->search($id, md5($password));
    if($user)
    {
      $userdata = array('herbalife' => $id, 'password' => md5($password.$time()));
      $this->session->set_userdata($userdata);
      $redirect(base_url('formulario'));
    }
    else
    {
      $this->template_file = 'template/general';
      $this->view = 'main/sign_in';
    }
  }
}
