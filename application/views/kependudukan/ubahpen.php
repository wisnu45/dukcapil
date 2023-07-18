 <!-- Begin Page Content -->
 <div class="container-fluid">
 <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                </div>
                <div class="card-body col-lg-12">

            <!-- konfirmasi -->
          <div class="row">
            <div class="col-md-12">
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>

                <div class="row">
                    <div class="col-lg-12">
                        <form action="<?= base_url();?>kependudukan/ubahpen/<?= $ubah['id'] ?>" method="post">

                        <input type="hidden" class="form-control" name="id" value="<?= $ubah['id'] ?>">

                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="<?= $ubah['nama'] ?>" readonly>
                            <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                    <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" class="form-control" name="nik" value="<?= $ubah['nik'] ?>" readonly>
                            <?= form_error('nik','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    

                    <!-- <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk"  class="js-example-basic-single" readonly>
                            <option value=""></option>
                            <option value="Laki-Laki" <?php if($ubah['jk']=='Laki-Laki'){echo "selected";} ?>>Laki-Laki</option>
                            <option value="Perempuan" <?php if($ubah['jk']=='Perempuan'){echo "selected";} ?>>Perempuan</option>
                        </select>
                        <?= form_error('jk','<small class="text-danger pl-3">', '</small>'); ?>
                    </div> -->

                    <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status"  class="js-example-basic-single">
                            <option value=""></option>
                            <option value="Hidup" <?php if($ubah['status']=='Hidup'){echo "selected";} ?>>Hidup</option>
                            <option value="Mati" <?php if($ubah['status']=='Mati'){echo "selected";} ?>>Mati</option>
                            <option value="Pindah" <?php if($ubah['status']=='Pindah'){echo "selected";} ?>>Pindah</option>
                        </select>
                        <?= form_error('status','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    
                        <div class="form-group">
                            <label for="tgl">Tanggal Pindah Atau Meninggal</label>
                            <input type="date" class="form-control" name="tgl" value="<?= $ubah['tgl'] ?>">
                            <?= form_error('tgl','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>              

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
                
        

            </div>
      <!-- End of Main Content -->
      </div>
    </div>
</div>