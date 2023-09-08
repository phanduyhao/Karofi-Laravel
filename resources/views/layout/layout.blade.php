<!DOCTYPE html>
<html lang="en">
<head>
</head>
@include('layout.head')
<body>
<div class="layout-site position-relative">
    <!-- header -->
@include('layout.header')
<!-- main -->
            <div class="over-lay position-fixed"></div>
            <div class="header-nav mobile flex-column position-fixed">
               <div class="logo-contain text-center">
                   <a href="/" class="header-logo m-0">
                       <img src="temp/images/logo 2.png" alt="">
                   </a>
               </div>
                <a href="" class="header-nav__item active">
                    Máy Lọc Nước
                </a>
                <a href="" class="header-nav__item">
                    Lọc Nước Nóng Lạnh
                </a>
                <a href="" class="header-nav__item">
                    Lọc Đầu Nguồn
                </a>
                <a href="" class="header-nav__item">
                    Bình Nóng Lạnh
                </a>
                <a href="" class="header-nav__item">
                    Điều Hòa
                </a>
                <a href="" class="header-nav__item">
                    Lọc Không Khí
                </a>
                <a href="" class="header-nav__item">
                    Quạt
                </a>
                <a href="" class="header-nav__item">
                    Chuyên Gia Thấu Hiểu
                </a>
                <a href="" class="header-nav__item">
                    Dịch Vụ Vượt Trội
                </a>
            </div>
    <div class="content">
        @yield('content')
    </div>
    <!-- footer -->
    @include('layout.footer')
</div>
@include('layout.foot')
</body>
</html>
