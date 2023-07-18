<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kependudukan extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model arsipMasuk
      $this->load->model('Master_model');
      //user akses
     is_log_in();
  }
  
     //Bagian transaction kependudukan
     public function mati()
     {
        //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
   
       //memanggil model Master data
       $this->load->model('Master_model','pend');
       $data['tampil'] = $this->pend->tampilmat();
       
     //  var_dump($data['tampil']);die;
       $data['judul'] = 'Halaman Data Penduduk Meninggal';
       $this->load->view('template/header',$data);
       $this->load->view('template/sidebar',$data);
       $this->load->view('template/topbar',$data);
       $this->load->view('kependudukan/pen_mati',$data);
       $this->load->view('template/footer');
     }

     public function excel_mati()
     {
        //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 
      //memanggil model Master data
      $this->load->model('Master_model','pend');
      $data['tampil'] = $this->pend->tampilmat();
      
       $this->load->view('kependudukan/excel_mat',$data);
 
     }

     public function pindah()
     {
        //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
   
       //memanggil model Master data
       $this->load->model('Master_model','pend');
       $data['tampil'] = $this->pend->tampilpin();
       
     //  var_dump($data['tampil']);die;
       $data['judul'] = 'Halaman Data Penduduk Pindah';
       $this->load->view('template/header',$data);
       $this->load->view('template/sidebar',$data);
       $this->load->view('template/topbar',$data);
       $this->load->view('kependudukan/pen_pindah',$data);
       $this->load->view('template/footer');
     }

     public function excel_pindah()
     {
        //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 
      //memanggil model Master data
      $this->load->model('Master_model','pend');
      $data['tampil'] = $this->pend->tampilpin();
      
       $this->load->view('kependudukan/excel_pin',$data);
 
     }

     public function update()
     {
        //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
   
       //memanggil model Master data
       $this->load->model('Master_model','pend');
       $data['tampil'] = $this->pend->tampil_global();
       
     //  var_dump($data['tampil']);die;
       $data['judul'] = 'Halaman Status Data Penduduk';
       $this->load->view('template/header',$data);
       $this->load->view('template/sidebar',$data);
       $this->load->view('template/topbar',$data);
       $this->load->view('kependudukan/pen_update',$data);
       $this->load->view('template/footer');
     }

    public function ubahpen($id)
    {
      //mengambil data dari session di controller auth  
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['tampil'] = $this->db->get('kartukel')->result_array();

      $data['kerja'] = $this->db->get('tb_kerja')->result_array();

      $data['rtw'] = $this->db->get('tb_rtw')->result_array();
    
      $data['ubah'] = $this->Master_model->getUbahPen($id);

    $this->form_validation->set_rules('nik', 'Nik', 'required|trim',[
      'required' => 'No. Nik Harus Diisi'
    ]);

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Harus Diisi'
    ]);
    $this->form_validation->set_rules('status', 'Status', 'required|trim',[
        'required' => 'Status Harus Diisi'
    ]);
    $this->form_validation->set_rules('tgl', 'Tgl', 'required|trim',[
    'required' => 'Tanggal Harus Diisi'
    ]);
    

    if($this->form_validation->run() == FALSE){
    $data['judul'] = 'Halaman Edit Data Penduduk';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('kependudukan/ubahpen',$data);
    $this->load->view('template/footer');
    }else{
    $data = [
      'nama' => $this->input->post('nama'),
      'nik' => $this->input->post('nik'),
      'status' =>$this->input->post('status'),
      'tgl' =>$this->input->post('tgl')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('penduduk',$data);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiUbah</div>');
    redirect('kependudukan/update');
    }
    }


     //Bagian transaction kependudukan
     public function lahir()
     {
        //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
   
       //memanggil model Master data
       $this->load->model('Master_model','pend');
       $data['tampil'] = $this->pend->tampil_lahir();
       
     //  var_dump($data['tampil']);die;
       $data['judul'] = 'Halaman Data Kelahiran';
       $this->load->view('template/header',$data);
       $this->load->view('template/sidebar',$data);
       $this->load->view('template/topbar',$data);
       $this->load->view('kependudukan/kelahiran',$data);
       $this->load->view('template/footer');
     }

     public function filter()
     {
        //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
       
     //  var_dump($data['tampil']);die;
       $data['judul'] = 'Halaman Data Penduduk';
       $this->load->view('template/header',$data);
       $this->load->view('template/sidebar',$data);
       $this->load->view('template/topbar',$data);
       $this->load->view('kependudukan/filter',$data);
       $this->load->view('template/footer');
     }

     public function item_tahun()
     {
       //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 
       $tahun = $this->input->post('tahun');
 
       $data['tampil'] = $this->db->get_where('tb_lahir',['tahun'=>$tahun])->result_array();
       
     //  var_dump($data['tampil']);die;
     $data['judul'] = 'Halaman Filter Data Kelahiran Per-Tahun';
     $this->load->view('template/header',$data);
     $this->load->view('template/sidebar',$data);
     $this->load->view('template/topbar',$data);
     $this->load->view('kependudukan/filter_tahun',$data);
     $this->load->view('template/footer');
     }

     public function add()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      
    // $this->form_validation->set_rules('nokk', 'Nokk', 'required|trim|min_length[16]|is_unique[tb_lahir.no_kk]',[
    //       'required' => 'No. Kartu Keluarga Harus Diisi',
    //       'is_unique' => 'Maaf No. Kartu Keluarga Sudah Ada',
    //       'min_length' => 'No. Kartu Keluarga Diinput Harus 16 Digit  !'
    //   ]);
    $this->form_validation->set_rules('id', 'ID', 'required|trim',[
      'required' => 'ID Lahir Harus Diisi'
  ]);
        $this->form_validation->set_rules('nokk', 'Nokk', 'required|trim',[
          'required' => 'No KK Harus Diisi'
      ]);
        $this->form_validation->set_rules('nm_ayah', 'Nm_ayah', 'required|trim',[
          'required' => 'Nama Harus Diisi'
      ]);
        $this->form_validation->set_rules('nm_ibu', 'Nm_ibu', 'required|trim',[
          'required' => 'Nama Harus Diisi'
      ]);
      $this->form_validation->set_rules('nm_anak', 'Nm_anak', 'required|trim',[
        'required' => 'Nama Harus Diisi'
    ]);
      $this->form_validation->set_rules('jk', 'Jk', 'required|trim',[
        'required' => 'Jenis Kelamin Harus Diisi'
    ]);
    $this->form_validation->set_rules('anak_ke', 'Anak_ke', 'required|trim',[
      'required' => 'Anak Ke Harus Diisi'
     ]);

     $this->form_validation->set_rules('tmpt_lah', 'Tmpt_lah', 'required|trim',[
      'required' => 'Tempat Harus Diisi'
      ]);
      $this->form_validation->set_rules('tgl_lah', 'Tgl_lah', 'required|trim',[
        'required' => 'Tanggal Harus Diisi'
    ]);
    $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim',[
      'required' => 'Tahun Harus Diisi'
    ]);
      
    
      if($this->form_validation->run() == FALSE){
        $data['judul'] = 'Halaman Tambah Data Kelahiran';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('master/add_lahir',$data);
        $this->load->view('template/footer');
      }else{
        $data = [
        'id' => $this->input->post('id'),
        'no_kk' => $this->input->post('nokk'),
        'nm_ayah' => $this->input->post('nm_ayah'),
        'nm_ibu' => $this->input->post('nm_ibu'),
        'nm_anak' => $this->input->post('nm_anak'),
        'jk' => $this->input->post('jk'),
        'anak_ke' => $this->input->post('anak_ke'),
        'tmpt_lah' => $this->input->post('tmpt_lah'),
        'tgl_lah' => $this->input->post('tgl_lah'),
        'tahun' => $this->input->post('tahun')
      ];
      $this->db->insert('tb_lahir',$data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
      redirect('kependudukan/lahir');
        }
      }

      public function hapus($id)
      {
        $this->Master_model->hapus_lahir($id);
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
        redirect('kependudukan/lahir');
      }

      public function ubah($id)
      {
         //mengambil data dari session di controller auth
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
      // $this->form_validation->set_rules('nokk', 'Nokk', 'required|trim|min_length[16]|is_unique[tb_lahir.no_kk]',[
      //       'required' => 'No. Kartu Keluarga Harus Diisi',
      //       'is_unique' => 'Maaf No. Kartu Keluarga Sudah Ada',
      //       'min_length' => 'No. Kartu Keluarga Diinput Harus 16 Digit  !'
      //   ]);

      $data['ubah'] = $this->Master_model->getUbahLah($id);

      $this->form_validation->set_rules('id', 'ID', 'required|trim',[
        'required' => 'ID Lahir Harus Diisi'
    ]);
  
     $this->form_validation->set_rules('nokk', 'Nokk', 'required|trim',[
            'required' => 'No KK Harus Diisi'
        ]);
          $this->form_validation->set_rules('nm_ayah', 'Nm_ayah', 'required|trim',[
            'required' => 'Nama Harus Diisi'
        ]);
          $this->form_validation->set_rules('nm_ibu', 'Nm_ibu', 'required|trim',[
            'required' => 'Nama Harus Diisi'
        ]);
        $this->form_validation->set_rules('nm_anak', 'Nm_anak', 'required|trim',[
          'required' => 'Nama Harus Diisi'
      ]);
        $this->form_validation->set_rules('jk', 'Jk', 'required|trim',[
          'required' => 'Jenis Kelamin Harus Diisi'
      ]);
      $this->form_validation->set_rules('anak_ke', 'Anak_ke', 'required|trim',[
        'required' => 'Anak Ke Harus Diisi'
       ]);
  
       $this->form_validation->set_rules('tmpt_lah', 'Tmpt_lah', 'required|trim',[
        'required' => 'Tempat Harus Diisi'
        ]);
        $this->form_validation->set_rules('tgl_lah', 'Tgl_lah', 'required|trim',[
          'required' => 'Tanggal Harus Diisi'
      ]);
      $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim',[
        'required' => 'Tahun Harus Diisi'
      ]);
        
      
        if($this->form_validation->run() == FALSE){
          $data['judul'] = 'Halaman Tambah Data Kelahiran';
          $this->load->view('template/header',$data);
          $this->load->view('template/sidebar',$data);
          $this->load->view('template/topbar',$data);
          $this->load->view('master/edit_lahir',$data);
          $this->load->view('template/footer');
        }else{
          $data = [
          'id' => $this->input->post('id'),
          'no_kk' => $this->input->post('nokk'),
          'nm_ayah' => $this->input->post('nm_ayah'),
          'nm_ibu' => $this->input->post('nm_ibu'),
          'nm_anak' => $this->input->post('nm_anak'),
          'jk' => $this->input->post('jk'),
          'anak_ke' => $this->input->post('anak_ke'),
          'tmpt_lah' => $this->input->post('tmpt_lah'),
          'tgl_lah' => $this->input->post('tgl_lah'),
          'tahun' => $this->input->post('tahun')
        ];
        $this->db->where('id', $this->input->post('id2'));
        $this->db->update('tb_lahir',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
        redirect('kependudukan/lahir');
         
          }
        }

        public function excel_lahir()
        {
           //mengambil data dari session di controller auth
          $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
              //memanggil model Master data
          $this->load->model('Master_model','pend');
          $data['tampil'] = $this->pend->tampil_lahir();
         
          $this->load->view('Kependudukan/excel_lahir',$data);
    
        }




}