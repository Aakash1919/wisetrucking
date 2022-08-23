@extends('layouts.front')
@section('content')
    <style>
        .sc-part2,
        .sc-part3 {
            background: unset;
        }

        .ppp-area,
        .ppp-area2 {
            background: unset !important;
        }

        .section-1-container {
            visibility: visible;
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin: 50px 0;
        }

        .lj-area {
            margin: 0;
            text-align: center;
            min-height: 290px;
            color: #017e85;
            box-shadow: 0px 0px 10px 2px #017e85;
            background: white;
        }

        .lj-area2 {
            margin: 0;
            background: #017e85;
            text-align: center;
            min-height: 290px;
            box-shadow: 0px 0px 10px 2px #017e85;
        }

        .lj-area2 .p1 h2,
        .lj-area2 .p1 p {
            color: white;
        }

        .p1 h2,
        .p1 p {
            color: #017e85;
        }

        #equalheight,#equalheight2 {
            display: flex;
            margin:40px 0px;
        }

        /* .sc-part2-container {
            padding: 75px;
        } */

        .sc-part2-container h1,
        .sc-part2-container p {
            color: #017e85 !important;
        }

        .li-list-container li {
            font-style: italic !important;
            margin: 0 0 15px 0px;
            padding: 0px 0px 0px 20px;
            color: #017e85 !important;
        }
        
        /* @media only screen and (min-width:768px) {
            .d-md-block{
                display:block;
            }
        } */
        
        
        @media only screen and (max-width:767px) {
           
           .section-1-container{
               display:block;
           }
           .section-1-container .lj-area{
               margin-top:15px;       
            }
            .section-1-container .lj-area2{
                margin-top:15px;   
            }
            #equalheight,#equalheight2 {
                display:block;
            }
            .sc-part2-container {
            padding: 20px;
        }
        .section-1-container{
            margin:20px 0px;
        }
       .order-2{
            order:2!important;
        }
        .order-1{
            order:1!important;
        }
        .ppp-area {
    background: url(../images/pic1.png) no-repeat;
    min-height: 100%;
}
.ppp-area2 {
    background: url(../images/pic2.png) no-repeat;
    min-height: 100%;
}
.bs-slider>.carousel-inner>.item>img{
    height: 300px;
}
.caption_sub_heading h2{
    font-size:22px!important;
}
.slide-text{
    width:100%;
    padding:20px 0px;
    background: #0000005e
}
       
    }
    </style>
    <section>
        <div class="slide-area">
            <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line"
                data-ride="carousel" data-pause="hover" data-interval="5000">
                <div class="carousel-inner" role="listbox">
                    {{-- <div class="item active"> <img src="{{asset('asset/images/banner1.png')}}" alt="" title="">
                    <div class="slide-text slide_style_left">
                        <div class="container">
                            <div class="caption_heading fadeInLeft"  data-wow-duration="1.0s" > UNBEATABLE </div>
                            <div class="caption_sub_heading fadeInLeft"  data-wow-duration="1.0s">
                                <p>TRUCKING <br> Solutions</p>
                                <h2> Wise Trucking Solutions-Safety & Compliance Management Program has been designed to provide the guidance about safety & compliance related issues.</h2>
                                <p><a href="contact.html" class="red_btn">Make an Appointment</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item"> <img src="{{asset('asset/images/banner2.png')}}" alt="" title="">
                    <div class="slide-text slide_style_left">
                        <div class="container">
                            <div class="caption_heading" data-animation="animated fadeInLeft"> UNBEATABLE </div>
                            <div class="caption_sub_heading" data-animation="animated fadeInRight">
                                <p>TRUCKING<br>Solutions</p>
                                <h2> Wise Trucking Solutions-Trucking Consultant provides convenient, value-added solutions to our Carrier clients, giving them peace of mind that comes from cost savings and the freedom to focus on their core business. </h2>
                                <p><a href="contact.html" class="red_btn">Make an Appointment</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item"> <img src="{{asset('asset/images/banne3.png')}}" alt="" title="">
                    <div class="slide-text slide_style_left">
                        <div class="container">
                            <div class="caption_heading" data-animation="animated fadeInLeft"> UNBEATABLE </div>
                            <div class="caption_sub_heading" data-animation="animated fadeInRight">
                                <p>TRUCKING<br>Solutions</p>
                                <h2> Explore our Services, Training and Support available to you and discover how ABS SafeCom can help you grow and succeed. </h2>
                                <p><a href="contact.html" class="red_btn">Make an Appointment</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                    <div class="item active"> <img src="{{ asset('asset/images/banne4.png') }}" alt="" title="">
                        <div class="slide-text slide_style_left">
                            <div class="container">
                                <div class="caption_heading" data-animation="animated fadeInLeft"> UNBEATABLE </div>
                                <div class="caption_sub_heading" data-animation="animated fadeInRight">
                                    <p>TRUCKING Solutions</p>
                                    <h2> Providing exceptional Safety & Compliance Management, Training & Customer Services
                                    </h2>
                                    <p><a href="contact.html" class="red_btn">Make an Appointment</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="item"> <img src="{{asset('asset/images/banne5.png')}}" alt="" title="">
                    <div class="slide-text slide_style_left">
                        <div class="container">
                            <div class="caption_heading" data-animation="animated fadeInLeft"> UNBEATABLE </div>
                            <div class="caption_sub_heading" data-animation="animated fadeInRight">
                                <p>TRUCKING<br>Solutions</p>
                                <h2> To excel in Safety & Compliance to a level that is compatible with excellence in other business parameters such as Quality, Productivity and Profitability.</h2>
                                <p><a href="contact.html" class="red_btn">Make an Appointment</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="location-part section-1-container ">
            <!--ll part-->
            <div class="col-md-4 col-lg-3 col-12 lj-area wow fadeInRight">
                <div class="p1">
                    <img src="/asset/images/24 HOURS SUPPORT.png" alt="" class="img-responsive" />
                    <h2>24 hours support</h2>
                    <p>
                        We have helped motor carriers, reduce the costs of complying
                        with state and federal regulations. We save our clients from
                        wasting their valuable time, labor, and attention from
                        activities and help them remain stress-free.
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--ll part-->

            <!--ll part-->
            <div class="col-md-4 col-lg-3 col-12 lj-area2 wow fadeInDown">
                <div class="p1">
                <img src="/asset/images/FAST AND RELIABLE.png" alt="" class="img-responsive" />
                    <h2>Fast and reliable</h2>
                    <p>
                        We use our compliance expertise and experience, aided by
                        technology, to make your compliance data – trip reports, hours
                        of service logs, tax and registration filings, and driver
                        qualification files accurate
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--ll part-->

            <!--ll part-->
            <div class="col-md-4 col-lg-3 col-12 lj-area wow fadeInRight">
                <div class="p1">
                <img src="/asset/images/TRUCKING SERVICE.png" alt="" class="img-responsive" />
                        <h2>Trucking service</h2>
                    <p>
                        Our trucking service is based on the principle of providing our
                        clients with the flexibility and reliability, to move legal load
                        across town, or across the country, whenever they want. Count on
                        us for unparallel trucking solutions!
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--ll part-->
        </div>
        <div class="clearfix"></div>
    </section>

    <section>
        <div class="sc-part2  container">
            <div class="row " id="equalheight">
                <div class="col-sm-7 col-xs-12 sc-part2 sc-part2-container wow fadeInLeft">
                    <h1>WELCOME Trucking Solutions</h1>
                    <p>
                        G&G Trucking Solutions has become an established and dependable
                        trucking solutions provider. G&G Trucking Solutions provides a
                        variety of high quality safety solutions designed to educate,
                        measure and assist the transportation industry. We understand
                        the requirements necessary to achieve compliance with
                        legislation, assist in truck driver training and create
                        different procedures to ensure success.
                    </p>
                    <div class="col-sm-6 col-xs-12">
                        <ul class="li-list-container">
                            <li>Log Book Auditing</li>
                            <li>Fuel Tax Reporting</li>
                            <li>MTO/DOT Safety Audit Preparation</li>
                            <li>Carrier Code</li>
                            <li>Company Registration</li>
                            <li>Safety Fitness Certificate</li>
                            <li>CVOR Registration</li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-12 ">
                        <ul class="li-list-container">
                            <li>Bonded Carrier</li>
                            <li>IFTA Registration</li>
                            <li>Prorate Plate/IRP Plates</li>
                            <li>Fleet Management Program</li>
                            <li>Financing to Buy a Truck</li>
                            <li>DG Training</li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-5 col-xs-12 ppp-area sc-part2-container  wow fadeInRight">
                    <img src="{{asset('asset/images/home_w.png')}}" style="width:100%;height:100%" />

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="sc-part3  container">
            <div class="row " id="equalheight2">
                <div class="col-sm-5 col-xs-12 ppp-area2 sc-part2-container order-2 wow fadeInLeft">
                    <img src="https://cdn.pixabay.com/photo/2019/02/26/07/33/trucks-in-snow-4021311__340.jpg"
                        style="width: 100%; height: 100%" />
                </div>

                <div class="col-sm-7 col-xs-12 sc-part3 sc-part2-container order-1 wow fadeInRight">
                    <h1>Permits</h1>
                    <p>
                        We help you to take permits which are not included in the number
                        plates. These are special permits which are required to enter in
                        the province of US to do a legal business.
                    </p>
                    <ul class="li-list-container">
                        <li>New Mexico Permits</li>
                        <li>New York Hut Permits</li>
                        <li>Oregon Permits</li>
                    </ul>

                    <h1>History</h1>
                    <p>
                        Since it's founding in Mississauga ON in 2007, G&G Trucking
                        Solutions Inc, is provinding assistance to new and old trcuking
                        companies to manage their business in better way. Our clients
                        are very happy with our services and continously doing business
                        with us.

                        <br /><br />We are pleased to tell you that our business is
                        growing as we have opened a new branch in Calgary AB, 2013.
                    </p>
                </div>
                <div></div>
            </div>
        </div>
    </section>
@endsection
