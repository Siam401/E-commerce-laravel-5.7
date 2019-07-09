<div class="top-container">
    <div class="container">
        <div class="top-column-left">
            <ul class="contact-line">
                {{--<li><i class="fa fa-envelope"></i> support@ecada.com</li>--}}
                {{--<li><i class="fa fa-phone"></i> (+088)-01600000000</li>--}}
                @php
                    $customer_name=session('customer_name')
                @endphp
                <?php if($customer_name != NULL){ ?>

                <li><i class="fa fa-user">Welcome {{ $customer_name }}!</i></li>
                <?php }else{ ?>

                <?php }?>
            </ul>
        </div>
        <div class="top-column-right">

            <ul class="register">

                {{--<li><a href="page_faq.html">Help</a></li>--}}
                @php
                    $customer_id=session('customer_id')
                @endphp
                <?php if($customer_id != NULL){ ?>

                <li><a href="{{url('/resources/customer/logout')}}">LogOut</a></li>
                <?php }else{ ?>
                <li><a href="{{url('/resources/login')}}">LogIn</a></li>
                <li><a href="{{url('/resources/register')}}">Register</a></li>
                <?php }?>
            </ul>

        </div>
    </div>
</div>
<!-- END - Top area -->

<div class="clearfix"></div>