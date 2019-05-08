<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Private_area extends CI_Controller {
 public function __construct()
 {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('private_area_model');

  if(!$this->session->userdata('id'))
  {
   redirect('login');
  }
 }

 function index()
 {

  $result = $this->private_area_model->get_data($this->session->userdata('id'));
  echo '<br /><br /><br /><h1 align="center">Welcome User</h1>';
  echo   '<br /><p align="center">Name : '.$result['name'].'<br/>';
  echo '<br />Email : '.$result['email'].'</p><br/>';
  echo '<p align="center"><a href="'.base_url().'private_area/edit">EDIT</a></p>';
  echo '<p align="center"><a href="'.base_url().'private_area/logout">Logout</a></p>';
 }

  function edit()
  {
   
   $this->load->helper('url');
   $result['data'] = $this->private_area_model->get_data($this->session->userdata('id'));

  $this->load->view('edit_user',$result);

  }

  function update()
  {
   $this->load->helper('url');
  $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[codeigniter_register.email]');
  if($this->form_validation->run())
  { 
   $data = array(
    'name'  => $this->input->post('user_name'),
    'email'  => $this->input->post('user_email')
   );


   $val = $this->private_area_model->update_data($this->session->userdata('id'),$data);
   if($val){
    $this->index();
   }
 }
 else
 {
  $this->edit();
 }
  //$this->load->view('edit_user',$result);
  }


 function logout()
 {
  $data = $this->session->all_userdata();
  foreach($data as $row => $rows_value)
  {
   $this->session->unset_userdata($row);
  }
  redirect('login');
 }
}

?>