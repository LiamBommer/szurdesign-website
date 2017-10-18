<?php

class Edit_Announ extends CI_Controller
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
     * 公告编辑
     *
     * @param $announ_id
     */
    public function view($announ_id)
    {
        // sessions
        $data['session_email'] = $this->session->user_email;

        // title
        $data['title'] = 'Edit Announcement';

        // articles
        $data['row'] = $this->Announ_Model->preview($announ_id);

        // load view
        $this->load->view('components/header', $data);
        $this->load->view('components/navbar', $data);
        $this->load->view('edit_announ', $data);
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
        $announ_data['id'] = $this->input->post('id-area');
        $announ_data['title'] = $this->input->post('title-area');
        $announ_data['content'] = $this->input->post('content-area');
        $announ_data['time'] = now();


        /* 
         * @param $announ_data
         */
        $this->Announ_Model->update($announ_data);

        redirect('announ/view');
    }
}
?>
