
@include('layout.header')
@yield('content')
<!-- slider and search-->
<section class="slider-search">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://a-static.besthdwallpaper.com/binh-minh-dep-hinh-nen-1920x600-2720_57.jpg"
                     alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img src="https://a-static.besthdwallpaper.com/binh-minh-dep-hinh-nen-1920x600-2720_57.jpg"
                     alt="Chicago">
            </div>
            <div class="carousel-item">
                <img src="https://a-static.besthdwallpaper.com/binh-minh-dep-hinh-nen-1920x600-2720_57.jpg"
                     alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
    <div class="search-box">

        <!-- search-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrap-search">
                        <form>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <select class="form-control height-40 no-border-radius-right"
                                                id="exampleFormControlSelect1">
                                            <option> Loại nhà đất</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control height-40" id="basic-url"
                                           aria-describedby="basic-addon3">
                                </div>

                            </div>
                            <div class="form-row align-items-center">
                                <div class="col-sm-3 my-1">
                                    <select class="form-control height-42">
                                        <option> Loại nhà đất</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <select class="form-control height-42">
                                        <option> Loại nhà đất</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <select class="form-control height-42">
                                        <option> Loại nhà đất</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <select class="form-control height-42">
                                        <option> Loại nhà đất</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-row align-items-center margin-top-10">
                                <div class="my-1 col-3">
                                    <label class="containers">Bán
                                        <input type="radio" checked="checked" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="my-1 col-3">
                                    <label class="containers">Bán
                                        <input type="radio" checked="checked" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="my-1 col-3">
                                    <label class="containers">Bán
                                        <input type="radio" checked="checked" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="my-1 col-3">
                                    <label class="containers">Bán
                                        <input type="radio" checked="checked" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-row align-items-center more-condition">

                                <div class="col-sm-3 my-1">
                                    <select class="form-control height-42">
                                        <option> Loại nhà đất</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <select class="form-control height-42">
                                        <option> Loại nhà đất</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <select class="form-control height-42">
                                        <option> Loại nhà đất</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <select class="form-control height-42">
                                        <option> Loại nhà đất</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row align-items-center">
                                <div class="more">
                                        <span> <img
                                                    src="image/185747982_974136676738844_9159219558999053062_n.png"> </span><span>xem thêm</span>
                                </div>
                            </div>
                            <div class="form-row align-items-center">
                                <div class="more-less">
                                        <span> <img
                                                    src="image/185286024_781840099138498_2734609752307312220_n.png"> </span><span>Thu gọn</span>
                                </div>
                            </div>
                            <div class="form-row align-items-center text-center ">
                                <div class="w-100 margin-top-20">
                                    <button class="btn btn-success">tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end search-->
    </div>
</section>
<!--end slider and search-->
<!-- news-->
<section class="news-hot">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 ">
                <div class="tab-news">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="news-hot-tab" data-toggle="tab" href="#newshot" role="tab"
                               aria-controls="home" aria-selected="true">Tin nổi bật</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="news-hot" data-toggle="tab" href="#new" role="tab"
                               aria-controls="profile" aria-selected="false">tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="advisory-tab" data-toggle="tab" href="#advisory" role="tab"
                               aria-controls="contact" aria-selected="false">tư vấn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="feng-shui-tab" data-toggle="tab" href="#feng-shui" role="tab"
                               aria-controls="contact" aria-selected="false">phong thủy</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="newshot" role="tabpanel" aria-labelledby="home-tab">
                            <div id="slider-newshot" class="carousel slide" data-ride="carousel">
                                <ul class="carousel-indicators">
                                    <li data-target="#slider-newshot" data-slide-to="0" class="active"></li>
                                    <li data-target="#slider-newshot" data-slide-to="1"></li>
                                    <li data-target="#slider-newshot" data-slide-to="2"></li>
                                </ul>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://duhocglolink.com/wp-content/uploads/2019/07/1-23.jpg"
                                             alt="Los Angeles" width="1100" height="500">
                                        <div class="carousel-caption">
                                            <h3>Los Angeles</h3>
                                            <p>We had such a great time in LA!</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://duhocglolink.com/wp-content/uploads/2019/07/1-23.jpg"
                                             alt="Chicago" width="1100" height="500">
                                        <div class="carousel-caption">
                                            <h3>Chicago</h3>
                                            <p>Thank you, Chicago!</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://duhocglolink.com/wp-content/uploads/2019/07/1-23.jpg"
                                             alt="New York" width="1100" height="500">
                                        <div class="carousel-caption">
                                            <h3>New York</h3>
                                            <p>We love the Big Apple!</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#slider-newshot" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#slider-newshot" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="profile-tab">
                            <div id="slider-news" class="carousel slide" data-ride="carousel">
                                <ul class="carousel-indicators">
                                    <li data-target="#slider-news" data-slide-to="0" class="active"></li>
                                    <li data-target="#slider-news" data-slide-to="1"></li>
                                    <li data-target="#slider-news" data-slide-to="2"></li>
                                </ul>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="image/tải%20xuống.jpg" alt="Los Angeles" width="1100" height="500">
                                        <div class="carousel-caption">
                                            <h3>Los Angeles</h3>
                                            <p>We had such a great time in LA!</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="image/tải%20xuống.jpg" alt="Chicago" width="1100" height="500">
                                        <div class="carousel-caption">
                                            <h3>Chicago</h3>
                                            <p>Thank you, Chicago!</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="image/tải%20xuống.jpg" alt="New York" width="1100" height="500">
                                        <div class="carousel-caption">
                                            <h3>New York</h3>
                                            <p>We love the Big Apple!</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#slider-news" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#slider-news" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="advisory" role="tabpanel" aria-labelledby="contact-tab">
                            <div id="slider-advisory" class="carousel slide" data-ride="carousel">
                                <ul class="carousel-indicators">
                                    <li data-target="#slider-advisory" data-slide-to="0" class="active"></li>
                                    <li data-target="#slider-advisory" data-slide-to="1"></li>
                                    <li data-target="#slider-advisory" data-slide-to="2"></li>
                                </ul>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="image/tải%20xuống%20(3).jpg" alt="Los Angeles" width="1100"
                                             height="500">
                                        <div class="carousel-caption">
                                            <h3>Los Angeles</h3>
                                            <p>We had such a great time in LA!</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="image/tải%20xuống%20(3).jpg" alt="Chicago" width="1100" height="500">
                                        <div class="carousel-caption">
                                            <h3>Chicago</h3>
                                            <p>Thank you, Chicago!</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="image/tải%20xuống%20(3).jpg" alt="New York" width="1100" height="500">
                                        <div class="carousel-caption">
                                            <h3>New York</h3>
                                            <p>We love the Big Apple!</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#slider-advisory" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#slider-advisory" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="feng-shui" role="tabpanel" aria-labelledby="contact-tab">
                            <div id="slider-feng-shui" class="carousel slide" data-ride="carousel">
                                <ul class="carousel-indicators">
                                    <li data-target="#slider-feng-shui" data-slide-to="0" class="active"></li>
                                    <li data-target="#slider-feng-shui" data-slide-to="1"></li>
                                    <li data-target="#slider-feng-shui" data-slide-to="2"></li>
                                </ul>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="image/tải%20xuống.jpg" alt="Los Angeles" width="1100" height="500">
                                        <div class="carousel-caption">
                                            <h3>Los Angeles</h3>
                                            <p>We had such a great time in LA!</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="image/tải%20xuống.jpg" alt="Chicago" width="1100" height="500">
                                        <div class="carousel-caption">
                                            <h3>Chicago</h3>
                                            <p>Thank you, Chicago!</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="image/tải%20xuống.jpg" alt="New York" width="1100" height="500">
                                        <div class="carousel-caption">
                                            <h3>New York</h3>
                                            <p>We love the Big Apple!</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#slider-feng-shui" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#slider-feng-shui" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                <div class="ads">
                    <a href="#">
                        <img src="image/kynang.png">
                    </a>
                </div>

                <div class="ads">
                    <a href="#">
                        <img src="image/kynang.png">
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!--end news-->

<!-- profuct-for-you-->
<section class="product-box">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-box">
                    <h2>Bất động sản dành cho bạn</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="content-product">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                            <div class="items-product">
                                <a href="#">
                                    <div class="image-product">
                                        <img src="image/cc1.jpg">
                                    </div>
                                    <div class="home-product">
                                        <div class="title-item-product">
                                            <h3>Mở bán chung cư mini Mai Dịch - Hồ Tùng Mậu giá từ 590 triệu/căn, full
                                                nội
                                                thất, vào ở luôn
                                                590 triệu·30 m²Cầu Giấy, Hà Nội</h3>
                                        </div>
                                        <div class="price-m2">
                                            <span class="price"> 570 triệu</span>
                                            <span class=""> |</span>
                                            <span class="m2"> 50m2</span>
                                        </div>
                                        <div class="address-product">
                                            <a> Cầu Giấy, Hà Nội</a>
                                        </div>
                                        <div class="time-product">
                                            <span>2 ngày trước</span>
                                            <i class="fal fa-heart"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                            <div class="items-product">
                                <a href="#">
                                    <div class="image-product">
                                        <img src="image/cc1.jpg">
                                    </div>
                                    <div class="home-product">
                                        <div class="title-item-product">
                                            <h3>Mở bán chung cư mini Mai Dịch - Hồ Tùng Mậu giá từ 590 triệu/căn, full
                                                nội
                                                thất, vào ở luôn
                                                590 triệu·30 m²Cầu Giấy, Hà Nội</h3>
                                        </div>
                                        <div class="price-m2">
                                            <span class="price"> 570 triệu</span>
                                            <span class=""> |</span>
                                            <span class="m2"> 50m2</span>
                                        </div>
                                        <div class="address-product">
                                            <a> Cầu Giấy, Hà Nội</a>
                                        </div>
                                        <div class="time-product">
                                            <span>2 ngày trước</span>
                                            <i class="fal fa-heart"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                            <div class="items-product">
                                <a href="#">
                                    <div class="image-product">
                                        <img src="image/cc1.jpg">
                                    </div>
                                    <div class="home-product">
                                        <div class="title-item-product">
                                            <h3>Mở bán chung cư mini Mai Dịch - Hồ Tùng Mậu giá từ 590 triệu/căn, full
                                                nội
                                                thất, vào ở luôn
                                                590 triệu·30 m²Cầu Giấy, Hà Nội</h3>
                                        </div>
                                        <div class="price-m2">
                                            <span class="price"> 570 triệu</span>
                                            <span class=""> |</span>
                                            <span class="m2"> 50m2</span>
                                        </div>
                                        <div class="address-product">
                                            <a> Cầu Giấy, Hà Nội</a>
                                        </div>
                                        <div class="time-product">
                                            <span>2 ngày trước</span>
                                            <i class="fal fa-heart"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                            <div class="items-product">
                                <a href="#">
                                    <div class="image-product">
                                        <img src="image/cc1.jpg">
                                    </div>
                                    <div class="home-product">
                                        <div class="title-item-product">
                                            <h3>Mở bán chung cư mini Mai Dịch - Hồ Tùng Mậu giá từ 590 triệu/căn, full
                                                nội
                                                thất, vào ở luôn
                                                590 triệu·30 m²Cầu Giấy, Hà Nội</h3>
                                        </div>
                                        <div class="price-m2">
                                            <span class="price"> 570 triệu</span>
                                            <span class=""> |</span>
                                            <span class="m2"> 50m2</span>
                                        </div>
                                        <div class="address-product">
                                            <a> Cầu Giấy, Hà Nội</a>
                                        </div>
                                        <div class="time-product">
                                            <span>2 ngày trước</span>
                                            <i class="fal fa-heart"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="extend-product">
        <button class="btn btn-success">xem thêm</button>
    </div>
</section>
<!-- end profuct-for-you-->

<!-- Real estate by location-->
<section class="real-estate">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-box">
                    <h2>Bất động sản theo địa điểm</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                        <div class="plane-big">
                            <div id="real-estate-right" class="carousel slide" data-ride="carousel">
                                <ul class="carousel-indicators">
                                    <li data-target="#real-estate-right" data-slide-to="0" class="active"></li>
                                    <li data-target="#real-estate-right" data-slide-to="1"></li>
                                    <li data-target="#real-estate-right" data-slide-to="2"></li>
                                </ul>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="image/hcm.jpg" alt="Los Angeles" width="1100" height="410">
                                        <div class="carousel-caption">
                                            <h3>Los Angeles</h3>
                                            <p>We had such a great time in LA!</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="image/hcm.jpg" alt="Chicago" width="1100" height="410">
                                        <div class="carousel-caption">
                                            <h3>Chicago</h3>
                                            <p>Thank you, Chicago!</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="image/hcm.jpg" alt="New York" width="1100" height="410">
                                        <div class="carousel-caption">
                                            <h3>New York</h3>
                                            <p>We love the Big Apple!</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#real-estate-right" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#real-estate-right" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                        <div class="plane-small">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                                    <div id="real-estate-left-1" class="real-estate-left-1" data-ride="carousel">
                                        <ul class="carousel-indicators">
                                            <li data-target="#real-estate-left-1" data-slide-to="0" class="active"></li>
                                            <li data-target="#real-estate-left-1" data-slide-to="1"></li>
                                            <li data-target="#real-estate-left-1" data-slide-to="2"></li>
                                        </ul>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="image/hcm.jpg" alt="Los Angeles" width="300" height="200">
                                                <div class="carousel-caption">
                                                    <h3>Los Angeles</h3>
                                                    <p>We had such a great time in LA!</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="image/hcm.jpg" alt="Chicago" width="300" height="200">
                                                <div class="carousel-caption">
                                                    <h3>Chicago</h3>
                                                    <p>Thank you, Chicago!</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="image/hcm.jpg" alt="New York" width="300" height="200">
                                                <div class="carousel-caption">
                                                    <h3>New York</h3>
                                                    <p>We love the Big Apple!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#real-estate-left-1" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#real-estate-left-1" data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                                    <div id="real-estate-left-2" class="real-estate-left-2" data-ride="carousel">
                                        <ul class="carousel-indicators">
                                            <li data-target="#real-estate-left-2" data-slide-to="0" class="active"></li>
                                            <li data-target="#real-estate-left-2" data-slide-to="1"></li>
                                            <li data-target="#real-estate-left-2" data-slide-to="2"></li>
                                        </ul>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="image/hcm.jpg" alt="Los Angeles" width="300" height="200">
                                                <div class="carousel-caption">
                                                    <h3>Los Angeles</h3>
                                                    <p>We had such a great time in LA!</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="image/hcm.jpg" alt="Chicago" width="300" height="200">
                                                <div class="carousel-caption">
                                                    <h3>Chicago</h3>
                                                    <p>Thank you, Chicago!</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="image/hcm.jpg" alt="New York" width="300" height="200">
                                                <div class="carousel-caption">
                                                    <h3>New York</h3>
                                                    <p>We love the Big Apple!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#real-estate-left-2" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#real-estate-left-2" data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                                    <div id="real-estate-left-3" class="real-estate-left-3" data-ride="carousel">
                                        <ul class="carousel-indicators">
                                            <li data-target="#real-estate-left-3" data-slide-to="0" class="active"></li>
                                            <li data-target="#real-estate-left-3" data-slide-to="1"></li>
                                            <li data-target="#real-estate-left-3" data-slide-to="2"></li>
                                        </ul>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="image/hcm.jpg" alt="Los Angeles" width="300" height="200">
                                                <div class="carousel-caption">
                                                    <h3>Los Angeles</h3>
                                                    <p>We had such a great time in LA!</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="image/hcm.jpg" alt="Chicago" width="300" height="200">
                                                <div class="carousel-caption">
                                                    <h3>Chicago</h3>
                                                    <p>Thank you, Chicago!</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="image/hcm.jpg" alt="New York" width="300" height="200">
                                                <div class="carousel-caption">
                                                    <h3>New York</h3>
                                                    <p>We love the Big Apple!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#real-estate-left-3" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#real-estate-left-3" data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                                    <div id="real-estate-left-4" class="real-estate-left-4" data-ride="carousel">
                                        <ul class="carousel-indicators">
                                            <li data-target="#real-estate-left-4" data-slide-to="0" class="active"></li>
                                            <li data-target="#real-estate-left-4" data-slide-to="1"></li>
                                            <li data-target="#real-estate-left-4" data-slide-to="2"></li>
                                        </ul>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="image/hcm.jpg" alt="Los Angeles" width="300" height="200">
                                                <div class="carousel-caption">
                                                    <h3>Los Angeles</h3>
                                                    <p>We had such a great time in LA!</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="image/hcm.jpg" alt="Chicago" width="300" height="200">
                                                <div class="carousel-caption">
                                                    <h3>Chicago</h3>
                                                    <p>Thank you, Chicago!</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="image/hcm.jpg" alt="New York" width="300" height="200">
                                                <div class="carousel-caption">
                                                    <h3>New York</h3>
                                                    <p>We love the Big Apple!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#real-estate-left-4" data-slide="prev">
                                            <span class="carousel-control-prev-icon"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#real-estate-left-4" data-slide="next">
                                            <span class="carousel-control-next-icon"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Real estate by location-->

<!--Outstanding project-->
<section class="Outstanding-project">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-box">
                    <h2>Dự án nổi bật</h2>
                </div>
            </div>
            <div class="col-12">
                <div id="exampleSlider">      <!-- Give wrapper ID to target with jQuery & CSS -->
                    <div class="MS-content">
                        <div class="item">
                            <img src="image/cuonha1.jpg">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Khu công nghiệp Nam Đình Vũ</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/cuonha1.jpg">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Khu công nghiệp Nam Đình Vũ</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/cuonha1.jpg">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Khu công nghiệp Nam Đình Vũ</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/cuonha1.jpg">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Khu công nghiệp Nam Đình Vũ</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/cuonha1.jpg">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Khu công nghiệp Nam Đình Vũ</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/cuonha1.jpg">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Khu công nghiệp Nam Đình Vũ</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/cuonha1.jpg">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Khu công nghiệp Nam Đình Vũ</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/cuonha1.jpg">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Khu công nghiệp Nam Đình Vũ</a>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="MS-controls">
                        <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                        <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end Outstanding project-->
<!--hot news-->
<section class="Outstanding-project">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-box">
                    <h2>Tin nổi bật</h2>
                </div>
            </div>
            <div class="col-12">
                <div id="exampleSlider1">      <!-- Give wrapper ID to target with jQuery & CSS -->
                    <div class="MS-content">
                        <div class="item">
                            <img src="image/newshot.webp">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Bà Rịa-Vũng Tàu chấn chỉnh tình trạng phân lô bán nền trái phép</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/newshot.webp">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Bà Rịa-Vũng Tàu chấn chỉnh tình trạng phân lô bán nền trái phép</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/newshot.webp">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Bà Rịa-Vũng Tàu chấn chỉnh tình trạng phân lô bán nền trái phép</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/newshot.webp">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Bà Rịa-Vũng Tàu chấn chỉnh tình trạng phân lô bán nền trái phép</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/newshot.webp">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Bà Rịa-Vũng Tàu chấn chỉnh tình trạng phân lô bán nền trái phép</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/newshot.webp">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Bà Rịa-Vũng Tàu chấn chỉnh tình trạng phân lô bán nền trái phép</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/newshot.webp">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Bà Rịa-Vũng Tàu chấn chỉnh tình trạng phân lô bán nền trái phép</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/newshot.webp">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Bà Rịa-Vũng Tàu chấn chỉnh tình trạng phân lô bán nền trái phép</a>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <img src="image/newshot.webp">
                            <div class="container">
                                <div class="title-item">
                                    <a href="#"> Bà Rịa-Vũng Tàu chấn chỉnh tình trạng phân lô bán nền trái phép</a>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="MS-controls">
                        <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                        <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--end hot news-->
<!--home conten-->
<section class="home-conten">
    <div class="container">
        <!-- home content colum-->
        <div class="content-colum">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                    <div class="title-colum">
                        <h3>
                            <a> Mua bán nhà đất Tp HCM</a>
                        </h3>
                        <ul>
                            <li>
                                <a href="#">Bán nhà quận 1</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 2</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 3</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 4</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 5</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 6</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 7</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 8</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 9</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 10</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 11</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 12</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận Tân Phú</a> </li>
                            <li>
                                <a href="#">Bán nhà quận Bình Thạnh</a> </li>
                            <li>
                                <a href="#">Bán nhà quận Thủ Đức</a> </li>
                        </ul>

                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                    <div class="title-colum">
                        <h3>
                            <a> Mua bán nhà đất Tp HCM</a>
                        </h3>
                        <ul>
                            <li>
                                <a href="#">Bán nhà quận 1</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 2</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 3</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 4</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 5</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 6</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 7</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 8</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 9</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 10</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 11</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 12</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận Tân Phú</a> </li>
                            <li>
                                <a href="#">Bán nhà quận Bình Thạnh</a> </li>
                            <li>
                                <a href="#">Bán nhà quận Thủ Đức</a> </li>
                        </ul>

                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                    <div class="title-colum">
                        <h3>
                            <a> Mua bán nhà đất Tp HCM</a>
                        </h3>
                        <ul>
                            <li>
                                <a href="#">Bán nhà quận 1</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 2</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 3</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 4</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 5</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 6</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 7</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 8</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 9</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 10</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 11</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 12</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận Tân Phú</a> </li>
                            <li>
                                <a href="#">Bán nhà quận Bình Thạnh</a> </li>
                            <li>
                                <a href="#">Bán nhà quận Thủ Đức</a> </li>
                        </ul>

                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                    <div class="title-colum">
                        <h3>
                            <a> Mua bán nhà đất Tp HCM</a>
                        </h3>
                        <ul>
                            <li>
                                <a href="#">Bán nhà quận 1</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 2</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 3</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 4</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 5</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 6</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 7</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 8</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 9</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 10</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 11</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận 12</a>
                            </li>
                            <li>
                                <a href="#">Bán nhà quận Tân Phú</a> </li>
                            <li>
                                <a href="#">Bán nhà quận Bình Thạnh</a> </li>
                            <li>
                                <a href="#">Bán nhà quận Thủ Đức</a> </li>
                        </ul>

                    </div>

                </div>
            </div>

        </div>
        <!-- end home content colum--->
    </div>
</section>
<!--end home conten-->
@include('layout.footer')