<?php

class Wiki extends CI_Controller{

    public function bird_details() {

        $this->load->model('Model_Wiki');
        $result = $this->Model_Wiki->get_bird_details();

        if($result!=false) {

            $data['bird_details'] = array(

                'birdId' => $result->birdId,
                'sciName' => $result->sciName,
                'comName' => $result->comName,
                'details' => $result->details

            );

            $this->load->view('wiki_home', $data);

        }
        else {
            echo "Something went wrong !";
        }
    }

    public function bird_details_edit() {

        $this->load->view('bird_edit');

    }



}