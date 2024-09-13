<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">

    <!-- Page Title -->
    <title>محدثه یزدانی</title>


    <!-- Meta Tags -->
    <meta name="description"
          content="صفحه رزومه و اطلاعات کاری محدثه یزدانی،تدوینگری با اشتیاق و پر از استعداد،آماده برای تدوین ویدیو های شما!">
    <meta name="keywords"
          content="تدوین, resume, editor, profile, personal page,رزومه, فتوشاپ ,Premier, Inshot, Capcut, Photoshop, creative, design">
    <meta name="author" content="Mohadesseh Yazdani, pgamirmahdi@gmail.com">
    <meta name="google-site-verification" content="v_S1GDlfemB2nvRvLj-N4uwVRxrrxJlMJi-_i4EnaHo" />
    <meta name="copyright" content="امیرمهدی اسدی | محدثه یزدانی">
    <meta name="designer" content="امیرمهدی اسدی"/>
    <meta name="owner" content="امیرمهدی اسدی | محدثه یزدانی"/>
    <meta name="robots" content="index, follow"/>
    <meta name="Classification" content="editor"/>
    <meta name="rating" content="General"/>
    <meta property="og:type" content="website">
    <meta property="og:title" content="محدثه یزدانی">
    <meta property="og:description"
          content="صفحه رزومه و اطلاعات کاری محدثه یزدانی،تدوینگری با اشتیاق و پر از استعداد،آماده برای تدوین ویدیو های شما!">
    <meta property="og:site_name" content="محدثه یزدانی">
    {{--    <meta property="og:image" content=”{{asset('assets/media/image/screenshots/Screenshot3.png')}}”/>--}}
    <meta property="og:locale" content="fa_IR">
    <meta name="theme-color" content="#0ebfff">
    <meta property="og:url" content="https://moyazdani.ir">
    <link rel="canonical" href="https://moyazdani.ir">
    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- Template Favicon & Icons Start -->
    <link rel="icon" href="{{asset('assets/landing/img/favicon/favicon.ico')}}" sizes="any">
    <link rel="icon" href="{{asset('assets/landing/img/favicon/icon.png')}}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{asset('assets/img/favicon/apple-touch-icon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--    <link rel="manifest" href="img/favicon/manifest.webmanifest">--}}
    <!-- Template Favicon & Icons End -->

    <!-- Template Styles Start -->
    <link rel="stylesheet" href="{{asset('assets/landing/css/loaders/loader.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/landing/css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/landing/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/landing/css/font.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Template Styles End -->
</head>

<body>

<!-- Loader Start -->
<div id="loader" class="loader">
    <div id="loaderContent" class="loader__content">
        <div class="loader__shadow"></div>
        <div class="loader__box"></div>
    </div>
</div>
<!-- Loader End -->

<!-- Header Start -->
<header id="header" class="header d-flex justify-content-between">

    <!-- Navigation Menu Start -->
    <div class="header__navigation">
        <nav id="menu" class="menu">
            <ul class="menu__list d-flex justify-content-start">
                <li class="menu__item">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <a class="menu__link btn" href="#home">
                            <span class="menu__caption">{{auth()->user()->fullname()}}</span>
                            <i class="ph-bold ph-house-simple"></i>
                        </a>
                    @else
                        <a class="menu__link btn" href="{{route('login')}}">
                            <span class="menu__caption">ورود</span>
                            <i class="ph-bold ph-house-simple"></i>
                        </a>
                    @endif
                </li>
                <li class="menu__item">
                    <a class="menu__link btn" href="#portfolio">
                        <span class="menu__caption">نمونه کارها</span>
                        <i class="ph-bold ph-squares-four"></i>
                    </a>
                </li>
                <li class="menu__item">
                    <a class="menu__link btn" href="#about">
                        <span class="menu__caption">درباره من</span>
                        <i class="ph-bold ph-user"></i>
                    </a>
                </li>
                <li class="menu__item">
                    <a class="menu__link btn" href="#resume">
                        <span class="menu__caption">رزومه</span>
                        <i class="ph-bold ph-article"></i>
                    </a>
                </li>
                <li class="menu__item">
                    <a class="menu__link btn" href="#contact">
                        <span class="menu__caption">تماس با من</span>
                        <i class="ph-bold ph-envelope"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Navigation Menu End -->


    <!-- Header Controls Start -->
    <div class="header__controls d-flex justify-content-end">
        <button id="color-switcher" class="color-switcher header__switcher btn" type="button" role="switch"
                aria-label="light/dark mode" aria-checked="true"></button>
        @if(isset($resume) && is_iterable($resume))
            @foreach($resume as $resume7) <a id="notify-trigger" class="header__trigger btn"
                                             href="mailto:@if($resume7->email){{$resume7->email}} @else pgamirmahdi@gmail.com @endif">
                <span class="trigger__caption">ارتباط با من</span>
                <i class="ph-bold ph-chat-dots"></i>
            </a>@endforeach @endif
    </div>
    <!-- Header Controls End -->

</header>
<!-- Header End -->

<!-- Gradient Background Start -->
<div class="gradient-background">
    <div class="blur"></div>
    <div class="blur"></div>
    <div class="blur"></div>
</div>
<!-- Gradient Background End -->

<!-- Avatar Side Block Start -->
<div id="avatar" class="avatar">
    <div class="avatar__container d-flex flex-column justify-content-lg-between">
        <!-- image and logo -->
        <div class="avatar__block">
            <div class="avatar__logo d-flex gap-4 align-items-center">
                <div class="logo__image">
                    <!-- Your Logo Here!!! -->
                    <img src="{{asset('assets/landing/img/favicon/icon.png')}}" alt="Profile">
                    {{--                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="85px" height="85px"--}}
                    {{--                         viewBox="0 0 85 85"--}}
                    {{--                         style="enable-background:new 0 0 85 85;" xml:space="preserve" class="gradient-fill">--}}
                    {{--            <style type="text/css">--}}
                    {{--                .gradient-fill {--}}
                    {{--                    fill: url(#gradientFill);--}}
                    {{--                }--}}
                    {{--            </style>--}}
                    {{--                        <g>--}}
                    {{--                            <linearGradient id="gradientFill" gradientUnits="userSpaceOnUse" x1="9.9604" y1="75.0338" x2="75.0387"--}}
                    {{--                                            y2="9.9555">--}}
                    {{--                                <stop offset="0" style="stop-color:var(--accent)"/>--}}
                    {{--                                <stop offset="1" style="stop-color:var(--secondary)"/>--}}
                    {{--                            </linearGradient>--}}
                    {{--                            <path class="gradient-fill"--}}
                    {{--                                  d="M51,0H34C15.2,0,0,15.2,0,34v17c0,14.3,8.9,26.6,21.4,31.6c0,0,0,0,0,0l0,0C25.3,84.1,29.5,85,34,85h17 c6,0,11.7-1.6,16.6-4.3c0.1-0.1,0.2-0.1,0.3-0.2C78.1,74.6,85,63.6,85,51V34C85,15.2,69.8,0,51,0z M83,51c0,10.7-5.3,20.2-13.4,26 v-2.5v-3.9h3.9v-3.9h-3.9v-3.9h3.9v-3.9h-3.9H67v-3.9V51h-3.9v3.9v3.9h2.6v3.9v3.9v3.9h-3.9h-3.9v3.9h3.9h3.9v3.9v1 C61.3,81.7,56.3,83,51,83H34c-4.5,0-8.7-0.9-12.6-2.6v-2v-3.9h3.9h3.9v-3.9h-3.9h-3.9v-3.9v-3.9v-3.9H24v-3.9V51h-3.9v3.9v3.9h-2.6 h-3.9v3.9h3.9v3.9h-3.9v3.9h3.9v3.9v3.9C8.2,72.8,2,62.6,2,51V34C2,16.4,16.4,2,34,2h17c17.6,0,32,14.4,32,32V51z M50.1,54.9H54 v3.9v3.9h-3.9v-3.9V54.9z M33.1,54.9H37v3.9v3.9h-3.9v-3.9V54.9z M27.9,51H24v-3.9v-3.9v-3.9h3.9v3.9v3.9V51z M31.8,39.3h-3.9v-3.9 h3.9V39.3z M31.8,43.2v-3.9h3.9v3.9H31.8z M63.1,47.1V51h-3.9v-3.9v-3.9v-3.9h3.9v3.9V47.1z M35.7,47.1v-3.9h3.9h3.9h3.9h3.9v3.9 h-3.9h-3.9h-3.9H35.7z M59.2,39.3h-3.9v-3.9h3.9V39.3z M55.3,43.2h-3.9v-3.9h3.9V43.2z"/>--}}
                    {{--                        </g>--}}
                    {{--          </svg>--}}
                </div>
                <div class="logo__caption">
                    <p>{{$user->name}}<br>{{$user->family}}</p>
                </div>
            </div>
            <div class="avatar__image">
                @if($user->profile)
                    <img src="{{ route('us.file.show', ['filename' => basename($user->profile)]) }}"
                         alt="Braxton - Personal Portfolio & Resume HTML Template Avatar">
                @else
                    <img src="https://mixdesign.club/themeforest/braxton/img/avatars/1024x1024_a02.webp"
                         alt="Braxton - Personal Portfolio & Resume HTML Template Avatar">
                @endif
            </div>
        </div>
        <!-- data caption #1 -->
        <div class="avatar__block">
            <h6>
                <small class="top">علاقه:</small>
                {{$user->role->label}}
            </h6>
        </div>
        <!-- data caption #2 -->
        <div class="avatar__block">
            <h6>
                <small class="top"> شهر من:</small>
                @foreach($resume as $resume5)
                    @if(isset($resume5->city))
                        {{$resume5->city}}
                    @else
                        نامشخص
                    @endif
                @endforeach
            </h6>
        </div>
        <!-- socials and CTA button -->
        <div class="avatar__block">
            <div class="avatar__socials">
                <ul class="socials-square d-flex justify-content-between">
                    @if(isset($resume) && is_iterable($resume))
                        @foreach($resume as $resume5)
                            @if(($resume5->instagram))
                                <li class="socials-square__item">
                                    <a class="socials-square__link btn" href="https://instagram.com/{{ $resume5->instagram }}"
                                       target="_blank"><i
                                            class="ph-bold ph-instagram-logo"></i></a>
                                </li>
                            @endif
                            @if($resume5->telegram)
                                <li class="socials-square__item">
                                    <a class="socials-square__link btn" href="https://t.me/{{ $resume5->telegram }}"
                                       target="_blank"><i
                                            class="ph-bold ph-telegram-logo"></i></a>
                                </li>
                            @endif
                            @if($resume5->phone)
                                <li class="socials-square__item">
                                    <a class="socials-square__link btn" href="https://wa.me/{{ $resume5->phone }}"
                                       target="_blank"><i
                                            class="ph-bold ph-whatsapp-logo"></i></a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="avatar__btnholder">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a class="btn btn-default btn-fullwidth btn-hover btn-hover-accent mt-3" href="{{route('panel')}}"
                       target="_blank">
                        <span class="btn-caption">پنل کاربری</span>
                    </a>
                @else
                    <a class="btn btn-default btn-fullwidth btn-hover btn-hover-accent mt-3" href="#contact"
                       target="_blank">
                        <span class="btn-caption">پیام بگذارید!</span>
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Avatar Side Block End -->


<!-- Page Content Start -->
<div id="content" class="content">
    <div class="content__wrapper">

        <!-- Intro Section Start -->
        <section id="home" class="main intro">

            <!-- شروع عنوان -->
            <div id="headline" class="headline d-flex align-items-start flex-column" data-speed="1">
                <p class="headline__subtitle animate-headline">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="13px" height="13px"
                         viewBox="0 0 13 13" fill="currentColor">
                        <path fill="currentColor" d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
        C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
        C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z"/>
                    </svg>
                    <span>رزومه من!</span>
                </p>
                <h1 class="headline__title animate-headline"> من {{$user->name . ' ' . $user->family}} هستم
                    <br>{{$user->role->label}}</h1>
                <div class="headline__btnholder d-flex flex-column flex-sm-row">
                    <a class="btn mobile-vertical btn-default btn-hover btn-hover-accent-mobile animate-headline"
                       href="#portfolio">
                        <span class="btn-caption">نمونه کار هام</span>
                        <i class="ph-bold ph-squares-four"></i>
                    </a>
                    @if(isset($resume) && is_iterable($resume))
                        @foreach($resume as $resume6)
                            @if($resume6->file)
                                <a class="btn mobile-vertical btn-default btn-hover btn-hover-outline-mobile animate-headline"
                                   href="{{ route('res.file.show', ['filename' => basename($resume6->file)]) }}">
                                    <span class="btn-caption">دانلود رزومه</span>
                                    <i class="ph-bold ph-download-simple"></i>
                                </a>
                            @else
                                <p class="btn mobile-vertical btn-default btn-hover btn-hover-outline-mobile animate-headline">
                                    رزومه موجود نیست</p>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            <!-- پایان عنوان -->


            <div class="rotating-btn">
                <a href="#portfolio" class="rotating-btn__link slide-down">
                    <!-- SVG rotating text -->

                    <!-- arrow icon -->
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px" viewBox="0 0 120 120"
                         style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px) rotate(229.67deg);"
                         xml:space="preserve" class="animate-rotation" data-value="360">
                <defs>
                    <path id="textPath"
                          d="M110,59.5c0,27.6-22.4,50-50,50s-50-22.4-50-50s22.4-50,50-50S110,31.9,110,59.5z"></path>
                </defs>
                        <g>
                            <use xlink:href="#textPath" fill="none"></use>
                            <text>
                                <!-- متن دکمه اینجا!!! -->
                                <textPath xlink:href="#textPath">بیشتر ببینید * بیشتر ببینید * بیشتر ببینید * بیشتر
                                    ببینید *
                                </textPath>
                            </text>
                        </g>
              </svg>
                    <i class="ph-bold ph-arrow-down"></i>
                </a>
            </div>

        </section>
        <!-- Intro Section End -->

        <!-- Portfolio Section Start -->
        <section id="portfolio" class="inner inner-first portfolio">

            <!-- بلوک محتوا - عنوان H2 شروع -->
            <div class="content__block section-grid-title">
                <p class="h2__subtitle animate-in-up">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="13px" height="13px"
                         viewBox="0 0 13 13" fill="currentColor">
                        <path fill="currentColor" d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
                  C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
                  C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z"/>
                    </svg>
                    <span>نمونه کارها</span>
                </p>
                <h2 class="h2__title animate-in-up">نمایش پروژه‌های ویژه‌ام</h2>
            </div>
            <!-- بلوک محتوا - عنوان H2 پایان -->

            <!-- بلوک محتوا - گالری اعمال شروع -->
            <div class="content__block grid-block">
                <div class="container-fluid px-0 inner__gallery">
                    <div class="row gx-0 my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                        @if(isset($example) && is_iterable($example))
                            @foreach($example as $examplee)
                                <!-- آیتم تک گالری کارها شروع -->
                                <figure class="col-12 col-md-6 gallery__item grid-item animate-card-2"
                                        itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    @if($examplee->file)
                                        @php
                                            $fileExtension = pathinfo($examplee->file, PATHINFO_EXTENSION);
                                        @endphp

                                        @if(in_array($fileExtension, ['mp4', 'avi', 'mov']))
                                            {{-- بررسی فرمت‌های ویدیو --}}
                                            <a href="{{ route('exa.file.show', ['filename' => basename($examplee->file)]) }}"
                                               data-image="{{ route('exa.file.show', ['filename' => basename($examplee->file)]) }}"
                                               class="gallery__link"
                                               itemprop="contentUrl" data-size="1400x1400">
                                                <video width="320" height="240" controls>
                                                    <source
                                                        src="{{ route('exa.file.show', ['filename' => basename($examplee->file)]) }}"
                                                        type="video/{{ $fileExtension }}">
                                                    مرورگر شما از پخش ویدیو پشتیبانی نمی‌کند.
                                                </video>
                                            </a>
                                        @else
                                            <a href="{{ route('exa.file.show', ['filename' => basename($examplee->file)]) }}"
                                               data-image="{{ route('exa.file.show', ['filename' => basename($examplee->file)]) }}"
                                               class="gallery__link"
                                               itemprop="contentUrl" data-size="1400x1400">
                                                <img
                                                    src="{{ route('exa.file.show', ['filename' => basename($examplee->file)]) }}"
                                                    class="gallery__image"
                                                    itemprop="thumbnail" alt="توضیحات تصویر">
                                            </a>
                                        @endif
                                    @else
                                        <a href="https://mixdesign.club/themeforest/braxton/img/works/800_w03-thumb.webp"
                                           data-image="https://mixdesign.club/themeforest/braxton/img/works/800_w03-thumb.webp"
                                           class="gallery__link"
                                           itemprop="contentUrl" data-size="1400x1400">
                                            <img
                                                src="https://mixdesign.club/themeforest/braxton/img/works/800_w03-thumb.webp"
                                                class="gallery__image"
                                                itemprop="thumbnail" alt="توضیحات تصویر">
                                        </a>
                                    @endif
                                    <figcaption class="gallery__descr" itemprop="caption description">
                                        <h5>{{ $examplee->title }}</h5>
                                        <div class="card__tags d-flex flex-wrap">
                                            @php
                                                $properties = json_decode($examplee->properties, true);
                                            @endphp
                                            @foreach($properties as $property)
                                                <span class="rounded-tag opposite">{{$property}}</span>
                                            @endforeach

                                        </div>
                                        <p class="small">{{ $examplee->description}}
                                        </p>
                                    </figcaption>
                                </figure>
                                <!-- آیتم تک گالری کارها پایان -->
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <!-- بلوک محتوا - گالری اعمال پایان -->

        </section>

        <!-- Portfolio Section End -->

        <!-- About Section Start -->

        <!-- About Section Start -->
        <section id="about" class="inner about">

            <!-- بلوک محتوا - عنوان H2 شروع -->
            <div class="content__block section-grid-title">
                <p class="h2__subtitle animate-in-up">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="13px" height="13px"
                         viewBox="0 0 13 13" fill="currentColor">
                        <path fill="currentColor" d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
                  C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
                  C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z"/>
                    </svg>
                    <span>درباره من</span>
                </p>
                <h2 class="h2__title animate-in-up">تبدیل مسائل پیچیده به طراحی‌های ساده</h2>
            </div>
            <!-- بلوک محتوا - عنوان H2 پایان -->

            <!-- بلوک محتوا - دستاوردها شروع -->
            <div class="content__block grid-block">
                <div class="achievements d-flex flex-column flex-md-row align-items-md-stretch">
                    <!-- آیتم تک دستاورد -->
                    <div class="achievements__item d-flex flex-column grid-item animate-card-3">
                        <div class="achievements__card">
                            <p class="achievements__number">+{{$customer->count()}}</p>
                            <p class="achievements__descr">مشتری خوشحال</p>
                        </div>
                    </div>
                    <!-- آیتم تک دستاورد -->
                    <div class="achievements__item d-flex flex-column grid-item animate-card-3">
                        <div class="achievements__card">
                            <p class="achievements__number">+{{ number_format($totalDaysWorked / 365, 1) }}
                            </p>
                            <p class="achievements__descr">سال‌های تجربه</p>
                        </div>
                    </div>
                    <!-- آیتم تک دستاورد -->
                    <div class="achievements__item d-flex flex-column grid-item animate-card-3">
                        <div class="achievements__card">
                            <p class="achievements__number">+{{$resume->count()}}</p>
                            <p class="achievements__descr">پروژه انجام شده</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- بلوک محتوا - دستاوردها پایان -->

            <!-- بلوک محتوا - داده‌های درباره من شروع -->
            <div class="content__block grid-block block-large">
                <div class="container-fluid p-0">
                    <div class="row g-0 justify-content-between">

                        <!-- توضیحات درباره من شروع -->
                        <div class="col-12 col-xl-8 grid-item about-descr">
                            @foreach($resume as $resume8)
                                <p class="about-descr__text animate-in-up">
                                    {{$resume8->description}}
                                </p>
                                <div class="btn-group about-descr__btnholder animate-in-up">
                                    @if($resume8->file)
                                        <a class="btn mobile-vertical btn-default btn-hover btn-hover-accent"
                                           href="{{ route('res.file.show', ['filename' => basename($resume8->file)]) }}">
                                            <span class="btn-caption">دانلود رزومه</span>
                                            <i class="ph-bold ph-download-simple"></i>
                                        </a>
                                    @else
                                        <p class="btn mobile-vertical btn-default btn-hover btn-hover-outline-mobile animate-headline">
                                            رزومه موجود نیست</p>
                                    @endif
                                </div>
                        </div>
                        @endforeach
                        <!-- توضیحات درباره من پایان -->

                        <!-- اطلاعات درباره من شروع -->
                        <div class="col-12 col-xl-4 grid-item about-info">
                            <div class="about-info__item animate-in-up">
                                <h6>
                                    <small class="top">نام</small>
                                    {{$user->name}}
                                </h6>
                            </div>
                            <div class="about-info__item animate-in-up">
                                <h6>
                                    <small class="top">تلفن</small>
                                    <a class="text-link-bold" href="tel:{{$user->phone}}">{{$user->phone}}</a>
                                </h6>
                            </div>
                            <div class="about-info__item animate-in-up">
                                <h6>
                                    <small class="top">ایمیل</small>
                                    @foreach($resume as $resume1)
                                        <a class="text-link-bold"
                                           href="mailto:@if($resume1->email){{$resume1->email}} @else pgamirmahdi@gmail.com @endif">@if($resume1->email)
                                                {{$resume1->email}}
                                            @else
                                                pgamirmahdi@gmail.com
                                            @endif</a>
                                    @endforeach
                                </h6>
                            </div>
                            <div class="about-info__item animate-in-up">
                                <h6>
                                    <small class="top">شهر</small>
                                    @foreach($resume as $resume4)
                                        <a class="text-link-bold" href="#"
                                           target="_blank">{{$resume4->city}}</a> @endforeach
                                </h6>
                            </div>
                        </div>
                        <!-- اطلاعات درباره من پایان -->

                    </div>
                </div>
            </div>
            <!-- بلوک محتوا - داده‌های درباره من پایان -->

            <!-- بلوک محتوا - خدمات شروع -->
            <div class="content__block grid-block">
                <div class="container-fluid p-0">
                    <div class="row g-0 align-items-stretch cards">
                        @foreach($skills as $skill)
                            <!-- آیتم‌های کارت خدمات شروع -->
                            <div class="col-12 col-md-6 cards__item grid-item animate-card-2">
                                <div class="cards__card d-flex flex-column">
                                    <div class="cards__descr">
                                        <h4 class="cards__title animate-in-up">{{$skill->title}}</h4>
                                        <div class="cards__tags d-flex flex-wrap animate-in-up">
                                            @php
                                                $properties = json_decode($skill->properties, true);
                                            @endphp
                                            @foreach($properties as $property)
                                                <span class="rounded-tag tag-outline">{{$property}}</span>
                                            @endforeach

                                        </div>
                                        <p class="small cards__text animate-in-up">{{$skill->description}}</p>
                                    </div>
                                    <div class="cards__image d-flex animate-in-up">
                                        @if($skill->file)
                                            <img
                                                src="{{ route('ski.file.show', ['filename' => basename($skill->file)]) }}"
                                                alt="تصویر مهارت">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- بلوک محتوا - خدمات پایان -->

        </section>
        <!-- About Section End -->

        <!-- Resume Section Start -->
        <section id="resume" class="inner resume">

            {{--            <!-- Content Block - H2 Section Title Start -->--}}
            {{--            <div class="content__block block-large">--}}
            {{--                <p class="h2__subtitle animate-in-up">--}}
            {{--                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="13px" height="13px"--}}
            {{--                         viewBox="0 0 13 13" fill="currentColor">--}}
            {{--                        <path fill="currentColor" d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8--}}
            {{--          C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7--}}
            {{--          C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z"/>--}}
            {{--                    </svg>--}}
            {{--                    <span>رزومه</span>--}}
            {{--                </p>--}}
            {{--                <h2 class="h2__title animate-in-up">آموزش و تجربه عملی</h2>--}}
            {{--                <p class="h2__text animate-in-up">--}}
            {{--                    "برای آنچه که می‌خواهید به نظر برسید، باید آن باشید" - یا اگر دوست دارید ساده‌تر بگویم - هرگز به--}}
            {{--                    خودتان تصور نکنید که نباید به غیر از آنچه که به نظر دیگران می‌آید شما بودید یا ممکن بودید که نباید--}}
            {{--                    به نظر آنها به چیزی که شما بودید یا--}}
            {{--                    <a href="#0" class="text-link">ممکن بود تا</a>--}}
            {{--                    اگر وجود داشت که به غیر از آنچه که آنها به نظر می‌رسید به نظر می‌رسد.--}}
            {{--                </p>--}}
            {{--            </div>--}}
            {{--            <!-- Content Block - H2 Section Title End -->--}}

            {{--            <!-- Content Block - Education Start -->--}}
            {{--            <div class="content__block block-large">--}}

            {{--                <!-- H3 Block Start -->--}}
            {{--                <div class="section-h3">--}}
            {{--                    <h3 class="h3__title animate-in-up">آموزش من</h3>--}}
            {{--                </div>--}}
            {{--                <!-- H3 Block End -->--}}

            {{--                <!-- Education Lines Start -->--}}
            {{--                <div class="container-fluid p-0 resume-lines">--}}
            {{--                    <!-- education single item -->--}}
            {{--                    <div class="row g-0 resume-lines__item animate-in-up">--}}
            {{--                        <div class="col-12 col-md-2">--}}
            {{--                            <span class="resume-lines__date animate-in-up">1394 - 1395</span>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-5">--}}
            {{--                            <h5 class="resume-lines__title animate-in-up">تمرکز بر نقاشی</h5>--}}
            {{--                            <p class="resume-lines__source animate-in-up">دوره توسط--}}
            {{--                                <a href="#0" class="text-link-bold" target="_blank">آکادمی هنر نیویورک</a>--}}
            {{--                            </p>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-5">--}}
            {{--                            <p class="small resume-lines__descr animate-in-up">دوره‌های نقاشی گرافیکی که اصول اساسی--}}
            {{--                                نقاشی را ارائه می‌دهند.</p>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <!-- education single item -->--}}
            {{--                    <div class="row g-0 resume-lines__item animate-in-up">--}}
            {{--                        <div class="col-12 col-md-2">--}}
            {{--                            <span class="resume-lines__date animate-in-up">1398 - 1400</span>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-5">--}}
            {{--                            <h5 class="resume-lines__title animate-in-up">تخصص طراحی UI/UX</h5>--}}
            {{--                            <p class="resume-lines__source animate-in-up">دوره توسط--}}
            {{--                                <a href="#0" class="text-link-bold" target="_blank">موسسه هنر کالیفرنیا</a>--}}
            {{--                            </p>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-5">--}}
            {{--                            <p class="small resume-lines__descr animate-in-up">تحقیق، طراحی و ساخت نمونه‌های کاربردی و--}}
            {{--                                قدرتمند با ویژگی‌های بصری.</p>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <!-- education single item -->--}}
            {{--                    <div class="row g-0 resume-lines__item animate-in-up">--}}
            {{--                        <div class="col-12 col-md-2">--}}
            {{--                            <span class="resume-lines__date animate-in-up">1401</span>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-5">--}}
            {{--                            <h5 class="resume-lines__title animate-in-up">طراح UI/UX</h5>--}}
            {{--                            <p class="resume-lines__source animate-in-up">دوره توسط--}}
            {{--                                <a href="#0" class="text-link-bold" target="_blank">کورسرا</a>--}}
            {{--                            </p>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-5">--}}
            {{--                            <p class="small resume-lines__descr animate-in-up">این دوره درباره کامل کردن فرآیند طراحی از--}}
            {{--                                ابتدا تا انتها می‌باشد.</p>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <!-- Education Lines End -->--}}

            {{--            </div>--}}
            <!-- Content Block - Education End -->

            <!-- Content Block - Experience Start -->
            <div class="content__block block-large">

                <!-- H3 Block Start -->
                <div class="section-h3">
                    <h3 class="h3__title animate-in-up">تجربه‌های کاری من</h3>
                </div>
                <!-- H3 Block End -->

                <!-- Experience Lines Start -->
                <div class="container-fluid p-0 resume-lines">
                    <!-- experience single item -->
                    @foreach($jobHistories as $jobHistory)
                        <div class="row g-0 resume-lines__item animate-in-up">
                            <div class="col-12 col-md-2">
                                <span
                                    class="resume-lines__date animate-in-up">{{$jobHistory->from_date}} - {{$jobHistory->to_date}}</span>
                            </div>
                            <div class="col-12 col-md-5">
                                <h5 class="resume-lines__title animate-in-up">{{$jobHistory->department}}</h5>
                                <p class="resume-lines__source animate-in-up">در
                                    <a href="#0" class="text-link-bold" target="_blank">{{$jobHistory->company}}</a>
                                </p>
                            </div>
                            <div class="col-12 col-md-5">
                                <p class="small resume-lines__descr animate-in-up">{{$jobHistory->description}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Experience Lines End -->

            </div>
            <!-- Content Block - Experience End -->

            <!-- Content Block - Tools List Start -->
            <div class="content__block grid-block block-large">
                <!-- H3 Block Start -->
                <div class="section-h3">
                    <h3 class="h3__title animate-in-up">علاقه مندی ها</h3>
                </div>
                <!-- H3 Block End -->

                <!-- Tools List Start -->
                <div class="tools-cards d-flex justify-content-start flex-wrap">
                    @if(isset($favorites)&& is_iterable($favorites))
                        @foreach($favorites as $favorite)
                            <!-- tools simgle item -->
                            <div class="tools-cards__item d-flex grid-item-s animate-card-5">
                                <div class="tools-cards__card">
                                    <img class="tools-cards__icon animate-in-up"
                                         src="{{ route('fav.file.show', ['filename' => basename($favorite->picture)]) }}"
                                         alt="Tools Icon">
                                    <h6 class="tools-cards__caption animate-in-up">{{$favorite->title}}</h6>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <!-- Tools List End -->
                </div>
                <!-- Content Block - Tools List End -->
            </div>
        </section>

        <div class="content__block">

            <!-- Testimonials Slider Start -->
            {{--            <div class="testimonials-slider">--}}
            {{--                <!-- slider main container -->--}}
            {{--                <div class="swiper-testimonials">--}}
            {{--                    <!-- additional required wrapper -->--}}
            {{--                    <div class="swiper-wrapper">--}}
            {{--                        <!-- slides -->--}}
            {{--                        <div class="swiper-slide">--}}
            {{--                            <div class="testimonials-card animate-in-up">--}}
            {{--                                <div class="testimonials-card__tauthor d-flex animate-in-up">--}}
            {{--                                    <div class="tauthor__avatar">--}}
            {{--                                        <img--}}
            {{--                                            src="https://mixdesign.club/themeforest/braxton/img/avatars/400x400_t01.webp"--}}
            {{--                                            alt="نویسنده نظر">--}}
            {{--                                    </div>--}}
            {{--                                    <div class="tauthor__info d-flex flex-column justify-content-center">--}}
            {{--                                        <p class="tauthor__name">الکس تومیتو</p>--}}
            {{--                                        <p class="tauthor__position">مدیر برند در--}}
            {{--                                            <a href="#0" class="text-link-bold" target="_blank">طراحی آنی</a>--}}
            {{--                                        </p>--}}
            {{--                                        <div class="tauthor__rating d-flex">--}}
            {{--                                            <i class="ph-fill ph-star"></i>--}}
            {{--                                            <i class="ph-fill ph-star"></i>--}}
            {{--                                            <i class="ph-fill ph-star"></i>--}}
            {{--                                            <i class="ph-fill ph-star"></i>--}}
            {{--                                            <i class="ph-fill ph-star"></i>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="testimonials-card__descr animate-in-up">--}}
            {{--                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
            {{--                                        گرافیک است.--}}
            {{--                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط--}}
            {{--                                        فعلی تکنولوژی--}}
            {{--                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>--}}
            {{--                                </div>--}}
            {{--                                <div class="testimonials-card__btnholder animate-in-up">--}}
            {{--                                    <a class="btn mobile-vertical btn-line btn-transparent slide-right" href="#0">--}}
            {{--                                        <i class="ph-bold ph-arrow-right"></i>--}}
            {{--                                        <span class="btn-caption">صفحه پروژه</span>--}}
            {{--                                    </a>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="swiper-slide">--}}
            {{--                            <div class="testimonials-card animate-in-up">--}}
            {{--                                <div class="testimonials-card__tauthor d-flex animate-in-up">--}}
            {{--                                    <div class="tauthor__avatar">--}}
            {{--                                        <img--}}
            {{--                                            src="https://mixdesign.club/themeforest/braxton/img/avatars/400x400_t01.webp"--}}
            {{--                                            alt="نویسنده نظر">--}}
            {{--                                    </div>--}}
            {{--                                    <div class="tauthor__info d-flex flex-column justify-content-center">--}}
            {{--                                        <p class="tauthor__name">جنی آناناس</p>--}}
            {{--                                        <p class="tauthor__position">مدیر سئو در--}}
            {{--                                            <a href="#0" class="text-link-bold" target="_blank">افراد خلاق</a>--}}
            {{--                                        </p>--}}
            {{--                                        <div class="tauthor__rating d-flex">--}}
            {{--                                            <i class="ph-fill ph-star"></i>--}}
            {{--                                            <i class="ph-fill ph-star"></i>--}}
            {{--                                            <i class="ph-fill ph-star"></i>--}}
            {{--                                            <i class="ph-fill ph-star"></i>--}}
            {{--                                            <i class="ph-fill ph-star"></i>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <div class="testimonials-card__descr animate-in-up">--}}
            {{--                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
            {{--                                        گرافیک است.--}}
            {{--                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط--}}
            {{--                                        فعلی تکنولوژی--}}
            {{--                                        مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>--}}
            {{--                                </div>--}}
            {{--                                <div class="testimonials-card__btnholder animate-in-up">--}}
            {{--                                    <a class="btn mobile-vertical btn-line btn-transparent slide-right" href="#0">--}}
            {{--                                        <i class="ph-bold ph-arrow-right"></i>--}}
            {{--                                        <span class="btn-caption">صفحه پروژه</span>--}}
            {{--                                    </a>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <!-- navigation buttons -->--}}
            {{--                    <div>--}}
            {{--                        <div class="swiper-button-prev mxd-slider-btn-square mxd-slider-btn-square-prev animate-in-up">--}}
            {{--                            <a class="btn btn-square btn-square-s btn-outline slide-left" href="#0">--}}
            {{--                                <i class="ph-bold ph-caret-left"></i>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                        <div class="swiper-button-next mxd-slider-btn-square mxd-slider-btn-square-next animate-in-up">--}}
            {{--                            <a class="btn btn-square btn-square-s btn-outline slide-right" href="#0">--}}
            {{--                                <i class="ph-bold ph-caret-right"></i>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--            <!-- Testimonials Slider End -->--}}

            {{--        </div>--}}
            <!-- Content Block - Testimonials Slider End -->


            <!-- Contact Section Start -->
            <section id="contact" class="inner contact">

                <!-- Content Block - H2 Section Title Start -->
                <div class="content__block section-title">
                    <p class="h2__subtitle animate-in-up">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="13px" height="13px"
                             viewBox="0 0 13 13" fill="currentColor">
                            <path fill="currentColor" d="M5.6,12.6c-0.5-0.8-0.7-2.4-1.7-3.5c-1-1-2.7-1.2-3.5-1.7C-0.1,7-0.1,6,0.4,5.6c0.8-0.5,2.3-0.6,3.5-1.8
          C5,2.8,5.1,1.2,5.6,0.4C6-0.1,7-0.1,7.4,0.4c0.5,0.8,0.7,2.4,1.8,3.5c1.2,1.2,2.6,1.2,3.5,1.7c0.6,0.4,0.6,1.4,0,1.7
          C11.8,7.9,10.2,8,9.1,9.1c-1,1-1.2,2.7-1.7,3.5C7,13.1,6,13.1,5.6,12.6z"/>
                        </svg>
                        <span>تماس</span>
                    </p>
                    <h2 class="h2__title animate-in-up">با من تماس بگیرید!</h2>
                </div>
                <!-- Content Block - H2 Section Title End -->

                <!-- Content Block - Contact Form Start -->
                <div class="content__block grid-block block-grid-large">
                    <div class="form-container">

                        <!-- Reply Messages Start -->
                        <div class="form__reply centered text-center">
                            <i class="ph-bold ph-smiley reply__icon"></i>
                            <p class="reply__title">انجام شد!</p>
                            <span class="reply__text">بابت پیامتان سپاسگزارم. در اسرع وقت به شما پاسخ خواهم داد.</span>
                        </div>
                        <!-- Reply Messages End -->

                        <!-- Contact Form Start -->
                        <form class="form contact-form" action="{{ route('landing.store') }}" method="post">
                            @csrf
                            <!-- Hidden Required Fields -->
                            {{-- <input type="hidden" name="project_name" value="Starter Template"> --}}
                            {{-- <input type="hidden" name="admin_email" value="support@mixdesign.club"> --}}
                            {{-- <input type="hidden" name="form_subject" value="پیام فرم تماس"> --}}
                            <!-- END Hidden Required Fields-->

                            <div class="container-fluid p-0">
                                <div class="row gx-0">
                                    <!-- Name input -->
                                    <div class="col-12 col-md-6 form__item animate-in-up">
                                        <input type="text" name="name" placeholder="نام شما*" required value="{{ old('name') }}">
                                        @error('name')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Family name input -->
                                    <div class="col-12 col-md-6 form__item animate-in-up">
                                        <input type="text" name="family" placeholder="نام خانوادگی شما*" required value="{{ old('family') }}">
                                        @error('family')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Email input -->
                                    <div class="col-12 col-md-6 form__item animate-in-up">
                                        <input type="email" name="email" placeholder="ایمیل*" required value="{{ old('email') }}">
                                        @error('email')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Phone number input -->
                                    <div class="col-12 col-md-6 form__item animate-in-up">
                                        <input type="tel" name="number" placeholder="شماره تلفن*" required value="{{ old('number') }}">
                                        @error('number')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Description textarea -->
                                    <div class="col-12 form__item animate-in-up">
                                        <textarea name="description" placeholder="چند کلمه از شما*" required>{{ old('description') }}</textarea>
                                        @error('description')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Submit button -->
                                    <div class="col-12 form__item animate-in-up">
                                        <button class="btn btn-default btn-hover btn-hover-accent" type="submit">
                                            <span class="btn-caption">ارسال پیام</span>
                                            <i class="ph-bold ph-paper-plane-tilt"></i>
                                        </button>

                                        <!-- Success message -->
                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Contact Form End -->

                    </div>
                </div>
                <!-- Content Block - Contact Form End -->

                <!-- Content Block - Socials Cards Start -->
                <div class="content__block grid-block">
                    <div class="socials-cards d-flex justify-content-start flex-wrap">
                        <!-- socials item -->
                        <!-- socials item -->
                        <div class="socials-cards__item d-flex grid-item-s animate-card-5">
                            @if(isset($resume) && is_iterable($resume))
                                @foreach($resume as $resume2)
                                    @if($resume2->instagram)
                                        <div class="socials-cards__card m-2">
                                            <i class="ph-bold ph-instagram-logo"></i>
                                            <a class="socials-cards__link"
                                               href="https://www.instagram.com/{{ $resume2->instagram }}" target="_blank"></a>
                                        </div>
                                    @endif
                                    @if($resume2->telegram)
                                        <div class="socials-cards__card m-2">
                                            <i
                                                class="ph-bold ph-telegram-logo"></i>
                                            <a class="socials-cards__link" href="https://t.me/{{ $resume2->telegram }}"
                                               target="_blank"></a>
                                        </div>
                                    @endif
                                    @if($resume2->phone)
                                        <div class="socials-cards__card m-2">
                                            <i
                                                class="ph-bold ph-whatsapp-logo"></i>
                                            <a class="socials-cards__link" href="https://wa.me/{{ $resume2->phone }}"
                                               target="_blank"></a>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Content Block - Socials Cards End -->

                <!-- Content Block - Teaser Start -->
                <div class="content__block">
                    <div class="teaser">
                        <p class="teaser__text animate-in-up">برای آشنایی بیشتر با من، راجع به پروژه‌تان بگویید یا
                            <a class="text-link-bold"
                               href="#contact">به من یک شماره تلفن بدهید</a>
                            و من در اسرع وقت با شما تماس خواهم گرفت.
                        </p>
                    </div>
                </div>
                <!-- Content Block - Teaser End -->

                <!-- Content Block - Contact Data Start -->
                @if(isset($resume) && is_iterable($resume))
                    @foreach($resume as $resume3)
                        <div class="content__block">
                            <div class="container-fluid p-0 contact-lines animate-in-up">
                                <div class="row g-0 contact-lines__item">
                                    <!-- data item -->
                                    <div class="col-12 col-md-4 contact-lines__data">
                                        <p class="contact-lines__title animate-in-up">شهر</p>
                                        <p class="contact-lines__text animate-in-up">
                                            <a class="text-link-bold" href="https://maps.app.goo.gl/xMJXTEUeHkv6kYRQ6"
                                               target="_blank">{{$resume3->city}}</a>
                                        </p>
                                    </div>
                                    <!-- data item -->
                                    <div class="col-12 col-md-4 contact-lines__data">
                                        <p class="contact-lines__title animate-in-up">تلفن</p>
                                        <p class="contact-lines__text animate-in-up">
                                            <a class="text-link-bold" href="tel:+12127089400">{{$resume3->phone}}</a>
                                        </p>
                                    </div>
                                    <!-- data item -->
                                    <div class="col-12 col-md-4 contact-lines__data">
                                        <p class="contact-lines__title animate-in-up">ایمیل</p>
                                        <p class="contact-lines__text animate-in-up">
                                            <a class="text-link-bold"
                                               href="mailto:{{ $resume3->email ?? 'pgamirmahdi@gmail.com' }}">
                                                {{ $resume3->email ?? 'pgamirmahdi@gmail.com' }}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <!-- Content Block - Contact Data End -->

            </section>
            <!-- Contact Section End -->


        </div>
    </div>
    <!-- Page Content End -->

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
        It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close link-s" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share link-s" title="Share"></button>

                    <button class="pswp__button pswp__button--fs link-s" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom link-s" title="Zoom in/out"></button>

                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader-active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left link-s" title="Previous (arrow left)"></button>

                <button class="pswp__button pswp__button--arrow--right link-s" title="Next (arrow right)"></button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>
</div>
<!-- Load Scripts Start -->
<script src="{{asset('assets/landing/js/libs.min.js')}}"></script>
<script>
    const randomX = random(-400, 400);
    const randomY = random(-200, 200);
    const randomDelay = random(0, 50);
    const randomTime = random(20, 40);
    const randomTime2 = random(5, 12);
    const randomAngle = random(-30, 150);

    const blurs = gsap.utils.toArray(".blur");
    blurs.forEach((blur) => {
        gsap.set(blur, {
            x: randomX(-1),
            y: randomX(1),
            rotation: randomAngle(-1)
        });

        moveX(blur, 1);
        moveY(blur, -1);
        rotate(blur, 1);
    });

    function rotate(target, direction) {
        gsap.to(target, randomTime2(), {
            rotation: randomAngle(direction),
            ease: Sine.easeInOut,
            onComplete: rotate,
            onCompleteParams: [target, direction * -1]
        });
    }

    function moveX(target, direction) {
        gsap.to(target, randomTime(), {
            x: randomX(direction),
            ease: Sine.easeInOut,
            onComplete: moveX,
            onCompleteParams: [target, direction * -1]
        });
    }

    function moveY(target, direction) {
        gsap.to(target, randomTime(), {
            y: randomY(direction),
            ease: Sine.easeInOut,
            onComplete: moveY,
            onCompleteParams: [target, direction * -1]
        });
    }

    function random(min, max) {
        const delta = max - min;
        return (direction = 1) => (min + delta * Math.random()) * direction;
    }
</script>
<script src="{{asset('assets/landing/js/app.js')}}"></script>
<script src="{{asset('assets/landing/js/gallery-init.js')}}"></script>

</body>

</html>
