<?php
/**
 * Author: dongzhexue
 * Date: 2018/1/10
 * Desc: 写入文件日志
 */

class WriteLog
{
    /**
     * @var 被写入的文件名
     */
    private $_file_name;

    /**
     * @var 被写入的标题
     */
    private $_title;

    /**
     * 日志记录操作类
     * @var \Monolog\Logger
     */
    private $_log;

    /**
     * WriteLog constructor.
     *
     *
     * @param $file_name
     * @param $title
     */
    public function __construct($file_name, $title)
    {
        $this->_file_name = $file_name;
        $this->_title = $title.'_'.date('Y-m-d').'.log';
        $this->_log = new Monolog\Logger($this->_title);
    }

    public function _writeFile(...$content)
    {


    }

}