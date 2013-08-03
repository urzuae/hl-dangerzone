<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends HL_Controller
{
  
  public function index()
  {
    $this->check_authorization();
    $this->template_file = 'template/general';
    $this->view = 'admin/index'; 
  }

  public function search()
  {
    $this->check_authorization();
    $this->template_file = 'template/general';
    $this->view = 'admin/search';
  }
  
  public function user()
  {
    $id_hl = $this->input->get('id_herbalife');
    $user = $this['users']->select_by_id($id_hl);
    print_r(json_encode($user));
    die();
  }

  public function sign_in()
  {
    $id = $this->input->post('id_herbalife');
    $pass = $this->input->post('password');
    $user = $this['users']->search($id, md5($pass));
    if($user)
    {
      $userdata = array('id_herbalife' => $id, 'current_session' => md5(time()), 'is_admin' => 1);
      $this->session->set_userdata($userdata);
      redirect(base_url('admin/search'));
    }
    else
    {
      $this->template_file = 'template/general';
      $this->view = 'main/index';
    }
  }

  function check_authorization()
  {
    if(!($this->user_loged_in() && $this->session->userdata('is_admin') == 1)) 
      redirect(base_url());
  }
}
