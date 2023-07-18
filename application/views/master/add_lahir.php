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
                        <form action="<?= base_url('kependudukan/add') ?>" method="post">

                        <div class="form-group">
                            <label for="nokk">ID Lahir</label>
                            <input type="text" class="form-control" name="id">
                            <?= form_error('id','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nokk">No.Kartu Keluarga</label>
                            <input type="text" class="form-control" name="nokk">
                            <?= form_error('nokk','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nm_ayah">Nama Ayah</label>
                            <input type="text" class="form-control" name="nm_ayah">
                            <?= form_error('nm_ayah','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nm_ibu">Nama Ibu</label>
                            <input type="text" class="form-control" name="nm_ibu">
                            <?= form_error('nm_ibu','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nm_anak">Nama Anak</label>
                            <input type="text" class="form-control" name="nm_anak">
                            <?= form_error('nm_anak','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                    <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                        <select name="jk"  class="js-example-basic-single">
                            <option value=""></option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jk','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                            <label for="anak_ke">Anak Ke</label>
                            <input type="text" class="form-control" name="anak_ke">
                            <?= form_error('anak_ke','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="tmpt_lah">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tmpt_lah">
                            <?= form_error('tmpt_lah','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lah">
                            <?= form_error('tgl_lah','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="tahun">Tahun Lahir</label>
                            <input type="number" class="form-control" name="tahun">
                            <?= form_error('tahun','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                      

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>

                        

                    </div>
                </div>
                
        

            </div>
      <!-- End of Main Content -->
      </div>
    </div>
</div>