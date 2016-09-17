<?php

/**
 * Created by PhpStorm.
 * User: 74064
 * Date: 2016/8/7
 * Time: 21:03
 */
class TestModule extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getNews()
    {

        $query = $this->db->get('news');
        return $query->result_array();

    }

}