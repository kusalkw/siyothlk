<?php


class News_Articles extends CI_Controller {

    public function news() {

        $this->load->model('Model_News_Articles');
        $result['news'] = $this->Model_News_Articles->get_news();

        if($result!=false) {

            $this->load->view('news', $result);

        }
        else {
            echo "Something went wrong !";
        }

    }

    public function articles() {

        $this->load->model('Model_News_Articles');
        $result['articles'] = $this->Model_News_Articles->get_articles();

        if($result!=false) {

            $this->load->view('articles', $result);

        }
        else {
            echo "Something went wrong !";
        }

    }

    public function add_article() {
        $this->load->view('add_article');
    }

    public function add_new_article() {

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Article Content', 'required');
        //$this->form_validation->set_rules('image', 'Image', 'trim|required|min_length[5]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('add_article');
        }
        else
        {
            $this->load->model('Model_News_Articles');
            $result = $this->Model_News_Articles->add_new_article();

            if($result) {

                $this->session->set_flashdata('msg', '<div class="alert alert-primary text-center" role="alert"> Article Submitted Successfully! </div>');
                redirect('News_Articles/articles');
            }
            else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center" role="alert"> Oops! Something went wrong </div>');
                redirect('News_Articles/add_article');
            }

        }

    }

    public function view_full_article () {

        $id = $this->input->get('id');
        $this->load->model('Model_News_Articles');

        $result = $this->Model_News_Articles->get_full_article($id);

        if($result!=false) {

            $data['article'] = array(

                'id' => $result->id,
                'title' => $result->title,
                'details' => $result->details,
                'timeStamp' => $result->timeStamp,
                'userId' => $result->userId,
                'username' => $result->username

            );

            $this->load->view('full_article', $data);

        }
        else {
            echo "Something went wrong !";
        }

    }

    public function view_full_news () {

        $id = $this->input->get('id');
        $this->load->model('Model_News_Articles');

        $result = $this->Model_News_Articles->get_full_news($id);

        if($result!=false) {

            $data['news'] = array(

                'id' => $result->id,
                'title' => $result->title,
                'details' => $result->details,
                'timeStamp' => $result->timeStamp,
                'userId' => $result->userId,
                'username' => $result->username

            );

            $this->load->view('full_news', $data);

        }
        else {
            echo "Something went wrong !";
        }

    }


}