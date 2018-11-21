<?php
/**
 * Created by PhpStorm.
 * User: ylmat
 * Date: 11/16/2018
 * Time: 11:34 PM
 */

class Model_Forum extends CI_Model {

    public function get_categories() {

        $query = $this->db->query("SELECT cat_id , cat_title FROM forum_category;");

        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function get_subcategories() {

        $query = $this->db->query("SELECT parent_id , subcat_title , subcat_description FROM forum_subcategory;");

        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
}