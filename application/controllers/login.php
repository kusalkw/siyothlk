<?php


class Login extends CI_Controller {

    function user_login() {

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        }
        else {

            $this->load->model('model_user');

            $result = $this->model_user->login_user();

            if($result!=false) {

                $user_details = array(

                    'id' => $result->userId,
                    'username' => $result->username,
                    'email' => $result->email,
                    'member_flag' => $result->memberFlag,
                    'admin_flag' => $result->adminFlag,
                    'loggedIn' => true

                );

                $this->session->set_userdata($user_details);
                redirect('home');

            }
            else {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center" role="alert"> Wrong Username or Password! Please try again </div>');
                redirect('home/login');

            }

        }

    }

    function user_logout() {

        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('member_flag');
        $this->session->unset_userdata('admin_flag');
        $this->session->unset_userdata('loggedIn');

        redirect('home/login');

    }

}