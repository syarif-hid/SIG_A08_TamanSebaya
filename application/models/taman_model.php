<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class taman_model extends CI_Model {

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_taman');
        return $this->db->get()->result();
    }
}