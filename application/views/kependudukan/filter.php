<!-- Begin Page Content -->
<div class="container-fluid">
              <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Filter Data Kelahiran Per-Tahun</h6>
                </div>
                <div class="card-body col-lg-12">
         <div class="row">
         	<div class="col-lg-12">
         		 <!-- <form action="" method="post"> -->

              <?php echo form_open_multipart('kependudukan/item_tahun') ?>
              <div class="form-group row">
                    <label for="nokk" class="col-sm-2 col-form-label">Input Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tahun" required>  
                        <?= form_error('tahun','<small class="text-danger pl-3">', '</small>'); ?>
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
      </div>  

      <!-- End of Main Content -->

</div>