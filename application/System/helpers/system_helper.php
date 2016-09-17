<?php
/**
 * 系统公共函数
 * User: 74064
 * Date: 2016/9/17
 * Time: 16:29
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 资源文件路径
 */
if (!function_exists('assets_url')) {

    function assets_url($assets)
    {
        return base_url('assets') . '/' . 'system' . '/' . $assets;
    }
}
/**
 * css资源文件路径
 */
if (!function_exists('css_url')) {

    function css_url($css)
    {
        return assets_url('css/' . $css);
    }
}
/**
 * js资源文件路径
 */
if (!function_exists('js_url')) {

    function js_url($js)
    {
        return assets_url('js/' . $js);
    }
}
/**
 * img资源文件路径
 */
if (!function_exists('img_url')) {

    function img_url($img)
    {
        return assets_url('img/' . $img);
    }
}
/**
 * 获取当前时间
 */
if (!function_exists('get_now_date')) {
    function get_now_date($format = 'Y-m-d H:i:s')
    {
        return date($format);
    }
}