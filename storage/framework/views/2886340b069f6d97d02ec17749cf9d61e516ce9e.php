<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Kantor Cabang Umum BPJS Kota Surabaya</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <?php $__currentLoopData = $kc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kcs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300px" src="kcimage/<?php echo e($kcs->image); ?>" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0"><?php echo e($kcs->name); ?></p>
              <span class="text-sm text-grey"><?php echo e($kcs->address); ?></span>
            </div>
          </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\OrhaInsurance\resources\views/user/kc.blade.php ENDPATH**/ ?>