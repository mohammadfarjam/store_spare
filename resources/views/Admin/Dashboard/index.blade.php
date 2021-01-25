@extends('Admin.Layout.index')
@section('style')
    <link href="/Admin/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="/Admin/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <p class="f20 m-5"> داشبورد</p>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 mb-3">
                <div class="card">
                    <img src="/Admin/user_image/user.png" alt="" class="avatar card-user">

                    <div class="card-description">
                        <h3 class="c_white">کاربران جدید</h3>
                        <p class="c_white f13">165</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 mb-3">
                <div class="card">
                    <img src="/Admin/user_image/money.png" alt="" class="avatar card-user">

                    <div class="card-description" >
                        <h3 class="c_white">فروش امروز</h3>
                        <p class="c_white f13">5,850,000 تومان</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 mb-3">
                <div class="card">
                    <img src="/Admin/user_image/tachometer.png" alt="" class="avatar card-user">

                    <div class="card-description" >
                        <h3 class="c_white">تعداد فروش روزانه</h3>
                        <p class="c_white f13"> 350 </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


<div class="row">

    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing mt-5">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">درآمد</h5>
                <ul class="tabs tab-pills">
                    <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">ماهانه</a></li>
                </ul>
            </div>

            <div class="widget-content">
                <div class="tabs tab-content">
                    <div id="content_1" class="tabcontent">
                        <div id="revenueMonthly"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing mt-5">
        <div class="widget widget-chart-two">
            <div class="widget-heading">
                <h5 class="">فروش بر اساس دسته بندی</h5>
            </div>
            <div class="widget-content">
                <div id="chart-2" class=""></div>
            </div>
        </div>
    </div>
</div>





    <div class="row mt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <p class="f13 m-3 p-0">سفارشات اخیر</p>
            <div class="table-responsive pt-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 p-0">
                <table class="table table-bordered table-striped mb-4">
                    <thead>
                    <tr class="text-center">
                        <th>ردیف</th>
                        <th>شناسه محصول</th>
                        <th>نام محصول</th>
                        <th>نام کاربر</th>
                        <th>تاریخ خرید</th>
                        <th>قیمت (تومان)</th>
                        <th> تعداد</th>
                        <th>قیمت نهایی</th>
                        <th>وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr class="text-center">
                        <td>1</td>
                        <td>BS1234</td>
                        <td>چراغ جلو خودرو گازار مدل JT123</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user3.jpg">
                                </div>
                                <p class="align-self-center mb-0">مینا</p>
                            </div>
                        </td>
                        <td>10/08/2020</td>
                        <td>200,000 تومان</td>
                        <td>3</td>
                        <td>600,000 تومان</td>
                        <td>در حال پردازش</td>
                    </tr>
                    <tr class="text-center">
                        <td>2</td>
                        <td>BS9632</td>
                        <td> کمک فنر خودرو</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user1.png">
                                </div>
                                <p class="align-self-center mb-0">مونا</p>
                            </div>
                        </td>
                        <td>1399/10/15</td>
                        <td>250,000 تومان</td>
                        <td>2</td>
                        <td>500,000 تومان</td>
                        <td>در حال پردازش</td>
                    </tr>
                    <tr class="text-center">
                        <td>3</td>
                        <td>BS9874</td>
                        <td>صفحه کلاچ والئو</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user4.jpg">
                                </div>
                                <p class="align-self-center mb-0">حمید</p>
                            </div>
                        </td>
                        <td>1399/10/21</td>
                        <td>900,000 تومان</td>
                        <td>1</td>
                        <td>900,000 تومان</td>
                        <td>ارسال شده</td>
                    </tr>
                    <tr class="text-center">
                        <td>4</td>
                        <td>BS1458</td>
                        <td>لنت ترمز</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user2.jpg">
                                </div>
                                <p class="align-self-center mb-0">محمد</p>
                            </div>
                        </td>
                        <td>1399/09/11</td>
                        <td>982,000 تومان</td>
                        <td>1</td>
                        <td>982,000 تومان</td>
                        <td>ارسال شده</td>
                    </tr>
                    <tr class="text-center">
                        <td>5</td>
                        <td>BS1234</td>
                        <td>چراغ جلو خودرو گازار مدل JT123</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user3.jpg">
                                </div>
                                <p class="align-self-center mb-0">رها</p>
                            </div>
                        </td>
                        <td>10/08/2020</td>
                        <td>450,000 تومان</td>
                        <td>1</td>
                        <td>450,000 تومان</td>
                        <td>در حال پردازش</td>
                    </tr>
                    <tr class="text-center">
                        <td>6</td>
                        <td>BS9632</td>
                        <td> کمک فنر خودرو</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user2.jpg">
                                </div>
                                <p class="align-self-center mb-0">رضا</p>
                            </div>
                        </td>
                        <td>1399/10/15</td>
                        <td>350,000 تومان</td>
                        <td>1</td>
                        <td>350,000 تومان</td>
                        <td>ارسال شده</td>
                    </tr>
                    <tr class="text-center">

                        <td>7</td>
                        <td>BS9874</td>
                        <td>صفحه کلاچ والئو</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user4.jpg">
                                </div>
                                <p class="align-self-center mb-0">اکبر</p>
                            </div>
                        </td>
                        <td>1399/10/21</td>
                        <td>780,000 تومان</td>
                        <td>2</td>
                        <td>1,560,000 تومان</td>
                        <td>ارسال شده</td>
                    </tr>
                    <tr class="text-center">
                        <td>8</td>
                        <td>BS1458</td>
                        <td>لنت ترمز</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user1.png">
                                </div>
                                <p class="align-self-center mb-0">مونا</p>
                            </div>
                        </td>
                        <td>1399/09/11</td>
                        <td>145,000 تومان</td>
                        <td>1</td>
                        <td>145,000 تومان</td>
                        <td>ارسال شده</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            {{--        table-responsive--}}
        </div>
        {{-- col-lg-12 col-md-12 col-sm-12--}}


        <div class="col-lg-12 col-md-12 col-sm-12 ">

            <p class="f13 m-3 p-0">کاربران جدید</p>

            <div class="table-responsive pt-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 p-0">
                <table class="table table-bordered table-striped mb-4">
                    <thead>
                    <tr class="text-center">
                        <th>ردیف</th>
                        <th>نام کاربر</th>
                        <th>نقش کاربر</th>
                        <th>تاریخ آخرین ورود</th>
                        <th>تعداد نظرات</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr class="text-center">
                        <td>1</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user1.png">
                                </div>
                                <p class="align-self-center mb-0">مونا</p>
                            </div>
                        </td>
                        <td>کاربر عادی</td>
                        <td>1399/12/12</td>
                        <td>120</td>
                    </tr>

                    <tr class="text-center">
                        <td>2</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user2.jpg">
                                </div>
                                <p class="align-self-center mb-0">رضا</p>
                            </div>
                        </td>
                        <td>کاربر عادی</td>
                        <td>1399/12/12</td>
                        <td>32</td>
                    </tr>
                    <tr class="text-center">
                        <td>3</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user4.jpg">
                                </div>
                                <p class="align-self-center mb-0">پویا</p>
                            </div>
                        </td>
                        <td>کاربر عادی</td>
                        <td>1399/02/02</td>
                        <td>0</td>
                    </tr>
                    <tr class="text-center">
                        <td>4</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user2.jpg">
                                </div>
                                <p class="align-self-center mb-0">امیر</p>
                            </div>
                        </td>
                        <td>کاربر عادی</td>
                        <td>1399/10/14</td>
                        <td>5</td>
                    </tr>
                    <tr class="text-center">
                        <td>5</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user1.png">
                                </div>
                                <p class="align-self-center mb-0">ریحانه</p>
                            </div>
                        </td>
                        <td>کاربر عادی</td>
                        <td>1399/11/04</td>
                        <td>74</td>
                    </tr>
                    <tr class="text-center">
                        <td>6</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user3.jpg">
                                </div>
                                <p class="align-self-center mb-0">فاطمه</p>
                            </div>
                        </td>
                        <td>کاربر عادی</td>
                        <td>1399/12/12</td>
                        <td>120</td>
                    </tr>
                    <tr class="text-center">
                        <td>7</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user4.jpg">
                                </div>
                                <p class="align-self-center mb-0">علی</p>
                            </div>
                        </td>
                        <td>کاربر عادی</td>
                        <td>1399/12/12</td>
                        <td>120</td>
                    </tr>
                    <tr class="text-center">
                        <td>8</td>
                        <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle"
                                         src="/Admin/user_image/user1.png">
                                </div>
                                <p class="align-self-center mb-0">نگار</p>
                            </div>
                        </td>
                        <td>کاربر عادی</td>
                        <td>1399/10/10</td>
                        <td>1</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            {{--        table-responsive--}}
        </div>
        {{--  col-lg-12 col-md-12 col-sm-12--}}

    </div>
    {{--row--}}

    <p class="f13 m-3 p-0"> آخرین نظرات</p>
    <div class="table-responsive">
        <table class="table table-bordered table-striped mb-4">
            <thead>
            <tr class="text-center">
                <th>ردیف</th>
                <th>نام کاربر</th>
                <th>ایمیل کاربر</th>
                <th> متن نظر</th>
                <th> محصول</th>
                <th>تاریخ نظر دهی</th>
                <th>وضعیت</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <td>1</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user1.png">
                        </div>
                        <p class="align-self-center mb-0">الناز</p>
                    </div>
                </td>
                <td>test@gmail.com</td>
                <td>واقعا محصول خوبی بود من که ازش راضیم...</td>
                <td>دیسک و صفحه والئو</td>
                <td>1399/12/12</td>
                <td class="text-center"><span class="badge badge-success">تایید شده</span></td>
            </tr>
            <tr class="text-center">
                <td>2</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user2.jpg">
                        </div>
                        <p class="align-self-center mb-0">محمد</p>
                    </div>
                </td>
                <td>test@gmail.com</td>
                <td>این محصول خیلی بی کیفیت بود</td>
                <td>باتری اتمی خودرو صبا</td>
                <td>1399/05/07</td>
                <td class="text-center"><span class="badge badge-warning"> در انتظار تایید</span></td>
            </tr>
            <tr class="text-center">
                <td>3</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user3.jpg">
                        </div>
                        <p class="align-self-center mb-0">مونا</p>
                    </div>
                </td>
                <td>test@gmail.com</td>
                <td>واقعا محصول خوبی بود من که ازش راضیم...</td>
                <td>چراغ جلو خودرو گازار مدل JT123</td>
                <td>1399/12/12</td>
                <td class="text-center"><span class="badge badge-warning"> در انتظار تایید</span></td>
            </tr>
            <tr class="text-center">
                <td>4</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user4.jpg">
                        </div>
                        <p class="align-self-center mb-0">محمد</p>
                    </div>
                </td>
                <td>test@gmail.com</td>
                <td>این محصول خیلی بی کیفیت بود</td>
                <td>باتری اتمی خودرو صبا</td>
                <td>1399/05/07</td>
                <td class="text-center"><span class="badge badge-success">تایید شده</span></td>
            </tr>
            <tr class="text-center">
                <td>5</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/img/man-user.png">
                        </div>
                        <p class="align-self-center mb-0">حمید</p>
                    </div>
                </td>
                <td>test@gmail.com</td>
                <td>واقعا محصول خوبی بود من که ازش راضیم...</td>
                <td>دیسک و صفحه والئو</td>
                <td>1399/12/12</td>
                <td class="text-center"><span class="badge badge-success">تایید شده</span></td>
            </tr>
            <tr class="text-center">
                <td>6</td>
                <td>
                    <div class="d-flex">
                        <div class="usr-img-frame mr-2 rounded-circle">
                            <img alt="avatar" class="img-fluid rounded-circle" src="/Admin/user_image/user1.png">
                        </div>
                        <p class="align-self-center mb-0">نگار</p>
                    </div>
                </td>
                <td>test@gmail.com</td>
                <td>این محصول خیلی بی کیفیت بود</td>
                <td>چراغ جلو خودرو گازار مدل JT123</td>
                <td>1399/05/07</td>
                <td class="text-center"><span class="badge badge-success">تایید شده</span></td>
            </tr>

            </tbody>
        </table>
    </div>

@endsection

@section('script')

    <script src="/Admin/plugins/apex/apexcharts.min.js"></script>
    <script src="/Admin/assets/js/dashboard/dash_1.js"></script>
@endsection
