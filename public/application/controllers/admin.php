<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends HL_Controller
{
  
  public function index()
  {
    $this->check_authorization();
    $this->template_file = 'template/general';
    $this->view = 'admin/index'; 
  }

  public function login()
  {
    $this->template_file = 'template/general';
    $this->view = 'admin/login';
  }
  
  public function user()
  {
    $id_hl = $this->input->get('id_herbalife');
    $user = $this['beneficiarios']->select_by_id($id_hl);
    $this->view_data['user'] = $user;
    $this->view = 'admin/user';
  }

  public function sign_in()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $admin = $this['admins']->search($username, md5($password));
    if($admin)
    {
      $userdata = array('admin' => $username, 'current_session' => md5(time()));
      $this->session->set_userdata($userdata);
      redirect(base_url('admin'));
    }
    else
    {
      $this->template_file = 'template/general';
      $this->view = 'admin/sign_in';
    }
  }

  function check_authorization()
  {
    if(!($this->admin_loged_in())
      redirect(base_url('admin/login'));
  }
  
  function admin_loged_in()
  {
    if(!($this->session->userdata('admin') && $this->session->userdata('current_session')))
      return false;
    else
      return true;
  }
}
