<header>
    <div class="ng-scope">
        <div class="wrap ng-scope">
            <div class="hh-part">
                <div class="top-part">
                    <div class="container">
                        <div class="col-md-8 col-sm-8 col-xs-12 pull-right d-none ">
                            <div class="col-md-3 col-sm-3 col-xs-12 call">
                                <p><i class="fa fa-headphones" aria-hidden="true"></i><span>Call Us Anytime</span><br>647
                                    - 643 - 2525
                                </p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 time">
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <span>Opening Time</span><br>08:00 - 18:00
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 mail">
                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <span>E-mail Us</span><br>wisetruckingsolutions@gmail.com
                                </p>
                        </div>
                            <div class="col-md-2 col-sm-2 col-xs-12 social">
                                <div id="google_translate_element"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-part2">
                    <div class="container">
                        <div class="col-md-4 col-sm-4 col-xs-8 header__logo">

                            <a href="/" class="logo"><img src="{{asset('asset/images/wise.jpeg')}}" alt=""></a>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-4 pull-right">
                            <div class="top-details-part wow fadeInDown">
                                <div class="top-two-part">
                                    <div class="menu-wraper no-padding">
                                        <nav class="navbar navbar-default">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle collapsed"
                                                    data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                                    aria-expanded="false">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div class="collapse navbar-collapse pad" id="bs-example-navbar-collapse-1">
                                                <ul class="nav navbar-nav">
                                                    <li class="@if(isset($active) && $active=='home') active @endif"><a href="/">Home <span
                                                                class="sr-only">(current)</span></a></li>
                                                    <li class="@if(isset($active) && $active=='about') active @endif"><a href="{{route('about')}}">About</a></li>
                                                    <li class="@if(isset($active) && $active=='service') active @endif"><a href="{{route('service')}}">Services</a></li>
                                                    <li class="@if(isset($active) && $active=='blog') active @endif"><a href="javascript:void(0);">Blog</a></li>
                                                    <li class="@if(isset($active) && $active=='contact') active @endif"><a href="{{route('contact')}}">Contact us</a></li>
                                                    <li class="@if(isset($active) && $active=='login') active @endif"><a href="{{route('login')}}">Login</a></li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</header>
