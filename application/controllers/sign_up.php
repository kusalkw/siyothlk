<?php


class Sign_up extends CI_Controller {

    function user_sign_up() {

        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]', array('is_unique' => 'Username is already taken'));
        $this->form_validation->set_rules('email', 'E-Mail', 'trim|required|valid_email|is_unique[user.email]', array('is_unique' => 'E-Mail is already taken'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('password_again', 'Re-enter Password', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('sign_up');
        }
        else {

            $this->load->model('model_user');
            $result = $this->model_user->insert_user_data();

            if($result) {

                $this->session->set_flashdata('msg', '<div class="alert alert-primary text-center" role="alert"> Signed Up Successfully! </div>');
                redirect('home/login');
            }
            else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center" role="alert"> Oops! Something went wrong </div>');
                redirect('home/login');
            }
        }

    }


}