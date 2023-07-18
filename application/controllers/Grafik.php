<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model arsipMasuk
      $this->load->model('Penduduk_model');
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

  
      $this->load->model('Penduduk_model','pen');
      $data['status'] = $this->pen->stat_status();
      
    //  var_dump($data['status']);die;
      $data['judul'] = 'Halaman Data Grafik';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('grafik/index',$data);
      $this->load->view('template/footer');
    }

    public function lahir()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

  
      $this->load->model('Penduduk_model','pen');
      $data['status'] = $this->pen->stat_lahir();
      
    //  var_dump($data['status']);die;
      $data['judul'] = 'Halaman Data Grafik';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('grafik/lahir',$data);
      $this->load->view('template/footer');
    }

    public function agama()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

  
      $this->load->model('Penduduk_model','pen');
      $data['status'] = $this->pen->stat_agama();
      
    //  var_dump($data['status']);die;
      $data['judul'] = 'Halaman Data Grafik';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('grafik/agama',$data);
      $this->load->view('template/footer');
    }

    public function kerja()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

  
      $this->load->model('Penduduk_model','pen');
      $data['status'] = $this->pen->stat_kerja();
      
    //  var_dump($data['status']);die;
      $data['judul'] = 'Halaman Data Grafik';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('grafik/kerja',$data);
      $this->load->view('template/footer');
    }

    public function pendidikan()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

  
      $this->load->model('Penduduk_model','pen');
      $data['status'] = $this->pen->stat_pend();
      
    //  var_dump($data['status']);die;
      $data['judul'] = 'Halaman Data Grafik';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('grafik/pedidikan',$data);
      $this->load->view('template/footer');
    }

}