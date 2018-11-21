<?php
/**
 * Created by PhpStorm.
 * User: ylmat
 * Date: 11/17/2018
 * Time: 1:56 PM
 */

class Forum extends CI_Controller {

    public function display_topics() {

        $cid = $this->input->get('cid');
        $scid = $this->input->get('scid');

        $this->load->model('Model_Forum');
        $result['topics'] = $this->Model_Forum->get_topics($cid , $scid);

        if($result!=false) {

            $this->load->view('forum_topic', $result);

        }
        else {
            echo "Something went wrong !";
        }
    }

}