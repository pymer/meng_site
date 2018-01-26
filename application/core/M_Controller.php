<?php
/**
 * Author: dongzhexue
 * Date: 2018/1/24
 * Desc: 管理后台基类控制器
 */

class M_Controller extends CI_Controller
{
    /**
     * @var array 权限验证数据
     */
    public $_no_need_auth = [];

    /***
     * @var User_model;
     */
    public $user_model;


    /**
     * @var \CI_Session;
     */
    public $session;


    /***
     * @var \CI_URI;
     */
    public $uri;

    /***
     * 对应输入的类
     * @var \CI_Input;
     */
    public $input;

    /**
     * 对应数据加载类
     * @var \CI_Loader;
     */
    public $load;


    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->_authControl();

    }

    /***
     * 后台一些权限的控制
     * @return bool
     */
    protected function _authControl()
    {
        $url_string = $this->uri->uri_string();
        if (!empty($this->_no_need_auth) && in_array($url_string, $this->_no_need_auth)) {
            return true;
        }
        //一系列的权限验证
        if ($this->session->is_login){
            return true;
        }
        $this->errorJump();
    }

    /***
     * 调转错误页面
     * @param string $url 对应跳转页面的url
     */
    public function errorJump($url = '/welcome/index')
    {
        $jump_url = 'http://'.$_SERVER['HTTP_HOST'].$url;
        echo '<script type="text/javascript">window.location.href="'. $jump_url. '"</script>';
        exit;
    }

    /***
     * 获取 php://input流数据
     * @return mixed
     */
    public function _formatInputData()
    {
        return json_decode($this->input->raw_input_stream, true);
    }

}

