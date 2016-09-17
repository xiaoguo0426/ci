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

    public function index()
    {
        $this->load->view('admin/index');
    }

}
