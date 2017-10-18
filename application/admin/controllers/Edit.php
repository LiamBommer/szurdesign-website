<?php

class Edit extends CI_Controller
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
     * 文章编辑
     *
     * @param $article_id
     */
    public function view($article_id)
    {
        // sessions
        $data['session_email'] = $this->session->user_email;

        // title
        $data['title'] = 'Edit';

        // articles
        $data['row'] = $this->Articles_Model->preview($article_id);

        // load view
        $this->load->view('components/header', $data);
        $this->load->view('components/navbar', $data);
        $this->load->view('edit', $data);
        $this->load->view('components/side_nav');
        $this->load->view('components/footer');
    }

    /*
     *
     */
    public function submit()
    {
        /*
         * form method: post
         * key: name
         * title:   title-area
         * content: content-area
         */
        $config['upload_path']      = './upload_img/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 6144;
        $this->load->library('upload', $config);

        // 上传结果
        $upload_result = $this->upload->do_upload('coverImg');
        if(!$upload_result)
        {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }else {
            $upload_data = array('upload_data' => $this->upload->data());
        }

        $article_data['cover_path'] = $this->input->post('cover-path');
        $article_data['id'] = $this->input->post('id-area');
        $article_data['title'] = $this->input->post('title-area');
        $article_data['content'] = $this->input->post('content-area');
        $article_data['time'] = now();

        /* 
         * @param $article_data
         */
        $this->Articles_Model->update($article_data);

        redirect('article/view');
    }
}
?>
