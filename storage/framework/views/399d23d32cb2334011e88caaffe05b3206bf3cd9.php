<?php $__env->startSection('banner'); ?>
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Gallery
                    </h1>
                    <p class="text-white link-nav">
                        <a href="index.html">Home </a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="gallery.html"> Gallery</a></p>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="gallery-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <a href="<?php echo e(asset('frontends/img/gallery/g1.jpg')); ?>" class="img-gal">
                        <div class="single-imgs relative">
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">
                                <img class="img-fluid" src="<?php echo e(asset('frontends/img/gallery/g1.jpg')); ?>" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-5">
                    <a href="<?php echo e(asset('frontends/img/gallery/g2.jpg')); ?>" class="img-gal">
                        <div class="single-imgs relative">
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">
                                <img class="img-fluid" src="<?php echo e(asset('frontends/img/gallery/g2.jpg')); ?>" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo e(asset('frontends/img/gallery/g3.jpg')); ?>" class="img-gal">
                        <div class="single-imgs relative">
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">
                                <img class="img-fluid" src="<?php echo e(asset('frontends/img/gallery/g3.jpg')); ?>" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo e(asset('frontends/img/gallery/g4.jpg')); ?>" class="img-gal">
                        <div class="single-imgs relative">
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">
                                <img class="img-fluid" src="<?php echo e(asset('frontends/img/gallery/g4.jpg')); ?>" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo e(asset('frontends/img/gallery/g5.jpg')); ?>" class="img-gal">
                        <div class="single-imgs relative">
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">
                                <img class="img-fluid" src="<?php echo e(asset('frontends/img/gallery/g5.jpg')); ?>" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-5">
                    <a href="<?php echo e(asset('frontends/img/gallery/g6.jpg')); ?>" class="img-gal">
                        <div class="single-imgs relative">
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">
                                <img class="img-fluid" src="<?php echo e(asset('frontends/img/gallery/g6.jpg')); ?>" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-7">
                    <a href="<?php echo e(asset('frontends/img/gallery/g7.jpg')); ?>" class="img-gal">
                        <div class="single-imgs relative">
                            <div class="overlay overlay-bg"></div>
                            <div class="relative">
                                <img class="img-fluid" src="<?php echo e(asset('frontends/img/gallery/g7.jpg')); ?>" alt="" />
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-two-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 cta-left">
                    <h1>Not Yet Satisfied with our Trend?</h1>
                </div>
                <div class="col-lg-4 cta-right">
                    <a class="primary-btn wh" href="#">view our blog</a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\du-an-tot-nghiep\du-an-tot-nghiep\resources\views/frontend/gallery/index.blade.php ENDPATH**/ ?>