<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model
{   
    public function SemuaDataMenu()
    {
        $this->load->database();
        // $query = $this->db->query('SELECT * FROM menu');
        $query = $this->db->get('menu');

        return $query->result();
    }

    public function insert_post($name, $description, $picture, $price) 
    {
        $this->load->database();
        $this->db->query("INSERT INTO menu (name, description, picture, price) VALUES ('$name', '$description', '$picture', '$price')");
    }

    public function delete_post($id)
    {
        $this->load->database();
        $this->db->query("DELETE FROM menu WHERE id = $id");
    }

    public function update_post($id, $name, $description, $picture, $price)
    {
        $this->load->database();
        $this->db->query("UPDATE menu SET name = '$name', 
        description = '$description', picture = '$picture', price = '$price' 
        WHERE id = $id");    
        // dd($id);
        // var_dump($id);

    }
}