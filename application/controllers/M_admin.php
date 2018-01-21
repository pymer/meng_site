<?php
/**
 * Author: dongzhexue
 * Date: 2018/1/21
 * Desc:
 */

class M_admin extends CI_Controller
{
    /***
     * 后台管理首页
     */
    public function index()
    {


        $this->load->view('admin/index.php');

    }
}