
  <div class="container">

    <!-- Outer Row -->
    <div class="row mt-5 pt-5 justify-content-center">

      <div class="col-lg-5">
        <!-- <h4 class ="text-center mt-3 pt-4 text-gray-900">Selamat Datang di Sistem Kearsipan <br> Kelurahan Rewarangga</h4> -->
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
              <div class="d-flex justify-content-center">
              <img class="pt-5" src="<?= base_url('assets/img/ende.PNG')?>" height="200">
              </div>
                <div class="pl-5 pr-5 pt-3">
                  <div class="text-center">
                    <h5 class="text-gray-900 mb-4"><b>Sistem Informasi Kependudukan <br> Desa Detusoko Barat Kab.Ende</b></h5>
                   <!--  <marquee><p>Kelurahan Inovatif Bermutu</p></marquee> -->
                  </div>

                  <?= $this->session->flashdata('message');?>

                  <form class="user" method="post" action="<?= base_url('auth');?>">
                    <div class="form-group">
                      <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>"placeholder="Masukan Email Anda...">
                      <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password Anda...">
                      <?= form_error('password','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
        
                    <button type="submit" class="btn btn-dark btn-user btn-block">Login</button>
                  
                    
                  </form>
   
                  <div class="text-center mb-5 mt-3">
                  <a class="text-dark" href="#" data-toggle="modal" data-target="#exampleModal"><b>Visi Misi</b></a>
                    <!-- <h5 class="text-gray-900">KKN FTI Unflor 2020</h5> -->
                  </div>
                  <!-- <div class="text-center">
                    <a class="small" href="#">Visi Misi</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    </div>
  </div>

 <!-- daftar -->

 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Visi Misi Desa Detusoko Barat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="card shadow">
                            <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary text-center">Visi Desa Detusoko Barat</h6>
                            </div>
                            <div class="card-body">
                            <p style="text-align: center;"><span style="color: #000080;"><strong><em>&ldquo;Mewujutkan masyarakat Desa Desusoko Barat yang berkarakter Lokal, Berdaya Saing, Ekonomi Mandiri Berbasis Pertanian Terpadu dan Eco-wisata dengan Mengindenpenkan Teknologi dan Informasi Menuju Masyarakat yang Mandiri&nbsp; dan Berkeadilan&rdquo;</em></strong></span></p>
                            </div><br>

                    <div class="card shadow">
                        <div class="card-header">
                        <p class="m-0 font-weight-bold text-center text-primary">Misi Desa Detusoko Barat</p>
                        </div>
                        <div class="card-body col-md-12">
                        <p style="text-align: center;"><strong><em><span style="color: #003366;">Misi adalah rumusan umum mengenai upaya-upaya yang akan dilaksanakan untuk mewujudkan visi. Misi berfungsi sebagai pemersatu gerak, langkah dan tindakan nyata bagi segenap komponen penyelenggaraan pemerintahan tanpa mengabaikan mandat yang diberikan.</span></em></strong></p>
                        </div>
                    </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>
