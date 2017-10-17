<?php

/*
 * Tables: Articles
 *
 * Fields:
 * id,          int not null auto-increment pk
 * title,       text not null
 * content,     text not null
 * time,        text not null   (should be created by php)
 * cover_name,  varchar(30)
 *
 */
class Articles_Model extends CI_Model
{
    // var $data = array();
    // var $form = array();
    // var $controller;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'array'));
        $this->load->helper('url');
        /* UNSOLVED ERRORS:
         * 'unable to load the requested class:  */
        // $this->load->library('errors');
        // $this->load->library('validation');
    }

    /*
     * Show all articles
     * 
     * return array: '$articles'
     */
    public function show_all()
    {
        $sql = "SELECT * FROM articles";

        $query = $this->db->query($sql);

        return $query;
    }

    /*
     * Insert an article
     *
     * @param $article_data
     * (an array includes data)
     */
    public function insert($article_data)
    {
        $sql = "INSERT INTO articles(
            title, content, time, cover_name)
            VALUES(" . $this->db->escape($article_data['title']) . ", " . $this->db->escape($article_data['content']) . ", " . $this->db->escape($article_data['time']) . ", " . $this->db->escape($article_data['cover_path']) . ")";

        $query = $this->db->query($sql);
    }

    /*
     * Article Preview
     *
     * @param $article_id
     *
     *  return $query
     */
    public function preview($article_id)
    {
        $sql = "SELECT id, title, content FROM articles
                WHERE id = " . $this->db->escape($article_id) . ";";

        $query = $this->db->query($sql);
        return $query->row();
    }

    /*
     * Edit article
     *
     * @param $article_data
     */
    public function update($article_data)
    {
        $sql = "UPDATE articles SET title=" 
                . $this->db->escape($article_data['title'])
                . ", content="
                . $this->db->escape($article_data['content'])
                . ", cover_name="
                . $this->db->escape($article_data['cover_path'])
                . "WHERE id = " . $this->db->escape($article_data['id']) 
                . ";";

        $query = $this->db->query($sql);
    }

    /*
     * delete an article
     *
     * @param $article_id
     */
    public function delete($article_id)
    {
        $sql = "DELETE FROM articles WHERE id=" 
            . $this->db->escape($article_id) .";";

        $query = $this->db->query($sql);
    }
    
}
?>
