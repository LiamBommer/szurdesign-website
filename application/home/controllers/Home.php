<?php

class Home extends CI_Controller 
{

    public function __construct()
    {
        /*
         * constructor
         */
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('Articles_Model');
        $this->load->model('Announ_Model');
    }

    public function view($page = 'home') 
    {
        /*
         * default index
         */

        // 判断页面是否存在
        // 不存在则返回404
        if(!file_exists(APPPATH.'/views/'.$page.'.php')) 
        {
            show_404();
        }


        // 页面标题
        $data['title'] = 'UR Design&nbsp|&nbsp深圳有仁室内设计';

        // 最新3条文章数据
        $data['query'] = $this->Articles_Model->show(3);

        // 最新3条公告数据
        $data['query_announ'] = $this->Announ_Model->show(3);

        $this->load->view('components/header', $data);
        $this->load->view('components/navbar');
        // not using carousel right now
        // $this->load->view('components/carousel');
        $this->load->view('components/slider');
        $this->load->view('home', $data);
        $this->load->view('components/footer', $data);
    }
}
