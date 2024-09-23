<script src="{{asset('assets/landing/js/libs.min.js')}}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.dashjs.org/latest/dash.all.min.js"></script>
<script>
    var openPhotoSwipe = function(index) {
        var pswpElement = document.querySelectorAll('.pswp')[0];
        var items = [];

        // شناسایی ویدیوها و تصاویر
        document.querySelectorAll('.my-gallery a').forEach(function(el) {
            var size = el.getAttribute('data-size').split('x');
            var itemType = el.getAttribute('data-type');

            if (itemType === 'video') {
                items.push({
                    html: '<video controls autoplay playsinline width="' + size[0] + '" height="' + size[1] + '" id="pswp-video">' +
                        '<source src="' + el.getAttribute('data-dash-url') + '" type="application/dash+xml">' +
                        'مرورگر شما از پخش ویدیو پشتیبانی نمی‌کند.' +
                        '</video>',
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10)
                });
            } else if (itemType === 'image') {
                items.push({
                    src: el.getAttribute('data-image-url'),
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10)
                });
            }
        });

        var options = {
            index: index
        };

        var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.listen('afterChange', function() {
            var videoElement = document.getElementById('pswp-video');
            if (videoElement) {
                setupDashForVideo(videoElement);
            }
        });
        gallery.init();
    };

    // تنظیم dash.js برای ویدیوها
    function setupDashForVideo(videoElement) {
        if (videoElement) {
            var player = dashjs.MediaPlayer().create();
            player.initialize(videoElement, videoElement.querySelector('source').getAttribute('src'), true);
        }
    }

    // رویداد کلیک برای باز کردن PhotoSwipe
    document.querySelectorAll('.my-gallery a').forEach(function(el, index) {
        el.addEventListener('click', function(event) {
            event.preventDefault();
            openPhotoSwipe(index);
        });
    });
</script>
