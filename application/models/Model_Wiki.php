<?php


class Model_Wiki extends CI_Model{

    public function get_bird_details() {

        $this->db->where('comName', 'Rock Pigeon');
        $result = $this->db->get('bird');

        return $result->row(0);

    }

}