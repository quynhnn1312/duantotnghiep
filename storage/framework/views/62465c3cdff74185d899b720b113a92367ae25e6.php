<?php $__env->startSection('banner'); ?>
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Giới thiệu
                    </h1>
                    <p class="text-white link-nav">
                        <a href="<?php echo e(route('get.home.page')); ?>">Trang chủ </a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="<?php echo e(route('get.about.page')); ?>"> Giới thiệu</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="info-area pt-120 pb-120">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="<?php echo e(asset('frontends/img/about-img.jpg')); ?>" alt="" />
                </div>
                <div class="col-lg-6 info-area-right">
                    <h1>Who we are to Serave the nation</h1>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
                        especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond
                        reproach.
                    </p>
                    <br />
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
                        especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond
                        reproach. inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                        standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is
                        beyond reproach.
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\du-an-tot-nghiep\du-an-tot-nghiep\resources\views/frontend/about/index.blade.php ENDPATH**/ ?>