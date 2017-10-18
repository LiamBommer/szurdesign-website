<?php

class Contact extends CI_Controller
{

    public function view($page = 'contact')
    {
        // 判断页面是否存在
        // 不存在则返回404
        if(!file_exists(APPPATH.'/views/'.$page.'.php')) 
        {
            show_404();
        }

        // to use base_url() in header
        $this->load->helper('url');

        // 页面标题
        $data['title'] = 'UR Design&nbsp|&nbsp联系我们';

        $this->load->view('components/header', $data);
        $this->load->view('components/navbar');
        // not using carousel right now
        // $this->load->view('components/carousel');
        $this->load->view('contact');
        $this->load->view('components/footer', $data);
    }
}
