<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 74064
 * Date: 2016/8/7
 * Time: 20:53
 */
class Test extends CI_Controller
{
    public function __construct()
    {
        parent::get_instance();
        $this->load->model('Test_model');
        $this->load->helper('url_helper');
    }

    public function show(){
        $data = $this->news_model->getNews();
        print_r($data);
        $this->load->view('Test_show');

    }

}