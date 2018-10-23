<?php

class Model_News_Articles extends CI_Model{

    public function add_new_article($data) {

        $data = array(

            'title' => $this->input->post('title', TRUE),
            'details' => $this->input->post('content', TRUE),
            'timeStamp' => date ('Y-m-d H:i:s'),
            'image' => $data['image'],
            'userId' => $this->session->userdata('id')

        );

        return $this->db->insert('article', $data);

    }

    public function add_new_news($data) {

        $data = array(

            'title' => $this->input->post('title', TRUE),
            'details' => $this->input->post('content', TRUE),
            'timeStamp' => date ('Y-m-d H:i:s'),
            'image' => $data['image'],
            'userId' => $this->session->userdata('id')

        );

        return $this->db->insert('news', $data);

    }

    public function get_articles() {

        $query = $this->db->query("SELECT article.id, article.title, article.details, article.timeStamp, article.image, article.userId, user.username FROM siyothlk.article JOIN user on article.userId = user.userId ORDER BY article.timeStamp DESC;");

        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }


    }

    public function get_news() {

        $query = $this->db->query("SELECT news.id, news.title, news.details, news.timeStamp, news.image, news.userId, user.username FROM siyothlk.news JOIN user on news.userId = user.userId ORDER BY news.timeStamp DESC;");

        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }


    }

    public function get_few_articles() {

        $query = $this->db->query("SELECT article.id, article.title, article.details, article.timeStamp, article.image, article.userId, user.username FROM siyothlk.article JOIN user on article.userId = user.userId ORDER BY article.timeStamp DESC LIMIT 3;");

        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }


    }

    public function get_few_news() {

        $query = $this->db->query("SELECT news.id, news.title, news.details, news.timeStamp, news.image, news.userId, user.username FROM siyothlk.news JOIN user on news.userId = user.userId ORDER BY news.timeStamp DESC LIMIT 3;");

        if($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }


    }

    public function get_full_article($id) {

        $query = $this->db->query("SELECT article.id, article.title, article.details, article.timeStamp, article.image, article.userId, user.username FROM siyothlk.article JOIN user on article.userId = user.userId WHERE article.id=$id;");

        return $query->row(0);

    }

    public function get_full_news($id) {

        $query = $this->db->query("SELECT news.id, news.title, news.details, news.timeStamp, news.image, news.userId, user.username FROM siyothlk.news JOIN user on news.userId = user.userId WHERE news.id=$id;");

        return $query->row(0);

    }


}