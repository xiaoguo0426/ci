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

    public function __construct()
    {
        parent::__construct();
    }



    public function display($template = '')
    {
        print_r(__CLASS__);
        print_r(__FUNCTION__);
        print_r(__METHOD__);
    }

}