<?php

/*
 * Tables: Announcements
 *
 * Fields:
 * id,          int not null auto-increment pk
 * title,       text not null
 * content,     text not null
 * time,        text not null   (should be created by php)
 *
 */
class Announ_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'array'));
        $this->load->helper('url');
    }

    /*
     * Show all announcements
     * 
     * return array: '$announ'
     */
    public function show_all()
    {
        $sql = "SELECT * FROM announcements";

        $query = $this->db->query($sql);

        return $query;
    }

    /*
     * Insert an announcement
     *
     * @param $announ_data
     * (an array includes data)
     */
    public function insert($announ_data)
    {
        $sql = "INSERT INTO announcements(
            title, content, time)
            VALUES(" . $this->db->escape($announ_data['title']) . ", " . $this->db->escape($announ_data['content']) . ", " . $this->db->escape($announ_data['time']) . ")";

        $query = $this->db->query($sql);
    }

    /*
     * Article Preview
     *
     * @param $announ_id
     *
     *  return $query
     */
    public function preview($announ_id)
    {
        $sql = "SELECT id, title, content FROM announcements
                WHERE id = " . $this->db->escape($announ_id) . ";";

        $query = $this->db->query($sql);
        return $query->row();
    }

    /*
     * Edit Announcement
     *
     * @param $announ_data
     */
    public function update($announ_data)
    {
        $sql = "UPDATE announcements SET title=" 
                . $this->db->escape($announ_data['title'])
                . ", content="
                . $this->db->escape($announ_data['content'])
                . "WHERE id = " . $this->db->escape($announ_data['id']) 
                . ";";

        $query = $this->db->query($sql);
    }

    /*
     * Delete an Announcement
     *
     * @param $announ_id
     */
    public function delete($announ_id)
    {
        $sql = "DELETE FROM announcements WHERE id=" 
            . $this->db->escape($announ_id) .";";

        $query = $this->db->query($sql);
    }
}

?>
