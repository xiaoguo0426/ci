<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 框架基础类
 * Created by PhpStorm.
 * User: 74064
 * Date: 2016/8/10
 * Time: 21:48
 */
class CI_Base extends CI_Controller
{

    private $CI;

    public function __construct()
    {
        parent::__construct();
        $this->CI = &get_instance();//CI超级对象
    }

    public function isLogin()
    {
        return empty($_SESSION['users']) ? false : true;
    }

    public function display($template = '')
    {
//        $output = array(
//            '_ROOT_' => rtrim($this->CI->config->base_url, '/'),
//            '_APP_' => rtrim(site_url(), '/'),
//            '_RES_' =>$this->CI->config->base_url.'resource',
//        );
////        $this->output->set_output($output);
//        str_replace(array_keys($output), array_values($output), $this->fetch($template));
//        $this->load->view();
    }

}