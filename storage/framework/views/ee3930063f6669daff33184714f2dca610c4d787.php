<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">

                </div>
                <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                    <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+953 012 3654
                896</span></a>
                    <a href="https://colorlib.com/cdn-cgi/l/email-protection#75060005051a070135161a191a07191c175b161a18">
                        <span class="lnr lnr-envelope"></span> <span class="text">
                            <span class="__cf_email__"
                                  data-cfemail="fd8e888d8d928f89bd9e9291928f91949fd39e9290">[email&#160;protected]
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="<?php echo e(route('get.home.page')); ?>"><img src="<?php echo e(asset('frontends/img/logo.png')); ?>" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="<?php echo e(route('get.home.page')); ?>">Trang chủ</a></li>
                    <li><a href="<?php echo e(route('get.about.page')); ?>">Giới thiệu</a></li>
                    <li class="menu-has-children">
                        <a href="<?php echo e(route('get.course.page')); ?>">Khóa học</a>
                        <ul>
                            <li><a href="course-details.html">Course Details</a></li>
                            <li><a href="event-details.html">Event Details</a></li>
                            <li><a href="elements.html">Elements</a></li>
                            <li class="menu-has-children">
                                <a href="#">Level 2 </a>
                                <ul>
                                    <li><a href="#">Item One</a></li>
                                    <li><a href="#">Item Two</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo e(route('get.blog.page')); ?>">Tin tức</a></li>
                    <li><a href="<?php echo e(route('get.contact.page')); ?>">Liên Hệ</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\du-an-tot-nghiep\du-an-tot-nghiep\resources\views/frontend/layout/_share/header.blade.php ENDPATH**/ ?>