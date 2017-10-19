<?php

class Article extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form', 'date'));
        $this->load->library('session', 'upload');
        $this->load->model('Articles_Model');
        
        // 验证session
        // 若未登录 则禁止访问
    }

    /*
     * 在首页显示全部文章
     */
    public function view($page = 'articles')
    {
        // 验证session
        // 若未登录 则禁止访问
        
        // sessions
        $data['session_email'] = $this->session->user_email;

        // title
        $data['title'] = $page;

        // articles page
        $data['query'] = $this->Articles_Model->show_all();

        // load view
        $this->load->view('components/header', $data);
        $this->load->view('components/navbar', $data);
        $this->load->view($page);
        $this->load->view('components/side_nav');
        $this->load->view('components/footer');
    }

    /*
     * 新建一篇文章
     */
    public function create()
    {
        header('Content-type:text/html;charset=utf-8');

        // 验证session
        // 若未登录 则禁止访问
        
        /*
         * form method: post
         * key: name
         * cover:           coverImg
         * coverImg-path:   coverImg-path
         * title:           title-area
         * content:         content-area
         */
        $config['upload_path']      = './upload_img/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 6144;
        $this->load->library('upload', $config);

        // 有选择文件则上传
        if($this->input->post('cover-path') != null)
        {
            $upload_result = $this->upload->do_upload('coverImg');

            // 上传结果
            if(!$upload_result)
            {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            }else {
                $upload_data = array('upload_data' => $this->upload->data());
            }
        }

        $article_data['cover_path'] = $this->input->post('cover-path');
        $article_data['title'] = $this->input->post('title-area');
        $article_data['content'] = $this->input->post('content-area');
        $article_data['time'] = now();

        // 测试字符集，结果：为utf-8
        // die(mb_detect_encoding($article_data['title'],array("ASCII","UTF-8","GB2312","GBK",'BIG5')));

        /* 
         * @param $article_data
         */
        $this->Articles_Model->insert($article_data);

        redirect('article/view');
    }

    /*
     * 文章预览
     *
     * @param $article_id
     */
    public function preview($article_id)
    {
        // sessions
        $data['session_email'] = $this->session->user_email;

        // title
        $data['title'] = 'Preview';

        // articles
        $data['row'] = $this->Articles_Model->preview($article_id);

        // load view
        $this->load->view('components/header', $data);
        $this->load->view('components/navbar', $data);
        $this->load->view('preview', $data);
        $this->load->view('components/side_nav');
        $this->load->view('components/footer');
    }


    /*
     * 文章删除
     *
     * @param $article_id
     */
    public function delete($article_id)
    {
        $this->Articles_Model->delete($article_id);

        redirect('article/view');
    }
}
?>
