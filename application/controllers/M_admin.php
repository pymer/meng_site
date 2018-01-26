<?php
/**
 * Author: dongzhexue
 * Date: 2018/1/21
 * Desc:
 */

class M_admin extends M_Controller
{

    /***
     * @var Serial_model;
     */
    public $serial_model;

    /**
     * @var array
     */
    public $_no_need_auth = [
        'm_admin/login'
    ];

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    /***
     * 后台管理首页
     */
    public function index()
    {

        $this->load->model('serial_model');
        $res = $this->serial_model->getList();
        echo '<pre>';
        print_r($res);
        exit;
        $this->load->view('admin/index.php');


    }

    /***
     * 网站的登录
     */
    public function login()
    {
        if (IS_POST){
            $mobile = $this->input->get('mobile', true);
            $password = $this->input->get('password', true);
            $res = $this->user_model->verifyMobilePassword($mobile, $password);
        }

        $this->load->view('admin/login.php');
    }
}