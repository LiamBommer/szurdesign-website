<?php

class Announ extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form', 'date'));
        $this->load->library('session', 'upload');
        $this->load->model('Announ_Model');
        
        // 验证session
        // 若未登录 则禁止访问
    }

    /*
     * 在首页显示全部公告
     */
    public function view($page = 'announcements')
    {
        // 验证session
        // 若未登录 则禁止访问
        
        // sessions
        $data['session_email'] = $this->session->user_email;

        // title
        $data['title'] = $page;

        // articles page
        $data['query'] = $this->Announ_Model->show_all();

        // load view
        $this->load->view('components/header', $data);
        $this->load->view('components/navbar', $data);
        $this->load->view($page);
        $this->load->view('components/side_nav');
        $this->load->view('components/footer');
    }

    /*
     * 新建一篇公告
     */
    public function create()
    {
        header('Content-type:text/html;charset=utf-8');

        // 验证session
        // 若未登录 则禁止访问
        
        /*
         * form method: post
         * key: name
         * title:           title-area
         * content:         content-area
         */
        $announ_data['title'] = $this->input->post('title-area');
        $announ_data['content'] = $this->input->post('content-area');
        $announ_data['time'] = now();

        /* 
         * @param $announ_data
         */
        $this->Announ_Model->insert($announ_data);

        redirect('announ/view');
    }

    /*
     * 公告预览
     *
     * @param $announ_id
     */
    public function preview($announ_id)
    {
        // sessions
        $data['session_email'] = $this->session->user_email;

        // title
        $data['title'] = 'Preview';

        // articles
        $data['row'] = $this->Announ_Model->preview($announ_id);

        // load view
        $this->load->view('components/header', $data);
        $this->load->view('components/navbar', $data);
        $this->load->view('preview', $data);
        $this->load->view('components/side_nav');
        $this->load->view('components/footer');
    }

    /*
     * 公告删除
     *
     * @param $announ_id
     */
    public function delete($announ_id)
    {
        $this->Announ_Model->delete($announ_id);

        redirect('announ/view');
    }
}

?>
