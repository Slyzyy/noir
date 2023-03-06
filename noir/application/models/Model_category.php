<?php

class Model_category extends CI_Model
{
    public function data_clothing()
    {
        return $this->db->get_where("tbl_barang", array(
            'kategori' => 'clothing'
        ));
    }
}
