<?php 
class User extends CI_Controller{
    function create(){
        $this->load->model('User_model');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
       
        if($this->form_validation->run()== false){
            $this->load->view('create');
        }else{
            /* Save record to database */
            $formArray =  array();
            $formArray['use_name'] = $this->input->post('name');
            $formArray['use_email'] = $this->input->post('email');
            $formArray['use_createAt'] = date('T-m-d');

            $this->User_model->create($formArray);
            $this->session->set_flashdata('sucess','Record added successfully!');
            redirect(base_url().'index.php/user/index');
        }
    }
}

?>