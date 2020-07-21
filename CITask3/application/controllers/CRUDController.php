<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUDController extends CI_Controller {
    public function __construct() {
        parent:: __construct();
        $this->load->model('CRUDModel');
    }

	public function index() {
        $data['result'] = $this->CRUDModel->getAllData();
		$this->load->view('CRUDView', $data);
    }

    public function create() {
        $this->CRUDModel->createData();
        redirect("CRUDController");
    }

    public function edit($id) {
        $data['row'] = $this->CRUDModel->getData($id);
        $this->load->view('CRUDEdit', $data);
    }

    public function update($id) {
        $this->CRUDModel->updateData($id);
        redirect("CRUDController");
    }

    public function delete($id) {
        $this->CRUDModel->deleteData($id);
        redirect("CRUDController");
    }
}