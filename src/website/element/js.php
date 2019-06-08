   <script>
    $(document).ready(function(){
        $( '#my-slider' ).sliderPro({
            width: 1920,
            height: 720,
            arrows: true,
            forceSize: 'fullWidth',
            fade: true,
            buttons: false,
            fullScreen: true,
            shuffle: true,
            smallSize: 500,
            mediumSize: 1000,
            largeSize: 2500,
            thumbnailArrows: true,
            autoplay: true,
            autoplayDelay: 5000
        });

    })
</script> 


    <script>
        $(document).ready(function () {
            // function autonaumber
//            var pos = $("#auto-rise-num").position().top;
            var pos = $(".autonumber1");
            if (pos.length) {
                pos = pos.position().top;
            }
            var autonumber = $(".autonumber");
            var myScrollFunc = new Array();
            var myScrollFunc = function () {
                var y = window.scrollY;
                // console.log(y);
                if (y >= pos && y <= pos + 900) {
//                if (y <= pos + 100) {
                    autonumber.each(function () {
                        var obj = $(this);
                        var millis = 50;
                        var speed = 50;
                        var end = parseInt(obj.attr("data-number"));
                        var start = 0;
                        if (end > speed) start = end % speed;
                        var jum = 1;
                        if (end > speed) jum = parseInt(end / speed);
                        // if(parseInt(obj.attr("data-number"))-20>0) start=parseInt(obj.attr("data-number"))-20;
                        var refreshIntervalId = setInterval(function () {
                            obj.html(function () {
                                if (start < end) return start += jum;
                                else clearInterval(refreshIntervalId);
                            });
                        }, millis);
                    });
                    window.removeEventListener("scroll", myScrollFunc);
                }
            };
            window.addEventListener("scroll", myScrollFunc);
            //end  function autonaumber
        })

    </script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            $('.reg-course-form1').click(function () {
                $("html, body").animate({
                    scrollTop: 1140
                }, 600);
                return false;
            });
        });
    </script>


<script type="text/javascript">
    jQuery(document).ready(function () {
        $('.backtotop').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    });
</script>

<!-- <div id="loading"></div> -->
<script type="text/javascript" src="src/website/element/js/jquery.sliderPro.min.js"></script>
<script type="text/javascript" src="src/website/element/js/bootstrap.min.js"></script>
<script type="text/javascript" src="src/website/element/js/owl.carousel.js"></script>
<script type="text/javascript" src="src/website/element/js/wow.min.js"></script>
<script>
    new WOW().init();
    $(document).ready(function () {
    })
</script>

<script type="text/javascript" src="src/website/element/js/main.js"></script>

<script type="text/javascript" src="src/website/element/js/web3nhat.min.js"></script>