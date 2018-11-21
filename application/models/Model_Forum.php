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

        $query = $this->db->query("SELECT subcat_id , parent_id , subcat_title , subcat_description FROM forum_subcategory;");

        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function get_topic_count($cat_id , $subcat_id) {

        $this->db->select('category_id , subcategory_id , topic_id , count(*)');
        $this->db->from('forum_topic');
        $this->db->where('category_id' , $cat_id);
        $this->db->where('subcategory_id' , $subcat_id);
        $query = $this->db->get();

        return $query->result();

    }

    public function get_topics($cat_id , $subcat_id) {

//        $this->db->select('*');
//        $this->db->from('forum_topic');
//        //$this->db->join('forum_category', 'forum_topic.category_id = forum_category.cat_id');
//        //$this->db->join('forum_subcategory', 'forum_topic.subcategory_id = forum_subcategory.subcat_id');
//        $this->db->where('category_id' , $cat_id);
//        $this->db->where('subcategory_id' , $subcat_id);
//        $query = $this->db->get();
        $query = $this->db->query("SELECT * FROM `forum_topic` WHERE category_id = $cat_id and subcategory_id = $subcat_id");


        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }

    }
}