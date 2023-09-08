@extends('layout.layout')
@section('content')
    <div class="container-width">
        <div class="main">
            <!-- Slider -->
            <div class="main-slider position-relative">
                <div class="swiper SwiperSlide">
                    <div class="swiper-wrapper">
                        @foreach($slide as $slide)
                            @foreach(json_decode($slide->image) as $image)
                                <div class="swiper-slide">
                                    <img class="img-fluid w-100" src="{{ asset('storage/images/slides/' . $image) }}" alt="Slide Image">
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                    <div class="SwiperSlide swiper-pagination"></div>
                </div>
                <div class="category position-absolute flex-column">
                    @foreach($cates as $catetitle)
                        <a href="#{{$catetitle->alias}}" class="category-item">
                            {{$catetitle->title}}
                        </a>
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
                <!-- TEST -->
                @foreach ($cates as $key=> $cate)
                    <div class="main-content__cate " id="{{$cate->alias}}">
                        <h1 class="title text-center">
                            {{$cate->title}}
                        </h1>
                        @php
                            $index = 1;
                        @endphp
                        <div class="cate-child d-flex">
                            @foreach ($cate->children as $child)
                                <h3 id="{{$child->alias}}" class="cate-child__item text-center @if($index === 1) active @endif">
                                    {{$child->title}}
                                </h3>
                                @php
                                    $index++;
                                @endphp
                            @endforeach
                        </div>

                        <!-- BÀI VIẾT -->
                       @if($key == 0 || $key == 2)
                            @php
                                $index = 1;
                            @endphp
                            @foreach ($cate->children as $child)
                                <div id="{{$child->alias}}" class="swiper-content container {{ $index === 1 ? 'd-block' : 'd-none' }}">
                                    <div class="swiper cate-news">
                                        <div class="swiper-wrapper">
                                            @if ($child->posts->count() > 0)
                                                @foreach ($child->posts as $post)
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset('storage/images/posts/'. $post->thumb) }}" alt="{{$post->title}}">
                                                        <div class="cate-news__content">
                                                            <p class="time-address">
                                                                {{$post->created_at}} |
                                                                @foreach($locations as $location)
                                                                    @if($post->location == $location->id)
                                                                        {{$location->name_location}}
                                                                    @endif
                                                                @endforeach
                                                            </p>
                                                            <h3 class="title">
                                                                {{$post->title}}
                                                            </h3>
                                                            <p class="desc">
                                                                {{$post->description}}
                                                            </p>
                                                            <a href="{{ route('postDetails', ['alias' => $post->alias, 'id' => $post->id]) }}" class="readmore">
                                                                Đọc tiếp
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"></div>
                                    </div>
                                </div>
                                @php
                                    $index++;
                                @endphp
                            @endforeach
                        @endif

                       @if($key == 1)
                            <!-- BANNER -->
                            <div id="{{$cate->alias}}" class="container cate-banner flex-center-between">
                            @foreach($cate->banners as $banner)
                                <div class="cate-banner__item">
                                    <div class="cate-banner__img mx-auto flex-center">
                                        <img class="img-fluid" src="{{ asset('storage/images/banners/'. $banner->thumb) }}" alt="{{$banner->title}}">
                                    </div>
                                    <h3 class="title text-center">{{$banner->title}}</h3>
                                    <p class="desc">
                                        {{$banner->desc}}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                        @endif

                        <!-- VIDEO -->
                       @if($key == 3)
                            @php
                                $index = 1;
                            @endphp
                            @foreach ($cate->children as $child)
                                <div id="{{$child->alias}}" class="video-contain d-flex container {{ $index === 1 ? 'd-flex' : 'd-none' }}">
                                    @php
                                        $categoryIndex = []; // Mảng lưu trữ index của mỗi danh mục
                                    @endphp
                                    <div class="video-contain__left position-relative">
                                        @foreach($child->videos as $video)
                                            @if($video->cate_id == $child->id)
                                                @php
                                                    $index = isset($categoryIndex[$child->id]) ? $categoryIndex[$child->id] : 1;
                                                    $categoryIndex[$child->id] = $index + 1;
                                                @endphp

                                                <div id="{{$video->link}}" class="video-player {{ $index === 1 ? 'd-block' : 'd-none' }}">
                                                    <div id="{{$video->link}}_{{$index}}" class="player position-relative"></div>
                                                    <img src="{{ asset('storage/images/videos/'. $video->thumb  ) }}" alt="{{$video->id}}-{{$video->title}}" class="bg-video position-absolute w-100">
                                                    <button class="btn-youtube {{$index}} flex-center">
                                                        <img src="/temp/images/arrow.png" alt="">
                                                    </button>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    @php
                                        $index = 1;
                                    @endphp
                                    <div class="video-contain__right w-100">
                                        @foreach($child->videos as $video)
                                            @if($video->cate_id == $child->id)
                                                <a href="" data-target="{{$video->link}}" class="list-video overlay d-flex {{ $index == 1 ? 'active' : '' }}">
                                                    <button class="btn-youtube flex-center">
                                                        <img src="/temp/images/arrow.png" width="10" alt="">
                                                    </button>
                                                    <h3 class="title" disabled="">{{ $video->title }}</h3>
                                                </a>
                                                @php
                                                    $index++;
                                                @endphp
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                @php
                                    $index = 1;
                                    $index++; // Tăng giá trị của biến index sau mỗi lần lặp
                                @endphp
                        @endforeach
                        @endif
                    </div>
                @endforeach
            <!-- TEST -->
                <!-- COMMENT -->
                <div class="comment container-width">
                    <div class="title mx-auto position-relative">Hỏi Đáp Của Khách Hàng
                        <img class="position-absolute" src="temp/images/icon-ask.png" alt="">
                    </div>
                    <!-- TEST -->
                    <form id="boxCommentForm" class="comment-box" data-action="{{route('sendComment')}}">
                        @csrf
                        <div class="form-comment w-100">
                            <div class="form-group d-flex">
                                <div class="form-group__item name w-100">
                                    <input type="text" name="user_name" placeholder="Nhập họ tên *" class="input-field  w-100" data-require="Vui lòng nhập họ tên!">
                                </div>
                                <div class="form-group__item email w-100">
                                    <input type="email" name="user_email" placeholder="Nhập Email *" class="input-field  w-100" data-require="Vui lòng nhập Email!">
                                </div>
                            </div>
                            <textarea name="comment_content" class="input-field textarea-note w-100" id="" rows="5" placeholder="Nhập bình luận *" data-require="Vui lòng nhập nội dung!"></textarea>
                        </div>
                        <button type="submit" class="send-comment">Gửi bình luận</button>
                    </form>
                    <!-- TEST -->





                    <div class="comment-list">
                        @foreach($comments->sortByDesc('created_at') as $comment)
                            @if($comment->parent_comment_id == null)
                                <div class="comment-user ">
                                    <p class="id_user d-none" >{{ $comment->id }}</p>
                                    <div class="d-flex" style="align-items: flex-start;">
                                        <img src="temp/images/Accountcircle.png" class="comment-user__img" alt="">
                                        <div class="comment-user__infor">
                                            <p class="name">{{ $comment->user_name  }}</p>
                                            <p class="type">{{ $comment->comment_content }}</p>
                                        </div>
                                    </div>
                                    <div class="reply">
                                        <p class="reply-text">
                                            <a class="reply-text__link" href="">
                                                Trả lời
                                                <span class="id_user d-none" >{{ $comment->id }}</span>
                                            </a>
                                        </p>
                                        <!-- TEST -->
                                        <form  id="boxCommentFormReply_{{ $comment->id }}" class="comment-box child d-none" data-action="{{route('sendComment')}}" style="background: #FFFFFFB2">
                                            <p id="{{ $comment->id }}" class="boxCommentFormReplyID d-none"></p>
                                            @csrf
                                            <input type="hidden" name="parent_comment_id" value="{{ $comment->id }}"> <!-- Đặt parent_comment_id -->
                                            <div class="form-comment w-100">
                                                <div class="form-group d-flex">
                                                    <div class="form-group__item name w-100">
                                                        <input type="text" name="user_name" placeholder="Nhập họ tên *" class="input-field  w-100" data-require="Vui lòng nhập họ tên!">
                                                    </div>
                                                    <div class="form-group__item email w-100">
                                                        <input type="email" name="user_email" placeholder="Nhập Email *" class="input-field  w-100" data-require="Vui lòng nhập Email!">
                                                    </div>
                                                </div>
                                                <textarea name="comment_content" class="input-field textarea-note w-100" id="" rows="5" placeholder="Nhập bình luận *" data-require="Vui lòng nhập nội dung!"></textarea>
                                            </div>
                                            <button type="submit" class="send-comment">Gửi bình luận</button>
                                        </form>
                                        <!-- TEST -->
                                        @if($comment->hasChildren()) <!-- Kiểm tra nếu có comment con -->
                                            <div class="reply-box">
                                                @php
                                                    $comment_childs = $comments;
                                                @endphp
                                                <div class="comment-list__child-{{ $comment->id }}">
                                                    @foreach($comment_childs->sortByDesc('created_at') as $comment_child)
                                                        @if($comment_child->parent_comment_id == $comment->id)
                                                          <div style="margin-bottom: 30px">
                                                              <div class="d-flex reply-infor" style="align-items: flex-start;">
                                                                  <img src="temp/images/Accountcircle.png" class="comment-user__img" alt="">
                                                                  <p class="name">{{ $comment_child->user_name }}</p>
                                                              </div>
                                                              <p class="reply-content">
                                                                  {{ $comment_child->comment_content }}
                                                              </p>
                                                          </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- ADVISE -->
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
                        <form data-action="{{ route('sendFeedBack') }}" method="post" id="feedBackForm" class="mx-auto">
                            @csrf
                            <div class="form-group flex-center-between">
                                <div class="form-group__item w-100 position-relative">
                                    <input name="name" type="text" placeholder="Họ và tên *" class="input-field w-100 h-100 name" data-require="Vui lòng nhập họ tên!">
                                    <img src="temp/images/iconuser.png" alt="" class="position-absolute">
                                </div>
                                <div class="form-group__item w-100 position-relative">
                                    <input name="email" type="email" placeholder="Mail *" class="input-field w-100 h-100 name" data-require="Vui lòng nhập Email!">
                                    <img src="temp/images/iconemail.png" alt="" class="position-absolute">
                                    <span class="error-email d-none">Chưa nhập đúng kiểu Email!</span>
                                </div>
                            </div>
                            <div class="form-group middle flex-center-between">
                                <div class="form-group__item w-100 position-relative">
                                    <input name="phone" type="text" placeholder="Điện thoại *" class="input-field w-100 h-100 name" data-require="Vui lòng nhập Số điện thoại!">
                                    <img src="temp/images/iconphone.png" alt="" class="position-absolute">
                                </div>
                                <div class="form-group__item w-100 position-relative">
                                    <input name="address" type="text" placeholder="Địa chỉ *" class="input-field w-100 h-100 name" data-require="Vui lòng nhập địa chỉ!">
                                    <img src="temp/images/iconlocation.png" alt="" class="position-absolute">
                                </div>
                            </div>
                            <div class="textarea position-relative">
                                <img src="temp/images/iconask.png" alt="" class="position-absolute img-ask">
                                <textarea name="contents" class="input-field textarea-note w-100" id="" rows="14" placeholder="Câu hỏi *" data-require="Vui lòng nhập nội dung!"></textarea>
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
                            <input type="text" placeholder="Từ khóa tìm kiếm" class="h-100 w-100 name">
                            <svg class="position-absolute" width="35" height="35" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
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
