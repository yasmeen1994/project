<?php
class update_ctrl extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('update_model');
}
function show_student_id() {
$id = $this->uri->segment(3);
$data['users'] = $this->update_model->show_students();
$data['single_student'] = $this->update_model->show_student_id($id);
$this->load->view('update_view', $data);
}
function update_student_id1() {
$id= $this->input->post('did');
$data = array(
'Student_Name' => $this->input->post('username'),
'Student_Email' => $this->input->post('email'),
'Student_Mobile' => $this->input->post('password'),
'Student_Address' => $this->input->post('phone')
);
$this->update_model->update_student_id1($id,$data);
$this->show_student_id();
}
}
?>