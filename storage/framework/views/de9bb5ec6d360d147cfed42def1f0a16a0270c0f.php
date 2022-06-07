<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

      <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <style type="text/css">
          label
          {
              display: inline-block;
              width: 200px;
          }
      </style>
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- partial -->

      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- partial -->
       
        <div class="container-fluid page-body-wrapper">
            <div class="container text-center" style="padding-top: 100px;">

             <?php if(session()->has('message')): ?>
             <div class="alert alert-success">
                <button type="button" class="close" data-bs-dismiss="alert">
                    x
                </button>
                <?php echo e(session()->get('message')); ?>

             </div>
             <?php endif; ?>

                <form action="<?php echo e(url('upload_kc')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div style="padding: 15px;">
                        <label>Nama Kantor Cabang</label>
                        <input type="text" style="color:black" name="name" placeholder="Masukkan nama KC" required="">
                    </div>

                    <div style="padding: 15px;">
                        <label>No Telp</label>
                        <input type="number" style="color:black" name="number" placeholder="Masukkan no telp" required="">
                    </div>

                    <div style="padding: 15px;">
                        <label>Daerah</label>
                        <select name="region" style="color:black" style="width: 200px;" required="">
                            <option>-Pilih Daerah Cabang-</option>
                            <option value="Surabaya Utara">Surabaya Utara</option>
                            <option value="Surabaya Selatan">Surabaya Selatan</option>
                            <option value="Surabaya Barat">Surabaya Barat</option>
                            <option value="Surabaya Timur">Surabaya Timur</option>
                            <option value="Surabaya Pusat">Surabaya Pusat</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <label>Alamat</label>
                        <input type="text" style="color:black" name="address" placeholder="Masukkan alamat" required="">
                    </div>

                    <div style="padding: 15px;">
                        <label>Gambar Kantor</label>
                        <input type="file" name="file" required="">
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->

    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\xampp\htdocs\OrhaInsurance\resources\views/admin/add_kc.blade.php ENDPATH**/ ?>