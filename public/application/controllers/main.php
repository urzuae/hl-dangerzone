<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends HL_Controller
{
  public function index()
  {
    $this->user_loged_in() ? redirect(base_url('main/formulario')): false;
    $this->template_file = 'template/general';
    $this->view = 'main/index';
  }
  
  public function formulario()
  {
    $this->check_login();
    $this->view_data['user'] = $this['users']->select_by_id($this->session->userdata('id_herbalife')); 
    $this->view = 'main/formulario';
  }
  
  public function sign_in()
  {
    $id = $this->input->post('id_herbalife');
    $user = $this['users']->select_by_id($id);
    if($user)
    {
      $userdata = array('id_herbalife' => $id, 'current_session' => md5(time()));
      $this->session->set_userdata($userdata);
      redirect(base_url('main/formulario'));
    }
    else
    {
      $this->template_file = 'template/general';
      $this->view = 'main/sign_in';
    }
  }
  
  public function sign_out()
  {
    $user_data = array('id_herbalife' => '', 'current_session' => '', 'password' => '');
    $this->session->unset_userdata($user_data);
    redirect(base_url());
  }
}
