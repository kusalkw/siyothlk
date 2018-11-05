<?php
/**
 * Created by PhpStorm.
 * User: ylmat
 * Date: 10/26/2018
 * Time: 7:06 AM
 */

class Sanctuary extends CI_Controller {
    public function view_full_sanctuaries () {

        $id = $this->input->get('id');
        $this->load->model('Model_Sanctuary');

        $result = $this->Model_Sanctuary->get_full_sanctuary($id);

        if($result!=false) {

            $data['sanctuaries'] = array(

                'id' => $result->id,
                'name' => $result->name,
                'zone' => $result->zone,
                'details' => $result->details,
                'bird_details' => $result->bird_details,
                'map_link' => $result->mapLink,
                'image' => $result->image
            );

            $this->load->view('full_sanctuary', $data);

        }
        else {
            echo "Something went wrong !";
        }

    }

}