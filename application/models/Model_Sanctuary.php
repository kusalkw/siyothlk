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
        $this->db->select('name , zone , details , image');
        $this->db->from('sanctuary');
        $query = $this->db->get();
        return $query->result();
    }
}