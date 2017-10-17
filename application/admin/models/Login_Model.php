<?php

class Login_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * 验证用户
     *
     * @param $data
     * $data['email']
     * $data['password'] 
     *
     * 用户密码正确 return TRUE
     * 用户密码错误 return FALSE
     */
    public function login_check($data)
    {

        // $this->db->escape()
        // 检测数据类型，仅转义字符串类型的数据,自动用单引号括起数据
        $sql = "SELECT email, password FROM user 
            WHERE email = " . $this->db->escape($data['email']) . "
            AND password = " . $this->db->escape($data['password']);
        
        $query = $this->db->query($sql);

        $result = $query->result();
        if($result)
        {
            /* 结果不为空 */
            /* 密码正确 */

            return TRUE;
        } else
        {
            /* 密码错误 */
            
            return FALSE;
        }
    }
}
?>
