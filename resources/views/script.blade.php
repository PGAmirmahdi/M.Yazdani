<script src="{{asset('assets/landing/js/libs.min.js')}}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Plyr JS -->
<script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>
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
<script>
    var openPhotoSwipe = function(index) {
        var pswpElement = document.querySelectorAll('.pswp')[0];
        var items = [];

        // شناسایی ویدیوها و تصاویر
        document.querySelectorAll('.my-gallery a').forEach(function(el) {
            var size = el.getAttribute('data-size').split('x');
            var itemType = el.getAttribute('data-type');

            if (itemType === 'video') {
                // اگر ویدیو باشد
                items.push({
                    html: '<div class="plyr__video-embed" id="pswp-video">' +
                        '<video controls autoplay playsinline width="' + size[0] + '" height="' + size[1] + '">' +
                        '<source src="' + el.getAttribute('data-video-url') + '" type="video/mp4">' +
                        'مرورگر شما از پخش ویدیو پشتیبانی نمی‌کند.' +
                        '</video>' +
                        '</div>',
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10)
                });
            } else if (itemType === 'image') {
                // اگر تصویر باشد
                items.push({
                    src: el.getAttribute('data-image'),
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10)
                });
            }
        });

        var options = {
            index: index, // اسلاید ابتدایی
            closeOnScroll: false
        };

        // PhotoSwipe باز کردن
        var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);

        // اعمال Plyr برای تمام ویدیوها پس از هر تغییر اسلاید
        gallery.listen('afterChange', function() {
            document.querySelectorAll('.plyr__video-embed video').forEach(function(videoElement) {
                new Plyr(videoElement);
            });
        });

        gallery.init();
    };

    // رویداد کلیک برای باز کردن PhotoSwipe
    document.querySelectorAll('.my-gallery a').forEach(function(el, index) {
        el.addEventListener('click', function(event) {
            event.preventDefault();

            // بررسی کنید آیا مورد ویدیو یا تصویر است و تنظیم درست نوع محتوا
            var itemType = el.getAttribute('data-type');

            if (itemType === 'video' || itemType === 'image') {
                openPhotoSwipe(index);
            }
        });
    });
</script>
<script src="{{asset('assets/landing/js/app.js')}}"></script>
<script src="{{asset('assets/landing/js/gallery-init.js')}}"></script>
<script src="https://cdn.dashjs.org/latest/dash.all.min.js"></script>
