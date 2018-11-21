<?php

class Model_gallery extends CI_Model
{

    public function get_photo (){

        $query = $this->db->query("SELECT * FROM siyothlk.image ORDER BY image.timeStamp DESC ;");

        if($query->num_rows()>0 ){
            foreach($query->result() as $row){
                $data[]=$row;
            }
        }
        return $data;
    }

}