<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="corporate html template - agency theme - business html template - creative theme - portfolio html template - gallery theme - restaurant theme - ecommerce template - app template - landing page - real estate theme">
<meta name="description" content="Bootstrap HTML5 template for agency, corporate, business, app and creative portfolio, it is suitable for any kind of websites, like ecommerce, restaurant, photography, gallery and retail website.">
<meta name="author" content="EncodesLife">
<link rel="icon" href=<"{{asset('ui/frontend/favicon.png')}}">

<title>{{config('app.name')}}| @yield('title')</title>
<link href="{{asset('ui/frontend/js/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/css/revolution/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/css/revolution/layers.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('ui/frontend/css/revolution/navigation.css')}}">
<link href="{{asset('ui/frontend/css/style.css')}}" rel="stylesheet">
<link id="skin" href="{{asset('ui/frontend/css/theme-colors/orange.css')}}" rel="stylesheet">
<link href="{{asset('ui/frontend/js/style-switcher/css/style-switcher.css')}}" rel="stylesheet">
<link href="{{asset('ui/frontend/css/line-icons/line-icons.css')}}" rel="stylesheet">

</head>

<body>

@include('frontend.layouts.partials.header')
@include('frontend.layouts.partials.navbar')
@yield('content')
@include('frontend.layouts.partials.footer')
<a href="#" class="toTop">
<i class="fa fa-chevron-up"></i>
</a>

<script src="{{asset('ui/frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('ui/frontend/js/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('ui/frontend/js/jquery.easing-1.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('ui/frontend/js/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('ui/frontend/js/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type='text/javascript' src='{{asset('ui/frontend/js/revolution/revolution-addons/slicey/js/revolution.addon.slicey.min8a54.js?ver=1.0.0')}}'></script>
<script type="text/javascript" src="{{asset('ui/frontend/js/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('ui/frontend/js/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('ui/frontend/js/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script>
$(document).ready(function() {
    if ($("#rev-slider").revolution != undefined) {
            $("#rev-slider").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            delay: 9000,
            navigation: {
            keyboardNavigation: "on",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            onHoverStop: "off",
    touch: {
            touchenabled: "on",
            swipe_threshold: 75,
            swipe_min_touches: 1,
            swipe_direction: "horizontal",
            drag_block_vertical: false
            },
    arrows: {
            style: "hephaistos",
            enable: true,
            hide_onmobile: false,
            hide_onleave: false,
            tmp: '',
        left: {
            h_align: "left",
            v_align: "center",
            h_offset: 30,
            v_offset: 0
        },
    right: {
        h_align: "right",
        v_align: "center",
        h_offset: 30,
        v_offset: 0
}
},
    bullets: {
        enable: true,
        hide_onmobile: false,
        style: "hephaistos",
        hide_onleave: false,
        direction: "horizontal",
        h_align: "center",
        v_align: "bottom",
        h_offset: 20,
        v_offset: 30,
        space: 5,
        tmp: ''
}
},
gridwidth: 1230,
gridheight: [550, 550, 600, 500],
});
}
});
</script>

<script src="{{asset('ui/frontend/js/parallax/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('ui/frontend/js/parallax/setting.js')}}"></script>
<script src="{{asset('ui/frontend/js/owlcarousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('ui/frontend/js/owlcarousel/js/setting.js')}}"></script>
<script src="{{asset('ui/frontend/js/prettyPhoto/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('ui/frontend/js/prettyPhoto/js/setting.js')}}"></script>
<script src="{{asset('ui/frontend/js/masonry/js/masonry.min.js')}}"></script>
<script src="{{asset('ui/frontend/js/masonry/js/masonry.filter.js')}}"></script>
<script src="{{asset('ui/frontend/js/masonry/js/setting.js')}}"></script>
<script src="{{asset('ui/frontend/js/custom.js')}}"></script>
<script src="{{asset('ui/frontend/js/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('ui/frontend/js/nicescroll/settings.js')}}"></script>
<script src="{{asset('ui/frontend/js/style-switcher/js/style-switcher.js')}}"></script>
</body>
</html>