<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_testimonials extends CI_Model
{
    public function SemuaData()
    {
        $this->load->database();
        $query = $this->db->query('SELECT * FROM testimonials');

        return $query->result();
    }

    public function insert_post($email, $testi)
    {
        $this->load->database();
        $this->db->query("INSERT INTO testimonials (email, testi) VALUES ('$email', '$testi')");
    }

    public function delete_post($id)
    {
        $this->load->database();
        $this->db->query("DELETE FROM testimonials WHERE id = $id");
    }
   
}