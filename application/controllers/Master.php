<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model arsipMasuk
      $this->load->model('Master_model');
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model Master data
      $this->load->model('Master_model','kartu');
      $data['tampil'] = $this->kartu->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Kartu Keluarga';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('master/index',$data);
      $this->load->view('template/footer');
    }


    public function cetakartu()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       //memanggil model Master data
      $this->load->model('Master_model','kartu');
      $data['tampil'] = $this->kartu->tampil();
      
    //  var_dump($data['tampil']);die;
      $this->load->view('master/cetakartu',$data);
    }

     public function cetakpend()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model Master data
      $this->load->model('Master_model','pend');
      $data['tampil'] = $this->pend->tampilpen();
      
    //  var_dump($data['tampil']);die;
      $this->load->view('master/cetakpend',$data);
    }

public function tambah()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      
 $this->form_validation->set_rules('nokk', 'Nokk', 'required|trim|min_length[16]|is_unique[kartukel.no_kk]',[
      'required' => 'No. Kartu Keluarga Harus Diisi',
      'is_unique' => 'Maaf No. Kartu Keluarga Sudah Ada',
      'min_length' => 'No. Kartu Keluarga Diinput Harus 16 Digit  !'
  ]);

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Harus Diisi'
  ]);

  $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',[
    'required' => 'Alamat Harus Diisi'
  ]);
  $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required|trim',[
        'required' => 'Kelurahan Harus Diisi'
  ]);
  $this->form_validation->set_rules('rtrw', 'rtrw', 'required|trim',[
    'required' => 'Kelurahan Harus Diisi'
]);
  
 
  if($this->form_validation->run() == FALSE){
    $data['judul'] = 'Halaman Tambah Data Kartu Keluarga';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('master/tambahkk',$data);
    $this->load->view('template/footer');
  }else{
    $data = [
    'no_kk' => $this->input->post('nokk'),
    'nama_kk' => $this->input->post('nama'),
    'alamat' => $this->input->post('alamat'),
    'kelurahan' => $this->input->post('kelurahan'),
    'rt/rw' => $this->input->post('rtrw')
  ];
   $this->db->insert('kartukel',$data);
   $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
   redirect('master');
    }
  }

  public function ubahkartu($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['ubah'] = $this->Master_model->getUbah($id);

    $this->form_validation->set_rules('nokk', 'Nokk', 'required|trim|min_length[16]',[
      'required' => 'No. Kartu Keluarga Harus Diisi',
      // 'is_unique' => 'Maaf No. Kartu Keluarga Sudah Ada',
      'min_length' => 'No. Kartu Keluarga Diinput Harus 16 Digit  !'
  ]);

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Harus Diisi'
  ]);

  $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',[
    'required' => 'Alamat Harus Diisi'
  ]);
  $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required|trim',[
        'required' => 'Kelurahan Harus Diisi'
  ]);
  $this->form_validation->set_rules('rtrw', 'rtrw', 'required|trim',[
    'required' => 'Kelurahan Harus Diisi'
]);

  if($this->form_validation->run()==false){
      $data['judul'] = 'Halaman Edit Data Kartu Keluarga';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('master/ubahkartu',$data);
      $this->load->view('template/footer');
    }else{
      $data = [
        'no_kk' => $this->input->post('nokk'),
        'nama_kk' => $this->input->post('nama'),
        'alamat' => $this->input->post('alamat'),
        'kelurahan' => $this->input->post('kelurahan'),
        'rt/rw' => $this->input->post('rtrw')
      ];     
      $this->db->where('id', $this->input->post('id'));
      $this->db->update('kartukel', $data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiUbah</div>');
      redirect('master');
    }

  } 

  public function hapuskk($id)
  {
    $this->Master_model->hapuskk($id);
    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
    redirect('master');
  }

  //bagian pegawai
  public function pegawai()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model Master data
      $this->load->model('Master_model','pegawai');
      $data['tampil'] = $this->pegawai->tampilpeg();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Pegawai Desa';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('Master/pegawai',$data);
      $this->load->view('template/footer');
    }

 public function tambahpeg()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      
 $this->form_validation->set_rules('nip', 'Nip', 'required|trim|is_unique[pegawai.nip]',[
      'required' => 'No. Nip Harus Diisi',
      'is_unique' => 'Maaf No. Nip Sudah Ada'
  ]);

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Harus Diisi'
  ]);

  $this->form_validation->set_rules('jk', 'Jk', 'required|trim',[
    'required' => 'Jenis Kelamin Harus Diisi'
  ]);

  $this->form_validation->set_rules('golongan', 'Golongan', 'required|trim',[
    'required' => 'Golongan Harus Diisi'
  ]);

  $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim',[
        'required' => 'Jabatan Harus Diisi'
  ]);
//   $this->form_validation->set_rules('rtw', 'RTW', 'required|trim',[
//     'required' => 'RT/RW Harus Diisi'
// ]);
  
 
  if($this->form_validation->run() == FALSE){
    $data['judul'] = 'Halaman Tambah Data Pejabat';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('master/tambahpeg',$data);
    $this->load->view('template/footer');
  }else{
    $data = [
    'nama' => $this->input->post('nama'),
    'nip' => $this->input->post('nip'),
    'jk' => $this->input->post('jk'),
    'golongan' => $this->input->post('golongan'),
    'jabatan' => $this->input->post('jabatan'),
  ];
   $this->db->insert('pegawai',$data);
   $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
   redirect('master/pegawai');
    }
  }

  public function ubahpeg($id)
  {
    //mengambil data dari session di controller auth
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['ubah'] = $this->Master_model->getUbahPeg($id);
      
    $this->form_validation->set_rules('nip', 'Nip', 'required|trim',[
         'required' => 'No. Nip Harus Diisi',
     ]);
   
       $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
         'required' => 'Nama Harus Diisi'
     ]);
   
     $this->form_validation->set_rules('jk', 'Jk', 'required|trim',[
       'required' => 'Jenis Kelamin Harus Diisi'
     ]);

     $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim',[
      'required' => 'Jabatan Harus Diisi'
    ]);

     $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim',[
           'required' => 'Jabatan Harus Diisi'
     ]);
     
    
     if($this->form_validation->run() == FALSE){
       $data['judul'] = 'Halaman Edit Data Pejabat';
       $this->load->view('template/header',$data);
       $this->load->view('template/sidebar',$data);
       $this->load->view('template/topbar',$data);
       $this->load->view('master/ubahpeg',$data);
       $this->load->view('template/footer');
     }else{
       $data = [
       'nama' => $this->input->post('nama'),
       'nip' => $this->input->post('nip'),
       'jk' => $this->input->post('jk'),
       'golongan' => $this->input->post('golongan'),
       'jabatan' => $this->input->post('jabatan')
     ];
      $this->db->where('id', $this->input->post('id'));
      $this->db->update('pegawai',$data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
      redirect('master/pegawai');
       }
  }

  public function hapuspeg($id)
  {
    $this->Master_model->hapuspeg($id);
    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
    redirect('master/pegawai');
  }

     public function excel_peg()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       //memanggil model Master data
       $this->load->model('Master_model','pegawai');
       $data['tampil'] = $this->pegawai->tampilpeg();
     
      $this->load->view('master/excel_peg',$data);

    }

  //Bagian penduduk
  public function penduduk()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model Master data
      $this->load->model('Master_model','pend');
      $data['tampil'] = $this->pend->tampilpen();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Penduduk';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('master/penduduk',$data);
      $this->load->view('template/footer');
    }

    public function filterpend()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model Master data
      $data['kerja'] = $this->db->get('tb_kerja')->result_array();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Penduduk';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('master/filterpend',$data);
      $this->load->view('template/footer');
    }

    public function item_agama()
    {
      //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $agama = $this->input->post('agama');

      $data['tampil'] = $this->db->get_where('penduduk',['agama'=>$agama, 'status'=>'Hidup'])->result_array();
      
    //  var_dump($data['tampil']);die;
    $data['judul'] = 'Halaman Data Penduduk Menurut Agama';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('master/pend_agama',$data);
    $this->load->view('template/footer');
    }

    public function item_kerja()
    {
      //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $kerja = $this->input->post('kerja');

      $data['tampil'] = $this->db->get_where('penduduk',['pekerjaan'=>$kerja, 'status'=>'Hidup'])->result_array();
      
    //  var_dump($data['tampil']);die;
    $data['judul'] = 'Halaman Data Penduduk Menurut Pekerjaan';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('master/pend_kerja',$data);
    $this->load->view('template/footer');
    }

    public function item_tingkat()
    {
      //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $tingkat = $this->input->post('tingkat');

      $data['tampil'] = $this->db->get_where('penduduk',['pend'=>$tingkat, 'status'=>'Hidup'])->result_array();
      
    //  var_dump($data['tampil']);die;
    $data['judul'] = 'Halaman Data Penduduk Menurut Tingkat Pendidikan';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('master/pend_tingkat',$data);
    $this->load->view('template/footer');
    }

public function tambahpen()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['tampil'] = $this->db->get('kartukel')->result_array();

      $data['kerja'] = $this->db->get('tb_kerja')->result_array();

      $data['rtw'] = $this->db->get('tb_rtw')->result_array();
      
 $this->form_validation->set_rules('nik', 'Nik', 'required|trim|is_unique[penduduk.nik]',[
      'required' => 'No. Nik Harus Diisi',
      'is_unique' => 'Maaf No. Nik Sudah Ada'
  ]);

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Harus Diisi'
  ]);

  $this->form_validation->set_rules('jk', 'Jk', 'required|trim',[
    'required' => 'Jenis Kelamin Harus Diisi'
  ]);
  $this->form_validation->set_rules('nokk', 'Nokk', 'required|trim',[
        'required' => 'No. KK Harus Diisi'
  ]);
  $this->form_validation->set_rules('tmplahir', 'Tmplahir', 'required|trim',[
    'required' => 'Tempat Lahir Harus Diisi'
]);
$this->form_validation->set_rules('tgl', 'Tgl', 'required|trim',[
  'required' => 'Tanggal Lahir Harus Diisi'
]);
$this->form_validation->set_rules('agama', 'Agama', 'required|trim',[
  'required' => 'Agama Harus Diisi'
]);
$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required|trim',[
  'required' => 'Pendidikan Harus Diisi'
]);
$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim',[
  'required' => 'Pekerjaan Harus Diisi'
]);
$this->form_validation->set_rules('rtw', 'RTW', 'required|trim',[
  'required' => 'Pekerjaan Harus Diisi'
]);
  
$tanggal = date('d-m-Y');
 
  if($this->form_validation->run() == FALSE){
    $data['judul'] = 'Halaman Tambah Data Penduduk';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('master/tambahpen',$data);
    $this->load->view('template/footer');
  }else{
    $data = [
      'nama' => $this->input->post('nama'),
      'no_kk' => $this->input->post('nokk'),
      'nik' => $this->input->post('nik'),
      'jk' => $this->input->post('jk'),
      'tempatla' => $this->input->post('tmplahir'),
      'tglah' => $this->input->post('tgl'),
      'agama' => $this->input->post('agama'),
      'pend' => $this->input->post('pendidikan'),
      'pekerjaan' => $this->input->post('pekerjaan'),
      'rtw' => $this->input->post('rtw'),
      'status' =>'Hidup',
      'tgl' =>$tanggal
  ];
   $this->db->insert('penduduk',$data);
   $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
   redirect('master/penduduk');
    }
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

$this->form_validation->set_rules('jk', 'Jk', 'required|trim',[
'required' => 'Jenis Kelamin Harus Diisi'
]);
$this->form_validation->set_rules('nokk', 'Nokk', 'required|trim',[
    'required' => 'No. KK Harus Diisi'
]);
$this->form_validation->set_rules('tmplahir', 'Tmplahir', 'required|trim',[
'required' => 'Tempat Lahir Harus Diisi'
]);
$this->form_validation->set_rules('tgl', 'Tgl', 'required|trim',[
'required' => 'Tanggal Lahir Harus Diisi'
]);
$this->form_validation->set_rules('agama', 'Agama', 'required|trim',[
'required' => 'Agama Harus Diisi'
]);
$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required|trim',[
'required' => 'Pendidikan Harus Diisi'
]);
$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim',[
'required' => 'Pekerjaan Harus Diisi'
]);
$this->form_validation->set_rules('rtw', 'RTW', 'required|trim',[
  'required' => 'Pekerjaan Harus Diisi'
]);

$tanggal = date('d-m-Y');

if($this->form_validation->run() == FALSE){
$data['judul'] = 'Halaman Edit Data Penduduk';
$this->load->view('template/header',$data);
$this->load->view('template/sidebar',$data);
$this->load->view('template/topbar',$data);
$this->load->view('master/ubahpen',$data);
$this->load->view('template/footer');
}else{
$data = [
  'nama' => $this->input->post('nama'),
  'no_kk' => $this->input->post('nokk'),
  'nik' => $this->input->post('nik'),
  'jk' => $this->input->post('jk'),
  'tempatla' => $this->input->post('tmplahir'),
  'tglah' => $this->input->post('tgl'),
  'agama' => $this->input->post('agama'),
  'pend' => $this->input->post('pendidikan'),
  'pekerjaan' => $this->input->post('pekerjaan'),
  'rtw' => $this->input->post('rtw'),
  'status' =>'Hidup',
  'tgl' =>$tanggal
];
$this->db->where('id', $this->input->post('id'));
$this->db->update('penduduk',$data);
$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiUbah</div>');
redirect('master/penduduk');
}
}

public function detpen($id)
{
   //mengambil data dari session di controller auth
  $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

  $data['ubah'] = $this->db->get('kartukel')->result_array();
 
  $data['sm'] = $this->Master_model->getUbahPen($id);

  // var_dump($data['sm']);die;

$data['judul'] = 'Halaman Detail Data Penduduk';
$this->load->view('template/header',$data);
$this->load->view('template/sidebar',$data);
$this->load->view('template/topbar',$data);
$this->load->view('master/detpen',$data);
$this->load->view('template/footer');
}

    public function excel_pen()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       //memanggil model Master data
       $this->load->model('Master_model','pend');
       $data['tampil'] = $this->pend->tampilpen();
     
      $this->load->view('master/excel_pen',$data);

    }


public function hapuspen($id)
{
    $this->Master_model->hapuspen($id);
    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
    redirect('master/penduduk');
}

//function pekerjaan

public function kerja()
{
   //mengambil data dari session di controller auth
   $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

   //memanggil model Master data
   $this->load->model('Master_model','kartu');
   $data['tampil'] = $this->kartu->ker_tam();
   
 //  var_dump($data['tampil']);die;
   $data['judul'] = 'Halaman Data Pekerjaan';
   $this->load->view('template/header',$data);
   $this->load->view('template/sidebar',$data);
   $this->load->view('template/topbar',$data);
   $this->load->view('master/kerja',$data);
   $this->load->view('template/footer');
}

public function add_ker()
{
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      
   $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Harus Diisi'
  ]);
   
  if($this->form_validation->run() == FALSE){
    $data['judul'] = 'Halaman Tambah Data Pekerjaan';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('master/add_ker',$data);
    $this->load->view('template/footer');
  }else{
    $data = [
    'pekerjaan' => $this->input->post('nama')
  ];
   $this->db->insert('tb_kerja',$data);
   $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
   redirect('master/kerja');
    }
  }

  public function hapus_ker($id)
  {
    $this->Master_model->hapus_ker($id);
    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
    redirect('master/kerja');
  }


  public function ubah_ker($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['ubah'] = $this->Master_model->getUbah_ker($id);

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
      'required' => 'Nama Harus Diisi'
  ]);


  if($this->form_validation->run()==false){
      $data['judul'] = 'Halaman Edit Data Pekerjaan';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('master/ubah_ker',$data);
      $this->load->view('template/footer');
    }else{
      $data = [
        'pekerjaan' => $this->input->post('nama')
      ];     
      $this->db->where('id', $this->input->post('id'));
      $this->db->update('tb_kerja', $data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiUbah</div>');
      redirect('master/kerja');
    }

  } 

  public function expor_ker()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Master_model','kartu');
      $data['tampil'] = $this->kartu->ker_tam();
     
      $this->load->view('master/cet_excel',$data);

    }


    //function rt/rw
  public function rtw()
  {
    //mengambil data dari session di controller auth
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //memanggil model Master data
    $this->load->model('Master_model','kartu');
    $data['tampil'] = $this->kartu->rt_tam();
    
  //  var_dump($data['tampil']);die;
    $data['judul'] = 'Halaman Data RT/RW Desa Detusoko Barat';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('master/tampil_rt',$data);
    $this->load->view('template/footer');
  }


  public function add_rtw()
  {
        //mengambil data dari session di controller auth
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
    $this->form_validation->set_rules('rtw', 'Rtw', 'required|trim',[
        'required' => 'Nama Harus Diisi'
    ]);
    
    if($this->form_validation->run() == FALSE){
      $data['judul'] = 'Halaman Tambah Data RT/RW';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('master/add_rtw',$data);
      $this->load->view('template/footer');
    }else{
      $data = [
      'rtw' => $this->input->post('rtw')
    ];
    $this->db->insert('tb_rtw',$data);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Diinput</div>');
    redirect('master/rtw');
      }
    }

    public function hapus_rtw($id)
    {
      $this->Master_model->hapus_rtw($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('master/rtw');
    }

    public function ubah_rtw($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
  
      $data['ubah'] = $this->Master_model->getUbah_rtw($id);
  
      $this->form_validation->set_rules('rtw', 'Rtw', 'required|trim',[
        'required' => 'Nama Harus Diisi'
    ]);
  
  
    if($this->form_validation->run()==false){
        $data['judul'] = 'Halaman Edit Data RT/RW';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('master/ubah_rtw',$data);
        $this->load->view('template/footer');
      }else{
        $data = [
          'rtw' => $this->input->post('rtw')
        ];     
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_rtw', $data);
          $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiUbah</div>');
        redirect('master/rtw');
      }
  
    } 

    public function expor_rtw()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Master_model','kartu');
      $data['tampil'] = $this->kartu->rt_tam();
     
      $this->load->view('master/rtw_excel',$data);

    }

    public function domisili(){
      redirect('layanan/listdom');
    }

}