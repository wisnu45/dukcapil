<!-- Begin Page Content -->
<div class="container-fluid">
              <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Filter Data Penduduk Menurut Agama</h6>
                </div>
                <div class="card-body col-lg-12">
         <div class="row">
         	<div class="col-lg-12">
         		 <!-- <form action="" method="post"> -->

              <?php echo form_open_multipart('master/item_agama') ?>
              <div class="form-group row">
                    <label for="nokk" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <select name="agama" class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <option value="Katolik">Katolik</option>
                                <option value="Kristen/Protestan">Kristen/Protestan</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                        </select>
                        <?= form_error('kec','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-primary btn-sm">Filter</button>
                            </div>
                         </div>
         		
             <?php echo form_close() ?>
             
         	</div>
         </div>       
      </div>
</div><br>

      <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Filter Data Penduduk Menurut Pekerjaan</h6>
                </div>
                <div class="card-body col-lg-12">
         <div class="row">
         	<div class="col-lg-12">
         		 <!-- <form action="" method="post"> -->

              <?php echo form_open_multipart('master/item_kerja') ?>

              <div class="form-group row">
                    <label for="nokk" class="col-sm-2 col-form-label">Pekerjan</label>
                    <div class="col-sm-10">
                        <select name="kerja" class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <?php foreach($kerja as $m): ?>
                                <option value="<?= $m['pekerjaan'] ?>"><?= $m['pekerjaan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kel','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-primary btn-sm">Filter</button>
                            </div>
                         </div>
         		
             <?php echo form_close() ?>
             
         	</div>
         </div>       
      </div>
      </div><br>

      <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Filter Data Penduduk Menurut Tingkat Pendidikan</h6>
                </div>
                <div class="card-body col-lg-12">
         <div class="row">
         	<div class="col-lg-12">
         		 <!-- <form action="" method="post"> -->

              <?php echo form_open_multipart('master/item_tingkat') ?>

              <div class="form-group row">
                    <label for="nokk" class="col-sm-2 col-form-label">Tingkat Pendidikan</label>
                    <div class="col-sm-10">
                        <select name="tingkat" class="js-example-basic-single">
                            <option value="">Pilih</option>
                            <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Sarjana(S1)">Sarjana(S1)</option>
                                <option value="Magister(S2)">Magister(S2)</option>
                                <option value="Doktor(S3)">Doktor(S3)</option>
                                <option value="Profesor">Profesor</option>
                        </select>
                        <?= form_error('sen','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-primary btn-sm">Filter</button>
                            </div>
                         </div>
         		
             <?php echo form_close() ?>
             
         	</div>
         </div>       
      </div>

       </div>       
      </div>  

      <!-- End of Main Content -->

</div>