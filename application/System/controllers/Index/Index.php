<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 74064
 * Date: 2016/8/14
 * Time: 20:09
 */
class Index extends CI_Base
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->isLogin()){
            redirect(base_url('Admin/Admin/login'));
        }
    }

    public function index()
    {
        $this->load->view('index/index');
    }
}