<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: 74064
 * Date: 2016/8/9
 * Time: 23:25
 */
class Admin extends CI_Base
{
    /**
     * 登陆
     */
    public function login()
    {
        if ($this->isLogin()) {
            redirect(base_url('Index/Index/index'));
        } else {
            $this->load->view('admin/login');
        }
    }

}
