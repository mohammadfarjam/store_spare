<!doctype html>
<html lang="fa">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="HTML5,CSS3,HTML,Template,multi-page,Ejon - Electronics eCommerce HTML Template">
    <meta name="description" content="Ejon - Electronics eCommerce HTML Template">
    <meta name="author" content="Barat Hadian">

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
    {{--    custom style frontend--}}
    <link rel="stylesheet" href="/Frontend/css/style_front.css">

    <title>BM موتور</title>

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
                    <a href="{{route('/')}}">
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
                    <li><a href="{{'wishlist'}}"><i class="flaticon-heart"></i></a></li>
                    <li>
                        <a href="{{route('cart')}}"><i class="flaticon-shopping-cart"></i><span>2</span></a>
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
                                        <a href="{{route('products')}}" class="nav-link">
                                            لوازم مصرفی
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('products')}}" class="nav-link">
                                            جلوبندی و تعلیق
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('products')}}" class="nav-link">
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
                            <a href="{{route('/')}}" class="nav-link active">خانه </a>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                لوازم یدکی
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('products')}}" class="nav-link">لنت ترمز</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('products')}}" class="nav-link">کمک فنر</a>
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
                                    <a href="{{route('products')}}" class="nav-link">کف پوش خودرو</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('products')}}" class="nav-link">واکس و پولیش </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('news')}}" class="nav-link">اخبار</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('contact')}}" class="nav-link">تماس با ما</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('aboutUs')}}" class="nav-link"> درباره ما</a>
                        </li>
                    </ul>


                </div>
                <i class='bx bxs-lock-alt'></i>
                <span><a href="{{route('Login')}}">ورود</a> یا <a
                        href="{{route('Register')}}">ثبت نام</a></span>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <i class='bx bxs-lock-alt'></i>
                    {{--                    <div class="circle circle-one"></div>--}}
                    {{--                    <div class="circle circle-two"></div>--}}
                    {{--                    <div class="circle circle-three"></div>--}}
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                                    <span>
                                        <i class='bx bxs-lock-alt'></i>
                        <span><a href="{{route('Login')}}">ورود</a> یا <a
                                href="{{route('Register')}}">ثبت نام</a></span>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->



<!-- Start Page Banner -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>محصولات</h2>
        </div>
    </div>
</div>
<!-- End Page Banner -->

<!-- Start Shop Area -->
<section class="shop-area bg-ffffff pt-50 pb-50">
    <div class="container">
        <div class="products-filter-options">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-9">
                    <p>نمایش 1 - 18 از 100</p>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="products-ordering-list">
                        <select>
                            <option>بر اساس قیمت: گران به ارزان</option>
                            <option>مرتب سازی پیش فرض</option>
                            <option>بر اساس محبوبیت</option>
                            <option>بر اساس میزان امتیاز</option>
                            <option>بر اساس آخرین ها</option>
                            <option>بر اساس قیمت: ارزان به گران</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-shop-products">
                    <div class="shop-products-image">
                        <a href="products-details.html">
                            <img src="frontend/image/tasme.jpg" alt="image" class="custom_size_img"></a>
                        <div class="tag">جدید</div>
                        <ul class="shop-action">
                            <li>
                                <a href="#">
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-heart"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="shop-products-content">
                        <h3>
                            <a href="{{'product.detail'}}">محصول اول</a>
                        </h3>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                        <span>150,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-shop-products">
                    <div class="shop-products-image">
                        <a href="products-details.html">
                            <img src="frontend/image/battry.jpg" alt="image" class="custom_size_img"></a>
                        <div class="tag">جدید</div>
                        <ul class="shop-action">
                            <li>
                                <a href="#">
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-heart"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="shop-products-content">
                        <h3>
                            <a href="{{'product.detail'}}">محصول دوم</a>
                        </h3>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                        <span>150,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-shop-products">
                    <div class="shop-products-image">
                        <a href="products-details.html">
                            <img src="frontend/image/lent.jpg" alt="image" class="custom_size_img"></a>
                        <div class="tag">جدید</div>
                        <ul class="shop-action">
                            <li>
                                <a href="#">
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-heart"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="shop-products-content">
                        <h3>
                            <a href="{{'product.detail'}}">محصول سوم</a>
                        </h3>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                        <span>150,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-shop-products">
                    <div class="shop-products-image">
                        <a href="products-details.html">
                            <img src="frontend/image/sham.jpg" alt="image" class="custom_size_img"></a>
                        <div class="tag">جدید</div>
                        <ul class="shop-action">
                            <li>
                                <a href="#">
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-heart"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="shop-products-content">
                        <h3>
                            <a href="{{'product.detail'}}">محصول چهارم</a>
                        </h3>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                        <span>150,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-shop-products">
                    <div class="shop-products-image">
                        <a href="products-details.html">
                            <img src="frontend/image/battry.jpg" alt="image" class="custom_size_img"></a>
                        <div class="tag">جدید</div>
                        <ul class="shop-action">
                            <li>
                                <a href="#">
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-heart"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="shop-products-content">
                        <h3>
                            <a href="{{'product.detail'}}">محصول پنجم</a>
                        </h3>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                        <span>150,000 تومان</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-shop-products">
                    <div class="shop-products-image">
                        <a href="products-details.html">
                            <img src="frontend/image/lent.jpg" alt="image" class="custom_size_img"></a>
                        <div class="tag">جدید</div>
                        <ul class="shop-action">
                            <li>
                                <a href="#">
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="flaticon-heart"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#productsQuickView"><i class="flaticon-view"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="shop-products-content">
                        <h3>
                            <a href="{{'product.detail'}}">محصول ششم</a>
                        </h3>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                        <span>150,000 تومان</span>
                    </div>
                </div>
            </div>



            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="#" class="prev page-numbers">
                        <i class='flaticon-right-arrow'></i>
                    </a>
                    <a href="#" class="page-numbers current">1</a>
                    <span class="page-numbers " aria-current="page">2</span>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="page-numbers">4</a>
                    <a href="#" class="next page-numbers">
                        <i class='flaticon-left-arrow'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Area -->

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

<!-- Start QuickView Modal Area -->
<div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i></span>
            </button>

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="products-details-image">
                        <ul class="products-details-image-slides">
                            <li><img src="" alt="image"></li>
                            <li><img src="" alt="image"></li>
                            <li><img src="" alt="image"></li>
                        </ul>

                        <div class="slick-thumbs">
                            <ul>
                                <li><img src="" alt="image"></li>
                                <li><img src="" alt="image"></li>
                                <li><img src="" alt="image"></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="product-content">
                        <h3>هدفون بلوتوث</h3>

                        <div class="product-review">
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>

                        <div class="price">
                            <span class="old-price">150000 تومان</span>
                            <span class="new-price">75000 تومان</span>
                        </div>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم
                            ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم
                            ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>

                        <ul class="products-info">
                            <li><span>موجودی:</span> <a href="#">در انبار</a></li>
                            <li><span>تعداد:</span> <a href="#">L458-25</a></li>
                        </ul>

                        <div class="products-color-switch">
                            <p class="available-color"><span>رنگ</span> :
                                <a href="#" style="background: #a53c43;"></a>
                                <a href="#" style="background: #192861;"></a>
                                <a href="#" style="background: #c58a84;"></a>
                                <a href="#" style="background: #ecc305;"></a>
                                <a href="#" style="background: #000000;"></a>
                                <a href="#" style="background: #808080;"></a>
                            </p>
                        </div>

                        <div class="product-quantities">
                            <span>مقادیر:</span>

                            <div class="input-counter">
                                        <span class="minus-btn">
                                            <i class='bx bx-minus'></i>
                                        </span>
                                <input type="text" value="1">
                                <span class="plus-btn">
                                            <i class='bx bx-plus'></i>
                                        </span>
                            </div>
                        </div>

                        <div class="product-add-to-cart">
                            <button type="submit" class="default-btn">
                                <i class="flaticon-shopping-cart"></i>
                                افزودن سبد خرید
                                <span></span>
                            </button>
                        </div>

                        <div class="products-share">
                            <ul class="social">
                                <li><span>اشتراک گذاری:</span></li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End QuickView Modal Area -->

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


</body>
</html>
