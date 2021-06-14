<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_booking extends CI_Model
{   
    public function SemuaData()
    {
        $this->load->database();
        $query = $this->db->query('SELECT * FROM booking');

        return $query->result();
    }

    public function getById()
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM booking ORDER BY ID DESC LIMIT 1");

        return $query->result();
    }

    public function insert_post($date, $time, $quantity)
    {
        $this->load->database();
        $data = array(
            'date' => $date,
            'time' => $time,
            'quantity' => $quantity
        );
        $this->db->insert('booking', $data);

        $id = $this->db->insert_id();

        return $id;

    }

    public function update_post($id, $FirstName, $LastName, $phone, $email, $address, $notes)
    {
        $this->load->database();
        $this->db->query("UPDATE booking SET FirstName = '$FirstName', 
        LastName = '$LastName', phone = '$phone', email = '$email', alamat = '$address', notes = '$notes' 
        WHERE id = $id");    
    }
}