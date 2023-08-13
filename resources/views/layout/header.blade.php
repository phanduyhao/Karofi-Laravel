<header class="header">
    <div class="container flex-center-between">
        <a href="/" class="header-logo">
            <img src="temp/images/logo 2.png" alt="">
        </a>
        <div class="header-nav">
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
        <div class="header-icon flex-center-between">
            <a href="" class="header-icon__item">
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5833 26.9167C21.8426 26.9167 26.9167 21.8426 26.9167 15.5833C26.9167 9.32411 21.8426 4.25 15.5833 4.25C9.32411 4.25 4.25 9.32411 4.25 15.5833C4.25 21.8426 9.32411 26.9167 15.5833 26.9167Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M29.7501 29.75L23.5876 23.5875" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.5833 26.9167C21.8426 26.9167 26.9167 21.8426 26.9167 15.5833C26.9167 9.32411 21.8426 4.25 15.5833 4.25C9.32411 4.25 4.25 9.32411 4.25 15.5833C4.25 21.8426 9.32411 26.9167 15.5833 26.9167Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </a>
            <a href="" class="header-icon__item">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1203_113)">
                        <path d="M11.625 27.9445C12.3077 27.9445 12.8611 27.391 12.8611 26.7083C12.8611 26.0257 12.3077 25.4722 11.625 25.4722C10.9423 25.4722 10.3889 26.0257 10.3889 26.7083C10.3889 27.391 10.9423 27.9445 11.625 27.9445Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M25.2222 27.9445C25.9049 27.9445 26.4583 27.391 26.4583 26.7083C26.4583 26.0257 25.9049 25.4722 25.2222 25.4722C24.5395 25.4722 23.9861 26.0257 23.9861 26.7083C23.9861 27.391 24.5395 27.9445 25.2222 27.9445Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1.73608 1.98611H6.68053L9.9933 18.5376C10.1063 19.1067 10.4159 19.618 10.8679 19.9818C11.3199 20.3456 11.8854 20.5389 12.4655 20.5278H24.4805C25.0606 20.5389 25.6262 20.3456 26.0781 19.9818C26.5301 19.618 26.8397 19.1067 26.9527 18.5376L28.9305 8.16667H7.91664" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_1203_113">
                            <rect width="29.6667" height="29.6667" fill="white" transform="translate(0.5 0.75)"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
            @if (Auth::check())
                <a href="/admin" class="header-icon__item">
            @else
                <a href="/login" class="header-icon__item">
            @endif
                <svg width="34" height="31" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.3334 27.1254V24.5831C28.3334 23.2345 27.7364 21.9412 26.6737 20.9876C25.611 20.034 24.1696 19.4983 22.6667 19.4983H11.3334C9.83052 19.4983 8.38918 20.034 7.32648 20.9876C6.26377 21.9412 5.66675 23.2345 5.66675 24.5831V27.1254" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.9999 14.4135C20.1295 14.4135 22.6666 12.137 22.6666 9.32875C22.6666 6.52051 20.1295 4.24399 16.9999 4.24399C13.8703 4.24399 11.3333 6.52051 11.3333 9.32875C11.3333 12.137 13.8703 14.4135 16.9999 14.4135Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</header>
