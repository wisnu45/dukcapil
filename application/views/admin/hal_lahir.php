

       <!-- Begin Page Content -->
       <div class="container">
          <!-- Page Heading -->
         <!--  <h1 class="h3 mb-4 text-gray-800"></h1> -->

        <h4 class="text-center">Informasi Data Statistik Penduduk Desa Detusoko Barat</h4>
          <div class="row">
            <div class="col-md-12">
               <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header">
                  <h6 class="m-0 font-weight-bold text-primary">Data Statistik Angka Kelahiran Pertahun</h6>
                </div>
                <div class="card-body col-md-12">
          <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Penduduk</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    <?php foreach($lahir as $sr): ?>
                      <tr>
                          <td scope="row"><?= $no ?></td>
                          <td><?= $sr['tahun'] ?></td>
                          <td><?= $sr['total'] ?></td>
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


