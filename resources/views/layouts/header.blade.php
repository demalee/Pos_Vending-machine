<div class="header">

    <div class="header-left active">
        <a href="{{url('/')}}" class="logo logo-normal">
            <img src="https://ujuzikilimo.com/images/ujuzi-kilimo-color-logo.png" style="width: 100px; height: 100px;">
        </a>
        <a href="{{url('/')}}" class="logo logo-white">
            <img src="https://ujuzikilimo.com/images/ujuzi-kilimo-color-logo.png" style="width: 100px; height: 100px;">
        </a>
        <a href="{{url('/')}}" class="logo-small">
            <img src="https://ujuzikilimo.com/images/ujuzi-kilimo-color-logo.png" style="width: 100px; height: 100px;">
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
            <i data-feather="chevrons-left" class="feather-16"></i>
        </a>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
<span class="bar-icon">
<span></span>
<span></span>
<span></span>
</span>
    </a>

    <ul class="nav user-menu">

        <li class="nav-item nav-searchinputs">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa fa-search"></i>
                </a>
                <form action="#">
                    <div class="searchinputs">
                        <input type="text" placeholder="Search">
                        <div class="search-addon">
                            <span><i data-feather="search" class="feather-14"></i></span>
                        </div>
                    </div>

                </form>
            </div>
        </li>

    </ul>

</div>

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

                <li class="submenu-open">
                    <h6 class="submenu-hdr">Vendor Products</h6>
                    <ul>
                        <li ><a
                                    href="{{url('_all_ujuzi_products')}}"><i
                                        data-feather="hard-drive"></i><span>All Products</span></a></li>
                        <li class="active"><a
                                    href="{{url('/')}}"><i
                                        data-feather="plus-square"></i><span>Create Product</span></a></li>
                        <li ><a
                                    href="{{url('add-coin')}}"><i
                                        data-feather="plus-square"></i><span>Add Coin</span></a></li>
                        <li ><a
                                    href="{{url('add_category')}}"><i
                                        data-feather="plus-square"></i><span>Add Category</span></a></li>
                        <li ><a
                                    href="{{route('ujuzi-sales')}}"><i
                                        data-feather="plus-square"></i><span>Sales</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Buy Products</h6>
                    <ul>
{{--                        <li><a href="{{url('ujuzi_sales')}}"><i--}}
{{--                                        data-feather="shopping-cart"></i><span>Purchases</span></a></li>--}}


                        <li><a href="{{url('ujuzi_pos')}}"><i
                                        data-feather="hard-drive"></i><span>POS</a></li>
{{--                        <li><a href="{{url('ujuzi_refunds')}}"><i--}}
{{--                                        data-feather="hard-drive"></i><span>Refunds</a></li>--}}


                    </ul>
                </li>



            </ul>
        </div>
    </div>
</div>
