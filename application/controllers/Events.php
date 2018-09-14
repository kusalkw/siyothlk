<?php

class Events extends CI_Controller {

    public function add_event() {

        $this->load->view('add_event', array('error' => ' '));

    }

    public function add_new_event() {

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Event Content', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->add_event();
        }
        else
        {

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('add_event', $error);
            }
            else {

                $image_info = $this->upload->data();
                $image_path = base_url("uploads/" . $image_info['raw_name'] . $image_info['file_ext']);
                $data['image'] = $image_path;

                $this->load->model('Model_Events');

                $result = $this->Model_Events->add_new_event($data);
                echo $result;

                if ($result) {

                    $this->session->set_flashdata('msg', '<div class="alert alert-primary text-center" role="alert"> Event Added Successfully! </div>');
                    redirect('Home/events');
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center" role="alert"> Oops! Something went wrong </div>');
                    redirect('Events/add_event');
                }

            }

        }

    }

    public function view_full_event () {

        $id = $this->input->get('id');
        $this->load->model('Model_Events');

        $result = $this->Model_Events->get_full_event($id);

        if($result!=false) {

            $data['event'] = array(

                'id' => $result->id,
                'title' => $result->title,
                'details' => $result->details,
                'timeStamp' => $result->timeStamp,
                'image' => $result->image,
                'userId' => $result->userId,
                'username' => $result->username

            );

            $this->load->view('full_event', $data);

        }
        else {
            echo "Something went wrong !";
        }

    }

}