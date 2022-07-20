<?php
class User extends CI_Controller
{

    function index()
    {
        $this->load->model('User_model');
        $users = $this->User_model->all();
        $data = array();
        $data['users'] = $users;
        $this->load->view('list', $data);
    }

    function create()
    {
        $this->load->model('User_model');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('create');
        } else {
            /* Save record to database */
            $formArray =  array();
            $formArray['use_name'] = $this->input->post('name');
            $formArray['use_email'] = $this->input->post('email');
            $formArray['use_createAt'] = date('T-m-d');

            $this->User_model->create($formArray);
            $this->session->set_flashdata('success', 'Record added successfully!');
            redirect(base_url() . 'index.php/user/index');
        }
    }
    function edit($user_id)
    {
        $this->load->model('User_model');
        $user = $this->User_model->getUser($user_id);
        $data = array();
        $data['user'] =  $user;
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if($this->form_validation->run() == false){
            $this->load->view('edit',$data);
        } else{
            /* Update user record */
            $formArray = array();
            $formArray['use_name'] = $this->input->post('name');
            $formArray['use_email'] = $this->input->post('email');
            
            $this->User_model->updateUser($user_id, $formArray);
            $this->session->set_flashdata('success', 'Record update successfully');
            redirect(base_url() . 'index.php/user/index');
        }
    }
    function delete($user_id){
        $this->load->model('User_model');
        $user = $this->User_model->getUser($user_id);
        if(empty($user)){
            $this->session->set_flashdata('failure', 'Record not found database');
            redirect(base_url() . 'index.php/user/index');
        }
        $this->User_model->deleteUser($user_id);
        $this->session->set_flashdata('success', 'Record deleted successfully');
        redirect(base_url() . 'index.php/user/index');
        
    }
}
