@extends('layout.layout')
@section('content')
    <div class="container-width">
        <div class="main">
            <!-- Slider -->
            <div class="main-slider position-relative">
                <div class="swiper SwiperSlide">
                    <div class="swiper-wrapper">
                        @foreach($slides as $slide)
                            @if($slide->active == 1)
                                @if($slide->title == 'Slide header')
                                    @foreach(json_decode($slide->image) as $image)
                                        <div class="swiper-slide">
                                            <img class="img-fluid w-100" src="{{ asset('storage/images/slides/' . $image) }}" alt="Slide Image">
                                        </div>
                                    @endforeach
                                @endif
                            @endif
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="category position-absolute flex-column">
                    @foreach($cates as $cates)
                        @if($cates->active == 1 && $cates->parent_id == null)
                            <a href="#water_health" class="category-item">
                                {{$cates->title}}
                            </a>
                        @endif
                    @endforeach
                </div>
                <div class="support position-fixed flex-column">
                    <button href="" class="support-item" id="backtotop">
                        <img class="support-img" src="temp/images/icon1.png" alt="">
                    </button>
                    <a href="" class="support-item">
                        <img class="support-img" src="temp/images/icon2.png" alt="">
                    </a>
                    <a href="" class="support-item">
                        <img class="support-img" src="temp/images/icon3.png" alt="">
                    </a>
                </div>
            </div>
            <!-- Content -->
            <div class="main-content">
                <!--  -->
                <div class="main-content__cate " id="water_health">
                    <h1 class="title text-center">
                        Nước Và Sức Khỏe
                    </h1>
                    <div class="cate-child d-flex">
                        <h3 class="cate-child__item active">
                            Sống Khỏe Cùng Nước
                        </h3>
                        <h3 class="cate-child__item">
                            Nước Ô Nhiếm & Nguy Cơ
                        </h3>
                    </div>
                    <div class="container">
                        <div class="swiper cate-news">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="/temp/images/cate-new/catenew1.png" alt="">
                                    <div class="cate-news__content">
                                        <p class="time-address">
                                            26/04/2022 | Hà Nội
                                        </p>
                                        <h3 class="title">
                                            Nên uống nước vào thời điểm nào?
                                        </h3>
                                        <p class="desc">
                                            Chúng ta thường uống nước khi khát, nhưng khi đó là lúc cơ thể đã bị thiếu nước. Vì vậy hãy uống ước trước khi thấy khát và luôn duy trì thói quen
                                        </p>
                                        <a href="" class="readmore">
                                            Đọc tiếp
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="/temp/images/cate-new/catenew2.png" alt="">
                                    <div class="cate-news__content">
                                        <p class="time-address">
                                            26/04/2022 | Hà Nội
                                        </p>
                                        <h3 class="title">
                                            Nên uống nước vào thời điểm nào?
                                        </h3>
                                        <p class="desc">
                                            Chúng ta thường uống nước khi khát, nhưng khi đó là lúc cơ thể đã bị thiếu nước. Vì vậy hãy uống ước trước khi thấy khát và luôn duy trì thói quen
                                        </p>
                                        <a href="" class="readmore">
                                            Đọc tiếp
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="/temp/images/cate-new/catenew3.png" alt="">
                                    <div class="cate-news__content">
                                        <p class="time-address">
                                            26/04/2022 | Hà Nội
                                        </p>
                                        <h3 class="title">
                                            Nên uống nước vào thời điểm nào?
                                        </h3>
                                        <p class="desc">
                                            Chúng ta thường uống nước khi khát, nhưng khi đó là lúc cơ thể đã bị thiếu nước. Vì vậy hãy uống ước trước khi thấy khát và luôn duy trì thói quen
                                        </p>
                                        <a href="" class="readmore">
                                            Đọc tiếp
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="/temp/images/cate-new/catenew3.png" alt="">
                                    <div class="cate-news__content">
                                        <p class="time-address">
                                            26/04/2022 | Hà Nội
                                        </p>
                                        <h3 class="title">
                                            Nên uống nước vào thời điểm nào?
                                        </h3>
                                        <p class="desc">
                                            Chúng ta thường uống nước khi khát, nhưng khi đó là lúc cơ thể đã bị thiếu nước. Vì vậy hãy uống ước trước khi thấy khát và luôn duy trì thói quen
                                        </p>
                                        <a href="" class="readmore">
                                            Đọc tiếp
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="/temp/images/cate-new/catenew3.png" alt="">
                                    <div class="cate-news__content">
                                        <p class="time-address">
                                            26/04/2022 | Hà Nội
                                        </p>
                                        <h3 class="title">
                                            Nên uống nước vào thời điểm nào?
                                        </h3>
                                        <p class="desc">
                                            Chúng ta thường uống nước khi khát, nhưng khi đó là lúc cơ thể đã bị thiếu nước. Vì vậy hãy uống ước trước khi thấy khát và luôn duy trì thói quen
                                        </p>
                                        <a href="" class="readmore">
                                            Đọc tiếp
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div id="water_standal" class="main-content__cate ">
                    <h1 class="title text-center">
                        Quy Chuẩn Chất Lượng Nước
                    </h1>
                    <div class="container cate-banner flex-center-between">
                        <div class="cate-banner__item">
                            <div class="cate-banner__img mx-auto flex-center">
                                <img src="temp/images/Frame-2.png" alt="">
                            </div>
                            <h3 class="title text-center">Quy Chuẩn Nước Tinh Khiết Đóng Chai</h3>
                            <p class="desc">
                                Chúng ta thường uống nước khi khát, nhưng khi đó là lúc cơ thể đã bị thiếu nước. Vì vậy hãy uống ước trước khi thấy khát và luôn duy trì thói quen
                            </p>
                        </div>
                        <div class="cate-banner__item">
                            <div class="cate-banner__img mx-auto flex-center">
                                <img src="temp/images/Frame.png" alt="" style="margin-left: -5px">
                            </div>
                            <h3 class="title text-center">Quy Chuẩn Nước Dùng Để Nấu Nướng</h3>
                            <p class="desc">
                                Chúng ta thường uống nước khi khát, nhưng khi đó là lúc cơ thể đã bị thiếu nước. Vì vậy hãy uống ước trước khi thấy khát và luôn duy trì thói quen
                            </p>
                        </div>
                        <div class="cate-banner__item">
                            <div class="cate-banner__img mx-auto flex-center">
                                <img src="temp/images/Frame-1.png" alt="" style="margin-left: 7px">
                            </div>
                            <h3 class="title text-center">Quy Chuẩn Nước Sinh Hoạt</h3>
                            <p class="desc">
                                Chúng ta thường uống nước khi khát, nhưng khi đó là lúc cơ thể đã bị thiếu nước. Vì vậy hãy uống ước trước khi thấy khát và luôn duy trì thói quen
                            </p>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <!--  -->
                <div id="solution" class="main-content__cate ">
                    <h1 class="title text-center">
                        Công Nghệ Và Giải Pháp
                    </h1>
                    <div class="cate-child flex-center">
                        <h3 class="cate-child__item active">
                           Công Nghệ Lọc Nước
                        </h3>
                        <h3 class="cate-child__item">
                            Công Nghệ Thông Minh
                        </h3>
                        <h3 class="cate-child__item">
                            Công Nghệ Tạo Nước Tốt
                        </h3>
                        <h3 class="cate-child__item">
                            Công Nghệ Khác
                        </h3>
                    </div>
                    <div class="container">
                        <div class="swiper cate-news">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="/temp/images/Maskgroup.png" alt="">
                                    <div class="cate-news__content">
                                        <p class="time-address">
                                            26/04/2022 | Hà Nội
                                        </p>
                                        <h3 class="title">
                                            Nên uống nước vào thời điểm nào?
                                        </h3>
                                        <p class="desc">
                                            Chúng ta thường uống nước khi khát, nhưng khi đó là lúc cơ thể đã bị thiếu nước. Vì vậy hãy uống ước trước khi thấy khát và luôn duy trì thói quen
                                        </p>
                                        <a href="" class="readmore">
                                            Đọc tiếp
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="/temp/images/Maskgroup1.png" alt="">
                                    <div class="cate-news__content">
                                        <p class="time-address">
                                            26/04/2022 | Hà Nội
                                        </p>
                                        <h3 class="title">
                                            Nên uống nước vào thời điểm nào?
                                        </h3>
                                        <p class="desc">
                                            Chúng ta thường uống nước khi khát, nhưng khi đó là lúc cơ thể đã bị thiếu nước. Vì vậy hãy uống ước trước khi thấy khát và luôn duy trì thói quen
                                        </p>
                                        <a href="" class="readmore">
                                            Đọc tiếp
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="/temp/images/Maskgroup2.png" alt="">
                                    <div class="cate-news__content">
                                        <p class="time-address">
                                            26/04/2022 | Hà Nội
                                        </p>
                                        <h3 class="title">
                                            Nên uống nước vào thời điểm nào?
                                        </h3>
                                        <p class="desc">
                                            Chúng ta thường uống nước khi khát, nhưng khi đó là lúc cơ thể đã bị thiếu nước. Vì vậy hãy uống ước trước khi thấy khát và luôn duy trì thói quen
                                        </p>
                                        <a href="" class="readmore">
                                            Đọc tiếp
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="/temp/images/cate-new/catenew3.png" alt="">
                                    <div class="cate-news__content">
                                        <p class="time-address">
                                            26/04/2022 | Hà Nội
                                        </p>
                                        <h3 class="title">
                                            Nên uống nước vào thời điểm nào?
                                        </h3>
                                        <p class="desc">
                                            Chúng ta thường uống nước khi khát, nhưng khi đó là lúc cơ thể đã bị thiếu nước. Vì vậy hãy uống ước trước khi thấy khát và luôn duy trì thói quen
                                        </p>
                                        <a href="" class="readmore">
                                            Đọc tiếp
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="/temp/images/cate-new/catenew3.png" alt="">
                                    <div class="cate-news__content">
                                        <p class="time-address">
                                            26/04/2022 | Hà Nội
                                        </p>
                                        <h3 class="title">
                                            Nên uống nước vào thời điểm nào?
                                        </h3>
                                        <p class="desc">
                                            Chúng ta thường uống nước khi khát, nhưng khi đó là lúc cơ thể đã bị thiếu nước. Vì vậy hãy uống ước trước khi thấy khát và luôn duy trì thói quen
                                        </p>
                                        <a href="" class="readmore">
                                            Đọc tiếp
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div id="introduce" class="main-content__cate">
                    <h1 class="title text-center">
                        Hướng Dẫn Sử Dụng Và Xử Lý Sự Cố Máy Lọc Nước
                    </h1>
                    <div class="cate-child flex-center">
                        <h3 class="cate-child__item active">
                            Hướng Dẫn Sử Dụng
                        </h3>
                        <h3 class="cate-child__item">
                            Xử Lý Sự Cố
                        </h3>
                    </div>
                    <div class="video-contain d-flex container" id="video_intro">
                        <div class="video-contain__left position-relative">
                            <div id="player" class="position-relative"></div>
                            <img src="/temp/images/bg-video.png" alt="" class="bg-video position-absolute w-100">
                            <button class="btn-youtube flex-center">
                                <img src="/temp/images/arrow.png" alt="">
                            </button>
                        </div>
                        <div class="video-contain__right w-100">
                            <a href="" class="list-video active overlay d-flex">
                                <button class="btn-youtube flex-center">
                                    <img src="/temp/images/arrow.png" width="10" alt="">
                                </button>
                                <h3 class="title" disabled="">Hướng Dẫn Xử Lý Sự Cố A</h3>
                            </a>
                            <a href="" class="list-video overlay d-flex">
                                <button class="btn-youtube flex-center">
                                    <img src="/temp/images/arrow.png" width="10" alt="">
                                </button>
                                <h3 class="title" disabled="">Hướng Dẫn Xử Lý Sự Cố A</h3>
                            </a>
                            <a href="" class="list-video overlay d-flex">
                                <button class="btn-youtube flex-center">
                                    <img src="/temp/images/arrow.png" width="10" alt="">
                                </button>
                                <h3 class="title" disabled="">Hướng Dẫn Xử Lý Sự Cố A</h3>
                            </a>
                            <a href="" class="list-video overlay d-flex">
                                <button class="btn-youtube flex-center">
                                    <img src="/temp/images/arrow.png" width="10" alt="">
                                </button>
                                <h3 class="title" disabled="">Hướng Dẫn Xử Lý Sự Cố A</h3>
                            </a>
                        </div>
                    </div>
                    <div class="flex-center">
                        <a href="" class="btn-more">Xem tất cả video</a>
                    </div>
                </div>
                <!--  -->
                <div class="comment container-width">
                    <div class="title mx-auto position-relative">Hỏi Đáp Của Khách Hàng
                        <img class="position-absolute" src="temp/images/icon-ask.png" alt="">
                    </div>
                    <div class="comment-user ">
                        <div class="d-flex">
                            <img src="temp/images/Accountcircle.png" class="comment-user__img" alt="">
                            <div class="comment-user__infor">
                                <p class="name">Vũ Thị Kim Hường</p>
                                <p class="type">cần tư vấn</p>
                            </div>
                        </div>
                        <div class="reply">
                            <p class="reply-text">Trả lời</p>
                            <div class="reply-box">
                                <div class="d-flex reply-infor">
                                    <img src="temp/images/Accountcircle.png" class="comment-user__img" alt="">
                                    <p class="name">Nguyễn Ngọc Chiến</p>
                                </div>
                                <p class="reply-content">
                                    Sức khỏe là vốn quý của con người. Ăn uống và vận động hợp lý giúp nâng cao sức khỏe và phòng chống bệnh tật.
                                    Việc tham gia chơi các môn thể thao không những giúp cơ thể khỏe về thể chất mà còn khỏe về tinh thần.
                                    Khi tập luyện thể dục thể thao, phải đảm bảo có lượng nước trước, trong và sau khi tập thể dục.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-user ">
                        <div class="d-flex">
                            <img src="temp/images/Accountcircle.png" class="comment-user__img" alt="">
                            <div class="comment-user__infor">
                                <p class="name">Vũ Thị Kim Hường</p>
                                <p class="type">cần tư vấn</p>
                            </div>
                        </div>
                        <div class="reply">
                            <p class="reply-text">Trả lời</p>
                            <div class="reply-box">
                                <div class="d-flex reply-infor">
                                    <img src="temp/images/Accountcircle.png" class="comment-user__img" alt="">
                                    <p class="name">Nguyễn Ngọc Chiến</p>
                                </div>
                                <p class="reply-content">
                                    Sức khỏe là vốn quý của con người. Ăn uống và vận động hợp lý giúp nâng cao sức khỏe và phòng chống bệnh tật.
                                    Việc tham gia chơi các môn thể thao không những giúp cơ thể khỏe về thể chất mà còn khỏe về tinh thần.
                                    Khi tập luyện thể dục thể thao, phải đảm bảo có lượng nước trước, trong và sau khi tập thể dục.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-user ">
                        <div class="d-flex">
                            <img src="temp/images/Accountcircle.png" class="comment-user__img" alt="">
                            <div class="comment-user__infor">
                                <p class="name">Vũ Thị Kim Hường</p>
                                <p class="type">cần tư vấn</p>
                            </div>
                        </div>
                        <div class="reply">
                            <p class="reply-text">Trả lời</p>
                            <div class="reply-box">
                                <div class="d-flex reply-infor">
                                    <img src="temp/images/Accountcircle.png" class="comment-user__img gray" alt="">
                                    <p class="name">Nguyễn Ngọc Chiến</p>
                                </div>
                                <p class="reply-content">
                                    Sức khỏe là vốn quý của con người. Ăn uống và vận động hợp lý giúp nâng cao sức khỏe và phòng chống bệnh tật.
                                    Việc tham gia chơi các môn thể thao không những giúp cơ thể khỏe về thể chất mà còn khỏe về tinh thần.
                                    Khi tập luyện thể dục thể thao, phải đảm bảo có lượng nước trước, trong và sau khi tập thể dục.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="main-content__cate advise">
                    <h1 class="title text-center">
                        Chuyên Gia Tư Vấn
                    </h1>
                    <div class="container-width advise-form position-relative">
                        <h2 class="title text-center">
                            <p>Bất cứ thắc mắc gì cần giải đáp, hãy để chuyên gia của Karofi tư vấn!</p>
                            <br>
                            <span>Tại Đây</span>
                        </h2>
                        <img src="temp/images/doctor.png" class="position-absolute img-doctor" alt="">
                        <form action="" class="mx-auto">
                            @csrf
                            <div class="form-group flex-center-between">
                                <div class="form-group__item w-100 position-relative">
                                    <input type="text" placeholder="Họ và tên" class="position-absolute name">
                                    <img src="temp/images/iconuser.png" alt="" class="position-relative">
                                </div>
                                <div class="form-group__item w-100 position-relative">
                                    <input type="email" placeholder="Mail" class="position-absolute name">
                                    <img src="temp/images/iconemail.png" alt="" class="position-relative">
                                </div>
                            </div>
                            <div class="form-group middle flex-center-between">
                                <div class="form-group__item w-100 position-relative">
                                    <input type="text" placeholder="Điện thoại" class="position-absolute name">
                                    <img src="temp/images/iconphone.png" alt="" class="position-relative">
                                </div>
                                <div class="form-group__item w-100 position-relative">
                                    <input type="text" placeholder="Địa chỉ" class="position-absolute name">
                                    <img src="temp/images/iconlocation.png" alt="" class="position-relative">
                                </div>
                            </div>
                            <div class="textarea position-relative">
                                <img src="temp/images/iconask.png" alt="" class="position-absolute img-ask">
                                <textarea class="textarea-note w-100" name="" id="" rows="14">Câu hỏi</textarea>
                            </div>
                            <div class="flex-center">
                                <button type="submit" href="" class="btn-more">GỬI CÂU HỎI</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--  -->
                <div class="main-content__cate criteria">
                    <h1 class="title text-center">
                        Tiêu Chí Của Tôi
                    </h1>
                    <form action="" class="mx-auto" method="">
                        <div class="form-group d-flex w-100 position-relative">
                            <input type="text" placeholder="Từ khóa tìm kiếm" class="position-absolute name">
                            <svg class="position-relative" width="35" height="35" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.5833 26.9167C21.8426 26.9167 26.9167 21.8426 26.9167 15.5833C26.9167 9.32411 21.8426 4.25 15.5833 4.25C9.32411 4.25 4.25 9.32411 4.25 15.5833C4.25 21.8426 9.32411 26.9167 15.5833 26.9167Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M29.7501 29.75L23.5876 23.5875" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M15.5833 26.9167C21.8426 26.9167 26.9167 21.8426 26.9167 15.5833C26.9167 9.32411 21.8426 4.25 15.5833 4.25C9.32411 4.25 4.25 9.32411 4.25 15.5833C4.25 21.8426 9.32411 26.9167 15.5833 26.9167Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="form-select flex-center">
                            <div class="select-contain position-relative location">
                                <select name="" class="form-select__item w-100" id="">
                                    <option value="">Vị trí</option>
                                </select>
                                <img src="temp/images/arrow-down.png" alt="" class="position-absolute arrow-down">
                            </div>
                            <div class="select-contain position-relative water">
                                <select name="" class="form-select__item w-100" id="">
                                    <option value="">Nguồn nước</option>
                                </select>
                                <img src="temp/images/arrow-down.png" alt="" class="position-absolute arrow-down">
                            </div>
                            <div class="select-contain position-relative people">
                                <select name="" class="form-select__item w-100" id="">
                                    <option value="">Số người</option>
                                </select>
                                <img src="temp/images/arrow-down.png" alt="" class="position-absolute arrow-down">
                            </div>
                        </div>
                    </form>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
@endsection
