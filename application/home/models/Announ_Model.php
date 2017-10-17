<?php

class Announ_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * show_all()
     *
     * Show all announcements in database
     * return array: $announ
     */
    public function show_all()
    {
        $sql = 'SELECT * FROM announcements';

        $query = $this->db->query($sql);

        return $query;
    }

    /*
     * show($num)
     *
     * @param number of announcements to return
     * return array: $announ
     */
    public function show($num)
    {
        $sql = "SELECT * FROM announcements ORDER BY id DESC LIMIT $num";

        $query = $this->db->query($sql);

        return $query;
    }
}

?>
