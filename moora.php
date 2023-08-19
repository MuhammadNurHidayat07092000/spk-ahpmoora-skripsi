<?php

class moora
{
    public $db;
    public $kriteria = array();
    public $alternatif = array();

    public function __construct()
    {
        $this->get_koneksi_db();
        $this->get_kriteria();
        $this->get_alternatif();
    }

    public function get_koneksi_db()
    {
        $this->db = new SQLite3('db_moora.sqlite');
    }

    public function get_kriteria()
    {
        $kriteria = $this->db->query('SELECT * FROM tb_kriteria');
        while ($row = $kriteria->fetchArray()) {
            array_push($this->kriteria, array(
                $row['id'],
                $row['kode'],
                $row['kriteria'],
                $row['tipe'],
                $row['bobot'],
                $row['satuan']));
        }
    }

    public function get_alternatif()
    {
        $alternatif = $this->db->query('SELECT * FROM tb_alternatif');
        while ($row = $kriteria->fetchArray()) {
            array_push($this->kriteria, array(
                $row['kode'],
                $row['alternatif'],
                $row['k1'],
                $row['k2'],
                $row['k3'],
                $row['k4'],
                $row['k5']));
        }
    }
}