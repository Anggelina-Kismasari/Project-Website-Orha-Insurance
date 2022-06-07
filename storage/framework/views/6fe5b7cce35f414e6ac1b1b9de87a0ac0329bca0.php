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
            <div class="container align-text center" style="padding-top: 50px;">
                <table>
                    <tr style="background-color: indigo;">
                        <th style="padding: 10px;">Nama Pengguna</th>
                        <th style="padding: 10px;">Email</th>
                        <th style="padding: 10px;">No Telp</th>
                        <th style="padding: 10px;">Kantor Cabang</th>
                        <th style="padding: 10px;">Tanggal</th>
                        <th style="padding: 10px;">Pesan</th>
                        <th style="padding: 10px;">Status</th>
                        <th style="padding: 10px;">Terima Pesan</th>
                    </tr>

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr style="background-color: darkslateblue;">
                        <td style="padding: 10px;"><?php echo e($appoint->name); ?></td>
                        <td style="padding: 10px;"><?php echo e($appoint->email); ?></td>
                        <td style="padding: 10px;"><?php echo e($appoint->phone); ?></td>
                        <td style="padding: 10px;"><?php echo e($appoint->kc); ?></td>
                        <td style="padding: 10px;"><?php echo e($appoint->date); ?></td>
                        <td style="padding: 10px;"><?php echo e($appoint->message); ?></td>
                        <td style="padding: 10px;"><?php echo e($appoint->status); ?></td>
                        <td ><a class="btn btn-success" href="<?php echo e(url('approved',$appoint->id)); ?>">Terima</a></td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->

    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH C:\xampp\htdocs\OrhaInsurance\resources\views/admin/showappointment.blade.php ENDPATH**/ ?>