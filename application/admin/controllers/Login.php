<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Login_Model');
    }


    /*
     * login page
     */
    public function view()
    {
        $data['title'] = 'UR Design Management Page';

        $this->load->view('components/header', $data);
        $this->load->view('login');
        $this->load->view('components/footer');

    }

    public function check()
    {
        /* 设置表单验证规则
         * set_rules()
         * @param name in form
         * @param name would be showed in error message
         * @param rules
         */
        $this->form_validation->set_rules('email', 'email_area', 'required');
        $this->form_validation->set_rules('password', 'pw_area', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            // 输入不符合规则 重新显示页面
            redirect('login/view');

            /*
            $this->load->view('components/header', $data);
            $this->load->view('login');
            $this->load->view('components/footer');
             */

        } else
        {
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');

            // 数据库检查用户密码正确性
            if($this->Login_Model->login_check($data) == TRUE)
            { 
                /* 密码正确 */
                
                // Add EMAIL data in POST
                // to SESSION
                $this->session->user_email = $this->input->post('email');

                // show index
                redirect('article/view/articles');
            } else 
            {   
                /* 密码错误 */
                
                // 重新显示页面
                redirect('login/view');

                /*
                $this->load->view('components/header', $data);
                $this->load->view('login');
                $this->load->view('components/footer');
                 */
            }
        }
    }
}
?>
