<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->load->view('home');
	}

	public function login() {
	    $this->load->view('login');
    }

    public function sign_up() {
        $this->load->view('sign_up');
    }

    public function bird_wiki() {
        $this->load->view('wiki_home');
    }

    public function news_and_articles() {

	    $this->load->model('Model_News_Articles');
	    $result['news'] = $this->Model_News_Articles->get_few_news();
	    $result['articles'] = $this->Model_News_Articles->get_few_articles();

	    if($result!=false) {

            $this->load->view('news_articles', $result);

        }
        else {
            echo "Something went wrong !";
        }

    }

}
