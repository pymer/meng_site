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
        'm_admin/login',
        'm_admin/index'
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

        $this->load->view('admin/index.php');


    }

    /***
     * 网站的登录
     */
    public function login()
    {
        $mobile = $this->input->get('mobile', true);
        $password = $this->input->get('password', true);
        if ($mobile && $password){
            $res = $this->user_model->verifyMobilePassword($mobile, $password);
            if ($res){
                $this->successResponse();
            }
        }
        $this->load->view('admin/login.php');
    }
}