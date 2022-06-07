<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Hubungi kami untuk info seputar BPJS</h1>

      <form class="main-form" action="<?php echo e(url('appointment')); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Alamat Email">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="kc" id="departement" class="custom-select">

              <option>--Pilih Kantor Cabang Umum--</option>

              <?php $__currentLoopData = $kc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kcs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <option value="<?php echo e($kcs->name); ?>"><?php echo e($kcs->name); ?></option>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="No Telp">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Masukkan Pesan"></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\OrhaInsurance\resources\views/user/appointment.blade.php ENDPATH**/ ?>