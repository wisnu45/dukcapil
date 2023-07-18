<?php

class Master_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('kartukel');
        return $query->result_array();
    }

    public function getUbah($id)
    {
    	$query =  $this->db->get_where('kartukel',['id'=>$id]);
        return $query->row_array();
    }

    public function hapuskk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kartukel');
    }

    //model pegawai
    public function tampilpeg()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('pegawai');
        return $query->result_array();
    }

    public function getUbahPeg($id)
    {
    	$query =  $this->db->get_where('pegawai',['id'=>$id]);
        return $query->row_array();
    }

    public function hapuspeg($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pegawai');
    }


    //model penduduk
    public function tampilpen()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get_where('penduduk',['status'=>'Hidup']);
        return $query->result_array();
    }

    public function getUbahPen($id)
    {
    	$query =  $this->db->get_where('penduduk',['id'=>$id]);
        return $query->row_array();
    }

    public function hapuspen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('penduduk');
    }

    //join tabel penduduk dengan tabel kk
    public function join($id)
    {
        $query = "SELECT `penduduk`.*, `kartukel`.`nama_kk`
                    FROM `penduduk` JOIN `kartukel`
                    ON `penduduk`.`id` = `kartukel`.`id` Where penduduk.`id` = '$id'";

    return $this->db->query($query)->row_array();
    }

    //tabel data pekerjaan
    public function ker_tam()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_kerja');
        return $query->result_array();
    }

    public function hapus_ker($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_kerja');
    }

    public function getUbah_ker($id)
    {
    	$query =  $this->db->get_where('tb_kerja',['id'=>$id]);
        return $query->row_array();
    }

    //tabel data RT/RW
    public function rt_tam()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tb_rtw');
        return $query->result_array();
    }

    public function hapus_rtw($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_rtw');
    }

    public function getUbah_rtw($id)
    {
    	$query =  $this->db->get_where('tb_rtw',['id'=>$id]);
        return $query->row_array();
    }

    //transcation kependudukan
     public function tampilmat()
     {
         $this->db->order_by('id', 'DESC');
         $query = $this->db->get_where('penduduk',['status'=>'Mati']);
         return $query->result_array();
     }

     public function tampilpin()
     {
         $this->db->order_by('id', 'DESC');
         $query = $this->db->get_where('penduduk',['status'=>'Pindah']);
         return $query->result_array();
     }

     public function tampil_global()
     {
         $this->db->order_by('id', 'DESC');
         $query = $this->db->get('penduduk');
         return $query->result_array();
     }

     public function tampil_lahir()
     {
         $this->db->order_by('id', 'DESC');
         $query = $this->db->get('tb_lahir');
         return $query->result_array();
     }

     public function hapus_lahir($id)
     {
         $this->db->where('id', $id);
         $this->db->delete('tb_lahir');
     }

     public function getUbahLah($id)
    {
    	$query =  $this->db->get_where('tb_lahir',['id'=>$id]);
        return $query->row_array();
    }


}