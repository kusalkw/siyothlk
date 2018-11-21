<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->load->view('new_home');
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

    public function events() {

        $this->load->model('Model_Events');
        $result['events'] = $this->Model_Events->get_events();

        if($result!=false) {

            $this->load->view('events', $result);

        }
        else {
            echo "Something went wrong !";
        }

    }

    public function sanctuary() {

	    $this->load->model('Model_Sanctuary');
	    $this->data['sanctuaries'] = $this->Model_Sanctuary->get_data();
        $this->load->view('sanctuary' , $this->data);
    }

    public function forum(){

        $this->load->model('Model_Forum');
        $result['cats'] = $this->Model_Forum->get_categories();
        $result['subcats'] = $this->Model_Forum->get_subcategories();

        if($result!=false) {

            $this->load->view('forum', $result);

        }
        else {
            echo "Something went wrong !";
        }
    }

    public function get_photos(){

        $this->load->model("Model_gallery");
        $result['photos']=$this->Model_gallery->get_photo();

        if($result!=false){
            $this->load->view('Gallery',$result);

        }
    }

}
