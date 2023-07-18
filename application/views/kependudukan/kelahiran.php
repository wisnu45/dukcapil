
<?php
    include "tgl.php";
?>
<style>
  td{
   font-size : 12px;
   font-weight : bold;
  }
</style>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
         <!--  <h1 class="h3 mb-4 text-gray-800"></h1> -->

          <div class="row">
            <div class="col-lg-12">

               <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                </div>
                <div class="card-body col-lg-12">

                  <!-- pesan error -->
        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

        <!-- pesan berhasil tambah data -->
        <?= $this->session->flashdata('message');?>

          <a href="<?= base_url('kependudukan/add'); ?>" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
          <a href="<?= base_url('kependudukan/excel_lahir'); ?>" class="btn btn-success btn-sm mb-3">Export Excel</a>
          <a href="<?= base_url('kependudukan/filter');?>" class="btn btn-warning btn-sm mb-3">Filter Data</a>

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Lahir</th>
                            <th scope="col">No.KK</th>
                            <th scope="col">Nama Ayah</th>
                            <th scope="col">Nama Ibu</th>
                            <th scope="col">Nama Anak</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Anak Ke</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tgl Lahir</th>
                            <th scope="col">Thn Lahir</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    <?php foreach($tampil as $sm): ?>
                      <tr>
                          <td scope="row"><?= $no ?></td>
                          <td><?= $sm['id'] ?></td>
                          <td><?= $sm['no_kk'] ?></td>
                          <td><?= $sm['nm_ayah'] ?></td>
                          <td><?= $sm['nm_ibu'] ?></td>
                          <td><?= $sm['nm_anak'] ?></td>
                          <td><?= $sm['jk'] ?></td>
                          <td><?= $sm['anak_ke'] ?></td>
                          <td><?= $sm['tmpt_lah'] ?></td>
                          <td><?= tgl_indo($sm['tgl_lah']) ?></td>
                          <td><?= $sm['tahun'] ?></td>
                          <td>
                              <!-- <a href="<?= base_url();?>master/detpen/<?= $sm['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-edit"></i></a> -->
                              <a href="<?= base_url();?>kependudukan/ubah/<?= $sm['id'] ?>" class="btn btn-success btn-sm"><i class="fas fa-fw fa-edit"></i></a>
                              <a href="<?= base_url();?>kependudukan/hapus/<?= $sm['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau menghapus');"><i class="fas fa-fw fa-trash"></i></a>
                          </td>
                      </tr>
                  <?php $no++ ?>
                  <?php endforeach ?>

                    </tbody>
                </table>
               
                </div>
              </div>

            </div>

        
            </div>
          </div>

</div>



