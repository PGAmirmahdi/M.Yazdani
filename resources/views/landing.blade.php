<!DOCTYPE html>
<html lang="fa" dir="rtl">
@include('head')
@include('style')
<body class="no-gutters">

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
    @include('header')
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
    @include('side')
</div>
<!-- Avatar Side Block End -->

<!-- Page Content Start -->
<div id="content" class="content no-gutters">
    <div class="content__wrapper">

        <!-- Example gallery section -->
        <div class="my-gallery">
            @foreach($examples as $examplee)
                @php
                    $fileExtension = pathinfo($examplee->file, PATHINFO_EXTENSION);
                @endphp

                @if(in_array($fileExtension, ['mp4', 'avi', 'mov']))
                    {{-- نمایش ویدیوها --}}
                    <a href="#"
                       data-size="1280x720"
                       data-type="video"
                       data-dash-url="{{ route('exa.file.show', ['filename' => basename($examplee->file)]) }}">
                        <video width="240" height="140" muted playsinline loop>
                            <source src="{{ route('exa.file.show', ['filename' => basename($examplee->file)]) }}" type="video/{{ $fileExtension }}">
                            مرورگر شما از پخش ویدیو پشتیبانی نمی‌کند.
                        </video>
                    </a>
                @else
                    {{-- نمایش تصاویر --}}
                    <a href="#"
                       data-size="1400x1400"
                       data-type="image"
                       data-image-url="{{ route('exa.file.show', ['filename' => basename($examplee->file)]) }}">
                        <img src="{{ route('exa.file.show', ['filename' => basename($examplee->file)]) }}"
                             width="240" height="140" alt="توضیحات تصویر">
                    </a>
                @endif
            @endforeach
        </div>

    </div>
</div>
<!-- Page Content End -->

<!-- PhotoSwipe gallery structure -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
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
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

@include('script')
</body>
</html>
