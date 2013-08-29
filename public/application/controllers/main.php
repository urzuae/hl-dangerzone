<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends HL_Controller
{
  public function index()
  {
    $this->check_login();
    $user = $this->view_data['user'] = $this['users']->select($this->session->userdata('id'));
    if(2 == $user['status'])
      redirect(base_url('main/confirmacion'));
    $this->view_data['countries'] = $this['countries']->getAll();
    $this->view = 'main/index';
  }
  
  public function formulario()
  {
    $this->check_login();
    $this->view_data['user'] = $this['users']->select($this->session->userdata('id')); 
    $this->view = 'main/formulario';
  }
  
  public function save()
  {
    $this->check_login();
    $id = $this->input->post('id');
    $user = $this['users']->select($id);
    $name = $this->input->post('name');
    $appa = $this->input->post('paternal_last_name');
    $apma = $this->input->post('maternal_last_name');
    $gender = $this->input->post('gender');
    $nationality = $this->input->post('nationality');
    $other_nat = $this->input->post('other_nationality');
    $birthday = $this->input->post('birthday');
    $team = $this->input->post('team_level');
    $country = $this->input->post('country');
    $passport = $this->input->post('passport');
    $passport_date = $this->input->post('passport_date');
    $pass_due_date = $this->input->post('passport_due_date');
    $visa = $this->input->post('visa');
    $visa_date = $this->input->post('visa_date');
    $visa_due_date = $this->input->post('visa_due_date');
    $telephone = $this->input->post('telephone');
    $mobile = $this->input->post('mobile');
    $email = $this->input->post('email');
    
    $params = array('name' => $name, 'paternal_last_name' => $appa, 'maternal_last_name' => $apma, 'gender' => $gender,
      'nationality' => $nationality, 'other_nationality' => $other_nat, 'birthday' => $birthday, 'team_level' => $team, 'country' => $country,
      'passport' => $passport, 'passport_date' => $passport_date, 'passport_due_date' => $pass_due_date, 'visa' => $visa, 
      'visa_date' => $visa_date, 'visa_due_date' => $visa_due_date,
      'telephone' => $telephone, 'mobile' => $mobile, 'email' => $email, 'status' => 0);
    $this['users']->update($user['id'], $params);
    redirect(base_url('main/companion/1'));
  }
  
  public function companion($order)
  {
    $this->check_login();
    $user = $this->view_data['user'] = $this['users']->select($this->session->userdata('id'));
    $this->view_data['countries'] = $this['countries']->getAll();
    $companion = $this['companions']->getByOrder($user['id'], $order);
    $this->view_data['no_companion'] = $order;
    $this->template_file = 'template/general';
    if($companion)
    {
      $this->view_data['companion'] = $companion;
      $this->view = 'main/companion';
    }
    else 
    {
      $this->view = 'main/companion_new';
    }
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
    $passport_date = $this->input->post('passport_date');
    $pass_due_date = $this->input->post('passport_due_date');
    $visa = $this->input->post('visa');
    $visa_date = $this->input->post('visa_date');
    $visa_due_date = $this->input->post('visa_due_date');
    $no_companion = $this->input->post('no_companion');

    $params = array('user_id' => $user_id, 'name' => $name, 'paternal_last_name' => $appa, 'maternal_last_name' => $apma, 
      'nationality' => $nationality, 'relative' => $relative, 'passport' => $passport, 'passport_date' => $passport_date,
      'passport_due_date' => $pass_due_date, 'visa' => $visa, 'visa_date' => $visa_date,
      'visa_due_date' => $visa_due_date, 'no_companion' => $no_companion );
    if($this->input->post('companion_id'))
    {
      $companion_id = $this->input->post('companion_id');
      $this['companions']->update($companion_id, $params);
    }
    else 
      $this['companions']->insert($params);
    
    if($no_companion == 3 || $this->input->post('finish'))
    {
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
    $id = $this->input->post('id');
    $user = $this['users']->select($id);
    if($user)
    {
      $userdata = array('id' => $id, 'current_session' => md5(time()));
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
    $user_data = array('id' => '', 'current_session' => '', 'password' => '');
    $this->session->unset_userdata($user_data);
    redirect(base_url('main/login'));
  }
}
