<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

      <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     
      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- partial -->

      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- partial -->
       
        <div class="container-fluid page-body-wrapper">
            <div class="container align-text center" style="padding: 100px;">
                <table>
                    <tr style="background-color: crimson;">
                        <th style="padding: 10px;">Nama Kantor Cabang</th>
                        <th style="padding: 10px;">No Telp</th>
                        <th style="padding: 10px;">Daerah</th>
                        <th style="padding: 10px;">Alamat</th>
                        <th style="padding: 10px;">Gambar</th>
                        <th style="padding: 10px;">Delete</th>
                    </tr>

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr style="background-color: salmon;">
                        <td style="padding: 10px;"><?php echo e($kc->name); ?></td>
                        <td style="padding: 10px;"><?php echo e($kc->phone); ?></td>
                        <td style="padding: 10px;"><?php echo e($kc->region); ?></td>
                        <td style="padding: 10px;"><?php echo e($kc->address); ?></td>
                        <td><img height="50" width="50" src="kcimage/<?php echo e($kc->image); ?>"></td>
                        <td ><a class="btn btn-danger" href="<?php echo e(url('deletekc',$kc->id)); ?>">Hapus</a></td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>

    <!-- container-scroller -->
    <!-- plugins:js -->

    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\xampp\htdocs\OrhaInsurance\resources\views/admin/showkc.blade.php ENDPATH**/ ?>