<?php
/**
 * Created by PhpStorm.
 * User: ylmat
 * Date: 10/27/2018
 * Time: 10:40 AM
 */

class Model_Sanctuary extends CI_Model
{
    function getData()
    {
        $this->db->select('id , name , zone , details , image');
        $this->db->from('sanctuary');
        $query = $this->db->get();
        return $query->result();
    }

    function getFullSanctuary($id)
    {
        $this->db->select('id , name , zone , details , bird_details , mapLink , image');
        $this->db->from('sanctuary');
        $this->db->where('id' , $id);
        $query = $this->db->get();
        //$query = $this->db->query("SELECT id, name, zone, details, bird_details, image FROM sanctuary WHERE id = $id;");

        return $query->row(0);
    }
}