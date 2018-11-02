<?php
/**
 * Created by PhpStorm.
 * User: ylmat
 * Date: 10/26/2018
 * Time: 7:06 AM
 */

class Sanctuary extends CI_Controller
{
    public function viewFullSanctuaries () {

        $id = $this->input->get('id');
        $this->load->model('Model_Sanctuary');

        $result = $this->Model_Sanctuary->getFullSanctuary($id);

        if($result!=false) {

            $data['sanctuaries'] = array(

                'id' => $result->id,
                'name' => $result->name,
                'zone' => $result->zone,
                'details' => $result->details,
                'birdDetails' => $result->bird_details,
                'mapLink' => $result->mapLink,
                'image' => $result->image
            );

            $this->load->view('full_sanctuary', $data);

        }
        else {
            echo "Something went wrong !";
        }

    }

}