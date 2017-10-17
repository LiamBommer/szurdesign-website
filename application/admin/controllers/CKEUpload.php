<?php

class CKEUpload extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
    }

    public function upload($type='')
    {
        $config['upload_path']      = './upload-img/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 6144;

        $this->load->library('upload', $config);

        if(isset($_FILES['upload']))
        {
            // 文件已选择，执行上传操作
            $upload_result = $this->upload->do_upload('upload');

            if(!$upload_result)
            {
                // 上传失败
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            }else {
                $upload_data = array('upload_data' => $this->upload->data());
                echo "<script>alert('succeed');</script>";
            }

        }else {
            echo "<script>alert('文件不存在');</script>";
        }
    }
}

?>
