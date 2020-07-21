<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUDModel extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    function createData() {
        $data = array (
            'productID' => $this->input->post('productID'),
            'productname' => $this->input->post('productname'),
            'SRP' => $this->input->post('SRP'),
        );
        $this->db->insert('tbl_name', $data);
    }

    function getAllData() {
        $query = $this->db->query('SELECT * FROM tbl_name');
        return $query->result();
    }

    function getData($id) {
        $query = $this->db->query('SELECT * FROM tbl_name WHERE `id` =' .$id);
        return $query->row();
    }

    function updateData($id) {
        $data = array (
            'productID' => $this->input->post('productID'),
            'productname' => $this->input->post('productname'),
            'SRP' => $this->input->post('SRP'),
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_name', $data);
    }

    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('tbl_name');
    }
}