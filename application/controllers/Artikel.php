<?php

class Artikel extends CI_Controller {
    public function index()
    {
        // parent::__construct();
        $this->load->model('M_artikel');

        $data['artikel'] = $this->M_artikel->get_data();

        $this->load->view('daftar_artikel', $data);
    }
}

?>