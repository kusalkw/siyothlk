<?php

class Model_user extends CI_Model {

    function insert_user_data () {

        $data = array(

            'username' => $this->input->post('username', TRUE),
            'password' => sha1($this->input->post('password', TRUE)),
            'email' => $this->input->post('email', TRUE),
            'memberFlag' => 1
        );

        return $this->db->insert('user', $data);

    }

    function login_user() {

        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('user');

        if($result->num_rows()==1) {
            return $result->row(0);
        }
        else {
            return false;
        }

    }


}