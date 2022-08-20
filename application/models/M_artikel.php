<?php

class M_artikel extends CI_Model {

    public $table = "artikel";

    public function get_data() {
        return $this->db->get($this->table)->result();
    }

}

?>