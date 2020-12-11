@extends('front-end.master')
@section('title')
    Trang chủ
@endsection
@section('main')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="acess/image/slider/slider1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="acess/image/slider/slider1.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="acess/image/slider/slider1.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="baner-top container-fluid pt-1">
        <div class="row w-100">
            <div class="baner-top col-sm-4 d-block mx-auto">
                <img src="acess/image/slider/baner-top-1.webp" class="w-100 h-100" alt="">
                <div class="baner-top-item">
                    <h4 class="text-white">Rapido</h4>
                    <button class="btn btn-danger text-white">Xem ngay</button>
                </div>
            </div>
            <div class="baner-top col-sm-4 d-block mx-auto">
                <img src="acess/image/slider/baner-top-2.webp" class="w-100 h-100" alt="">
                <div class="baner-top-item">
                    <h4 class="text-white">Rapido</h4>
                    <button class="btn btn-danger text-white">Xem ngay</button>
                </div>
            </div>
            <div class="baner-top col-sm-4 d-block mx-auto">
                <img src="acess/image/slider/baner-top-3.webp" class="w-100 h-100" alt="">
                <div class="baner-top-item">
                    <h4 class="text-white">Rapido</h4>
                    <button class="btn btn-danger text-white">Xem ngay</button>
                </div>
            </div>
        </div>
    </div>
    <div class="clock">
        <div class="clock-title pb-5 pt-5">
            <h2 class="text-center"><a href="">Đồng Hồ Pagini</a></h2>
        </div>
        <div class="pro-item container pt-5 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="pro-item-img">
                        <a href="">
                            <div class="img-detail">
                                <img class="bottom w-100" src="acess/image/product/clock.webp" alt="">
                            </div>
                        </a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="pro-item-img">
                        <a href="">
                            <div class="img-detail">
                                <img class="bottom w-100" src="acess/image/product/clock.webp" alt="">
                            </div>
                        </a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="pro-item-img">
                        <a href="">
                            <div class="img-detail">
                                <img class="bottom w-100" src="acess/image/product/clock.webp" alt="">
                            </div>
                        </a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="pro-item-img">
                        <a href="">
                            <div class="img-detail">
                                <img class="bottom w-100" src="acess/image/product/clock.webp" alt="">
                            </div>
                        </a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="other text-center pt-5 pb-4">
                <a href="">Xem tất cả</a>
            </div>
        </div>
    </div>
    <div class="slider-main container-fluid">
        <div class="row">
            <div class="col-sm-4 slider-main-item">
                <img src="acess/image/slider/slider-main1.webp" class="w-100" alt="">
                <div class="slider-main-detail">
                    <h4 class="text-white pb-3">Vfloor</h4>
                    <button class="btn">XEM THÊM</button>
                </div>
            </div>
            <div class="col-sm-4 slider-main-item">
                <img src="acess/image/slider/slider-main1.webp" class="w-100" alt="">
                <div class="slider-main-detail">
                    <h4 class="text-white pb-3">Vfloor</h4>
                    <button class="btn">XEM THÊM</button>
                </div>
            </div>
            <div class="col-sm-4 slider-main-item">
                <img src="acess/image/slider/slider-main1.webp" class="w-100" alt="">
                <div class="slider-main-detail">
                    <h4 class="text-white pb-3">Vfloor</h4>
                    <button class="btn">XEM THÊM</button>
                </div>
            </div>
        </div>
    </div>
    <div class="clock">
        <div class="clock-title pb-5 pt-5">
            <h2 class="text-center"><a href="">Phụ Kiện Ví Da</a></h2>
        </div>
        <div class="pro-item container pt-5 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-sm-3">
                    <div class="pro-item-img">
                        <a href=""><img class="w-100" src="acess/image/product/clock.webp" alt=""></a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="pro-item-img">
                        <a href=""><img class="w-100" src="acess/image/product/clock2.webp" alt=""></a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="pro-item-img">
                        <a href=""><img class="w-100" src="acess/image/product/clock.webp" alt=""></a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="pro-item-img">
                        <a href=""><img class="w-100" src="acess/image/product/clock.webp" alt=""></a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="other text-center pt-5 pb-4">
                <a href="">Xem tất cả</a>
            </div>
        </div>
    </div>
    <div class="clock">
        <div class="clock-title pb-5 pt-5">
            <h2 class="text-center"><a href="">Rapido</a></h2>
        </div>
        <div class="pro-item container pt-5 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-sm-3">
                    <div class="pro-item-img">
                        <a href=""><img class="w-100" src="acess/image/product/clock.webp" alt=""></a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="pro-item-img">
                        <a href=""><img class="w-100" src="acess/image/product/clock2.webp" alt=""></a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Quạt Điều Hòa</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="pro-item-img">
                        <a href=""><img class="w-100" src="acess/image/product/clock.webp" alt=""></a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="pro-item-img">
                        <a href=""><img class="w-100" src="acess/image/product/clock.webp" alt=""></a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="other text-center pt-5 pb-4">
                <a href="">Xem tất cả</a>
            </div>
        </div>
    </div>
    <div class="clock">
        <div class="clock-title pb-5 pt-5">
            <h2 class="text-center"><a href="">Bếp Từ Đôi</a></h2>
        </div>
        <div class="pro-item container pt-5 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                <div class="col-sm-3">
                    <div class="pro-item-img">
                        <a href=""><img class="w-100" src="acess/image/product/clock.webp" alt=""></a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="pro-item-img">
                        <a href=""><img class="w-100" src="acess/image/product/clock2.webp" alt=""></a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="pro-item-img">
                        <a href=""><img class="w-100" src="acess/image/product/clock.webp" alt=""></a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="pro-item-img">
                        <a href=""><img class="w-100" src="acess/image/product/clock.webp" alt=""></a>
                        <span class="p-2 pro-sale"><small class="text-white font-weight-bold">-50%</small></span>
                    </div>
                    <div class="pro-detail">
                        <h3 class="pro-name"><a href="">Đồng Hồ Cơ Automatic Pagini 9233</a></h3>
                        <div class="pro-price d-flex">
                            <p class="mr-3 text-danger">1,700,000₫</p>
                            <del>3,400,000₫</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="other text-center pt-5 pb-4">
                <a href="">Xem tất cả</a>
            </div>
        </div>
    </div>
    <div class="infomation container bg bg-white mt-5">
        <div class="row">
            <div class="col-sm-6 infomation-left">
                <div class="infomation-item pt-3">
                    <img class="w-100" src="acess/image/slider/slider-botom.webp" alt="">
                </div>
            </div>
            <div class="col-sm-6 infomation-right">
                <div class="infomation-text">
                    <h1 class="font-weight-bold text-center">VỀ CHÚNG TÔI</h1>
                    <p>EgoMall là sàn thương mại điện tử đầu tiên dành cho cộng đồng AOE I</p>
                    <p class="">Giá trị cốt lõi của EgoMall là mang đến cho cộng đồng những sản phẩm , dịch vụ tốt nhất cùng với ưu đãi lớn nhất . Mọi sản phẩm dịch vụ trên EgoMall phải đảm bảo mang lại giá trị thiết thực cho cộng đồng , là những thương hiệu
                        lớn đã được đội ngũ nhân viên công ty kiểm tra rất kỹ mới đưa đến anh em cộng đồng . Thương hiệu được bán trên EgoMall là những thương hiệu đã và đang quảng bá và đồng hành với cộng đồng AOE . Mua sắm trên EgoMall anh em sẽ
                        hài lòng với chất lượng sản phẩm cũng như các chương trình vô cùng hấp dẫn . Anh em sử dụng sản phẩm , dịch vụ trên EgoMall cũng đồng nghĩa với việc đóng góp 1 phần tài chính để cùng xây dựng cộng đồng AOE I với những giải
                        đấu hấp dẫn .
                    </p>
                    <p>Mọi chi tiết vui lòng liên hệ: 19009058</p>
                </div>
            </div>
        </div>
    </div>
@endsection
