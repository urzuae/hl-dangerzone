<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends HL_Controller
{
  public function index()
  {
    $this->check_login();
    $this->view_data['user'] = $this['users']->select_by_id($this->session->userdata('id_herbalife'));
    $this->view = 'main/index';
  }
  
  public function formulario()
  {
    $this->check_login();
    $this->view_data['user'] = $this['users']->select_by_id($this->session->userdata('id_herbalife')); 
    $this->view = 'main/formulario';
  }
  
  public function save()
  {
    $this->check_login();
    $id = $this->input->post('id_herbalife');
    $user = $this['users']->select_by_id($id);
    $name = $this->input->post('name');
    $appa = $this->input->post('paternal_last_name');
    $apma = $this->input->post('maternal_last_name');
    $gender = $this->input->post('gender');
    $nationality = $this->input->post('nationality');
    $birthday = $this->input->post('birthday');
    $team = $this->input->post('team_level');
    $country = $this->input->post('country');
    $passport = $this->input->post('passport');
    $pass_due_date = $this->input->post('passport_due_date');
    $visa = $this->input->post('visa');
    $visa_due_date = $this->input->post('visa_due_date');
    $telephone = $this->input->post('telephone');
    $mobile = $this->input->post('mobile');
    $email = $this->input->post('email');
    
    $params = array('name' => $name, 'paternal_last_name' => $appa, 'maternal_last_name' => $apma, 'gender' => $gender,
      'nationality' => $nationality, 'birthday' => $birthday, 'team_level' => $team, 'country' => $country,
      'passport' => $passport, 'passport_due_date' => $pass_due_date, 'visa' => $visa, 'visa_due_date' => $visa_due_date,
      'telephone' => $telephone, 'mobile' => $mobile, 'email' => $email, 'status' => 2);
    
    $this['users']->update($user['id'], $params);
    redirect(base_url('main/companion/1'));
  }
  
  public function companion($order)
  {
    $this->check_login();
    $this->view_data['user'] = $this['users']->select_by_id($this->session->userdata('id_herbalife'));
    $this->view_data['no_companion'] = $order;
    $this->template_file = 'template/general';
    $this->view = 'main/companion';
  }
  
  public function save_companion()
  {
    $this->check_login();
    $user_id = $this->input->post('user_id');
    $name = $this->input->post('name');
    $appa = $this->input->post('paternal_last_name');
    $apma = $this->input->post('maternal_last_name');
    $nationality = $this->input->post('nationality');
    $relative = $this->input->post('relative');
    $passport = $this->input->post('passport');
    $pass_due_date = $this->input->post('pass_due_date');
    $visa = $this->input->post('visa');
    $visa_due_date = $this->input->post('visa_due_date');
    $no_companion = $this->input->post('no_companion');

    $params = array('user_id' => $user_id, 'name' => $name, 'paternal_last_name' => $appa, 'maternal_last_name' => $apma, 
      'nationality' => $nationality, 'relative' => $relative, 'passport' => $passport, 'passport_due_date' => $pass_due_date,
      'visa' => $visa, 'visa_due_date' => $visa_due_date, 'no_companion' => $no_companion );
    $this['companions']->insert($params);
    
    if($no_companion == 3)
    {
      $this['users']->update($user_id, array('status' => 3) );
      redirect(base_url('main/confirmacion'));
    }
    else
      redirect(base_url('main/companion/'.(++$no_companion)));
  }

  public function confirmacion()
  {
    $this->check_login();
    $this->template_file = 'template/general';
    $this->view = 'main/confirmacion';
  }
  
  public function terminos()
  {
    $this->template_file = 'template/general';
    $this->view = 'main/terminos';
  }

  public function login()
  {
    $this->user_loged_in() ? redirect(base_url()) : false;
    $this->template_file = 'template/general';
    $this->view = 'main/login';
  }
  
  public function sign_in()
  {
    $id = $this->input->post('id_herbalife');
    $user = $this['users']->select_by_id($id);
    if($user)
    {
      $userdata = array('id_herbalife' => $id, 'current_session' => md5(time()));
      $this->session->set_userdata($userdata);
      redirect(base_url());
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
    redirect(base_url('main/login'));
  }
}
