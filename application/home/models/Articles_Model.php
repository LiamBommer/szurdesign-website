<?php

class Articles_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * show_all()
     *
     * Show all articles in database
     * return array: $articles
     */
    public function show_all()
    {
        $sql = 'SELECT * FROM articles';

        $query = $this->db->query($sql);

        return $query;
    }

    /*
     * show($num)
     *
     * @param number of articles to return
     * return array: $articles
     */
    public function show($num)
    {
        $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT $num";

        $query = $this->db->query($sql);

        return $query;
    }
}

?>
