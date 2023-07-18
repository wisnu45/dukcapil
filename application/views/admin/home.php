

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
                  <h6 class="m-0 font-weight-bold text-primary">Data Statistik Jumlah Penduduk Menurut Agama</h6>
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
                    <?php foreach($tampil as $sr): ?>
                      <tr>
                          <td scope="row"><?= $no ?></td>
                          <td><?= $sr['agama'] ?></td>
                          <td><?= $sr['total'] ?></td>
                      </tr>
                  <?php $no++ ?>
                  <?php endforeach ?>


                    </tbody>
                </table>
                </div>
            </div><br>
     


          <div class="row">
            <div class="col-md-12">
               <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header">
                  <h6 class="m-0 font-weight-bold text-primary">Data Statistik Jumlah Penduduk Menurut Pekerjaan</h6>
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
                    <?php foreach($peker as $sr): ?>
                      <tr>
                          <td scope="row"><?= $no ?></td>
                          <td><?= $sr['pekerjaan'] ?></td>
                          <td><?= $sr['total'] ?></td>
                      </tr>
                  <?php $no++ ?>
                  <?php endforeach ?>

                    </tbody>
                </table>
                </div>
                </div>
              </div>
            </div><br>
           

            <div class="row">
            <div class="col-md-12">
               <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header">
                  <h6 class="m-0 font-weight-bold text-primary">Data Statistik Jumlah Penduduk Menurut Pendidikan</h6>
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
                    <?php foreach($pend as $sr): ?>
                      <tr>
                          <td scope="row"><?= $no ?></td>
                          <td><?= $sr['pend'] ?></td>
                          <td><?= $sr['total'] ?></td>
                      </tr>
                  <?php $no++ ?>
                  <?php endforeach ?>

                    </tbody>
                </table>
                </div>
                </div>
              </div>
              </div><br>

              <div class="row">
            <div class="col-md-12">
               <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header">
                  <h6 class="m-0 font-weight-bold text-primary">Data Statistik Jumlah Penduduk Menurut Jenis Kelamin</h6>
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
                    <?php foreach($jk as $sr): ?>
                      <tr>
                          <td scope="row"><?= $no ?></td>
                          <td><?= $sr['jk'] ?></td>
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
          </div>
          

</div>


