<!doctype html>
<html lang="fa">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/animate.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/meanmenu.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/boxicons.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/flaticon.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/owl.carousel.min.css">
    <!-- Owl Carousel Default CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/magnific-popup.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/nice-select.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/slick.min.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/odometer.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/responsive.css">
    <!-- RTL CSS -->
    <link rel="stylesheet" href="/Frontend/assets/css/rtl.css">
    
    <link rel="stylesheet" href="/Frontend/css/style_front.css">

    
    <link href="/Admin/css/all.min.css" rel="stylesheet" type="text/css"/>
<?php echo $__env->yieldContent('style'); ?>

    <title>BM موتور</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" type="image/png" href="/Frontend/assets/img/favicon.png">
</head>

<body>

<!-- Start Preloader Area -->
<div class="preloader">
    <div class="loader">
        <div class="sbl-half-circle-spin">
            <div></div>
        </div>
    </div>
</div>
<!-- End Preloader Area -->


<!-- Start Middle Header Area -->
<div class="middle-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="middle-header-logo">
                    <a href="<?php echo e(route('/')); ?>">
                        <img src="Frontend/image/logo.png" width="100" alt="image">
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="middle-header-search">
                    <form>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select>
                                        <option>همه دسته بندی ها</option>
                                        <option value="1">لوازم مصرفی</option>
                                        <option value="2">جلوبندی و تعلیق</option>
                                        <option value="2"> روغن موتور و ضد یخ</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="search-box">
                                    <input type="text" class="form-control" placeholder="جستجوی کالا ...">
                                    <button type="submit"><i class='bx bx-search'></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-3">
                <ul class="middle-header-optional">
                    <li><a href="<?php echo e('wishlist'); ?>"><i class="flaticon-heart"></i></a></li>
                    <li>
                        <a href="<?php echo e(route('cart')); ?>"><i class="flaticon-shopping-cart"></i><span>2</span></a>
                    </li>
                    <li>275,000 تومان</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Middle Header Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="/frontend/image/logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="navbar-category">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class='bx bx-menu'></i>
                                    همه دسته بندی ها
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('products')); ?>" class="nav-link">
                                            لوازم مصرفی
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="<?php echo e(route('products')); ?>" class="nav-link">
                                            جلوبندی و تعلیق
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="<?php echo e(route('products')); ?>" class="nav-link">
                                            روغن موتور و ضد یخ
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a href="<?php echo e(route('/')); ?>" class="nav-link active">خانه </a>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                لوازم یدکی
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('products')); ?>" class="nav-link">لنت ترمز</a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo e(route('products')); ?>" class="nav-link">کمک فنر</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        منو
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">منو 1</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link"> منو 2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                اکسسوری خودرو
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('products')); ?>" class="nav-link">کف پوش خودرو</a>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo e(route('products')); ?>" class="nav-link">واکس و پولیش </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(route('news')); ?>" class="nav-link">اخبار</a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(route('contactUs')); ?>" class="nav-link">تماس با ما</a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(route('aboutUs')); ?>" class="nav-link"> درباره ما</a>
                        </li>
                    </ul>


                </div>
                <div class="">
                    <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
                        <div class="dropdown">
                            <button class="btn bg-white" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-user ml-2"></i> پنل کاربری
                            </button>
                            <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><i class="far fa-sticky-note ml-2"></i>سفارش های
                                    من</a>
                                <a class="dropdown-item" href="<?php echo e(route('my_Profile.index')); ?>"><i class="fas fa-chalkboard-teacher ml-2"></i>پروفایل
                                    من</a>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                        class="fas fa-sign-out-alt ml-2"></i> خروج از حساب
                                    کاربری</a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                      style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </div>

                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="p-3"><i class="far fa-user ml-2"></i>حساب کاربری</a>
                    <?php endif; ?>


                </div>

            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <i class='bx bxs-lock-alt'></i>
                    
                    
                    
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <div class="">
                                <a href="" class="p-3"> <i class='bx bxs-lock-alt'></i>حساب کاربری</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->


<?php echo $__env->yieldContent('content'); ?>












































































































































































































































































































































































































































































































































































































































































































































































































































<!-- Start Footer Area -->
<section class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h2>تماس بگیرید</h2>

                    <ul class="footer-contact-info">
                        <li>
                            <span>آدرس:</span>
                            <a href="#" target="_blank">ایران ، استان تهران ، میدان آزادی ، خیابان 9 شرقی</a>
                        </li>
                        <li>
                            <span>تلفن:</span>
                            <a href="tel:+15143214567">12345678-021</a>
                        </li>
                        <li>
                            <span>ایمیل:</span>
                            <a href="mailto:hello@ejon.com">hello@ejon.com</a>
                        </li>
                    </ul>
                    <ul class="footer-social">
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h2>خط مشی</h2>

                    <ul class="quick-links">
                        <li>
                            <a href="#">حمل و نقل و تحویل</a>
                        </li>
                        <li>
                            <a href="#">روش پرداخت</a>
                        </li>
                        <li>
                            <a href="#">نحوه خرید</a>
                        </li>
                        <li>
                            <a href="#">شرایط و ضوابط</a>
                        </li>
                        <li>
                            <a href="#">حریم خصوصی</a>
                        </li>
                        <li>
                            <a href="#">بازگشت وجه</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h2>پشتیبانی</h2>

                    <ul class="quick-links">
                        <li>
                            <a href="#">حساب کاربری</a>
                        </li>
                        <li>
                            <a href="#">پیگیری سفارش</a>
                        </li>
                        <li>
                            <a href="#">تماس با ما</a>
                        </li>
                        <li>
                            <a href="#">خدمات مشتری</a>
                        </li>
                        <li>
                            <a href="#">سوالات متداول</a>
                        </li>
                        <li>
                            <a href="#">میز خدمت</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h2>به خبرنامه ما بپیوندید</h2>

                    <div class="newsletter-item">
                        <div class="newsletter-content">
                            <p>برای آخرین به روزرسانی ها در خبرنامه مشترک شوید</p>
                        </div>

                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="input-newsletter" placeholder="آدرس ایمیل" name="EMAIL" required
                                   autocomplete="off">

                            <button type="submit">مشترک شدن</button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copyright-area">
    <div class="container">
        <div class="copyright-area-content">
            <p>کپی رایت © 1399. تمام حقوق قالب محفوظ است. </p>
        </div>
    </div>
</div>
<!-- End Copy Right Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bx-up-arrow-alt'></i>
</div>
<!-- End Go Top Area -->

















































































































<!-- Jquery Slim JS -->
<script src="/Frontend/assets/js/jquery.min.js"></script>
<!-- Popper JS -->
<script src="/Frontend/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="/Frontend/assets/js/bootstrap.min.js"></script>
<!-- Meanmenu JS -->
<script src="/Frontend/assets/js/jquery.meanmenu.js"></script>
<!-- Owl Carousel JS -->
<script src="/Frontend/assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JS -->
<script src="/Frontend/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Nice Select JS -->
<script src="/Frontend/assets/js/jquery.nice-select.min.js"></script>
<!-- Slick JS -->
<script src="/Frontend/assets/js/slick.min.js"></script>
<!-- Odometer JS -->
<script src="/Frontend/assets/js/odometer.min.js"></script>
<!-- Appear JS -->
<script src="/Frontend/assets/js/jquery.appear.js"></script>
<!-- Jquery Ui JS -->
<script src="/Frontend/assets/js/jquery-ui.min.js"></script>
<!-- Ajaxchimp JS -->
<script src="/Frontend/assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator JS -->
<script src="/Frontend/assets/js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="/Frontend/assets/js/contact-form-script.js"></script>
<!-- Wow JS -->
<script src="/Frontend/assets/js/wow.min.js"></script>
<!-- Custom JS -->
<script src="/Frontend/assets/js/main.js"></script>

<script src="/Admin/js/all.min.js"></script>
<?php echo $__env->yieldContent('script'); ?>

</body>
</html>
<?php /**PATH C:\store_spare\resources\views/Frontend/Layout/index.blade.php ENDPATH**/ ?>