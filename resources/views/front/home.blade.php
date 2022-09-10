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
                                <div class="caption_heading" data-animation="animated fadeInLeft"> WISE  TRUCKING  SOLUTIONS  </div>
                                <div class="caption_sub_heading" data-animation="animated fadeInRight">
                                    <p>WE OFFER SOLUTIONS FOR BUSINESS</p>
                                    <!-- <h2> Providing exceptional Safety & Compliance Management, Training & Customer Services -->
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
                    <h2>24-HOUR ASSISTANCE</h2>
                    <p>
                    At wise we assist motor carriers in lowering the expense of adhering to local, state, and federal laws. We also help our clients stay stress-free by preventing them from wasting their valuable time, effort, and focus on unimportant tasks.
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--ll part-->

            <!--ll part-->
            <div class="col-md-4 col-lg-3 col-12 lj-area2 wow fadeInDown">
                <div class="p1">
                <img src="/asset/images/FAST AND RELIABLE.png" alt="" class="img-responsive" />
                    <h2>QUICK & TRUSTWORTHY</h2>
                    <p>
                    At Wise   we employ technology and our compliance knowledge to ensure the accuracy of your compliance data, hours of service logs, including trip reports, tax and registration filings, and driver qualification files.
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--ll part-->

            <!--ll part-->
            <div class="col-md-4 col-lg-3 col-12 lj-area wow fadeInRight">
                <div class="p1">
                <img src="/asset/images/TRUCKING SERVICE.png" alt="" class="img-responsive" />
                        <h2>TRUCKING SOLUTIONS</h2>
                    <p>
                    Wise Trucking Solutions is founded on the idea of giving our customers the stability and freedom to move a legal load anytime they want, whether it be local or US loads. For incomparable trucking solutions, rely on us!
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
                    <h1>WELCOME TO WISE TRUCKING SOLUTIONS</h1>
                    <p>
                    Wise Trucking Solutions has established itself as a proper shop of trucking solutions. Wise Trucking Solutions offers a range of professional safety solutions that are intended to inform, assess, and support the transportation sector. We are aware of what is required to comply with the law, help with truck driver training, and develop various methods to meet expectations.
                    </p>
                    <p>We  offer Solutions:</p>
                    <div class="col-sm-6 col-xs-12">
                        <ul class="li-list-container">
                            <li>Company Registration</li>
                            <li>CVOR Registration</li>
                            <li>US/Canada Authorities </li>
                            <li>Prorate Plate/IRP Plates</li>
                            <li>IFTA Registration, Fuel Tax Reporting</li>
                            <li>Drug testing & Alcohol</li>
                            <li>IFTA/MTO/DOT Safety Audit Preparation</li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-12 ">
                        <ul class="li-list-container">
                            <li>CTPAT/ PIP/ FAST CERTIFICATION/ SMARTWAY</li>
                            <li>Permits (State/Overweight/Oversize)</li>
                            <li>Safety & Compliance Management</li>
                            <li>ELD Devices /Log Book Auditing</li>
                            <li>Criminal Background Check for Employment purposes</li>
                            <li>Driver Hiring/Training</li>
                            
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
                    <h1>OUR VISION</h1>
                    <p>
                    Our vision at Wise Trucking Solutions is to bring our customers the best possible service at budget prices. With our skilled and experienced assistance, we are focused on providing our clients the finest service possible at the most sensible rates. We aim to be the industry's leader in excellence. Unless you are satisfied, we are not. Let's work to progress.
                    </p>
                   

                    <h1>KNOW US:</h1>
                    <p>
                    Wise Trucking Solutions was established to offer businesses looking for a safer & more compliant solution to operate a transportation fleet value-creating option. We are moving toward strict regulation compliance as a result of a growing recognition of the social impacts of issues concerning fleet operation and road safety. Wise Trucking Solutions wants to work with you as a partner to provide both quick and long-term value solutions for your development. Wise Trucking Solutions takes delight in the fact that we have established our corporation on truth, fairness, and surpassing the expectations of a diverse variety of businesses. The durability of Wise Trucking Solutions, which has withstood several highs and lows in the transportation industry, is a witness to our key values of "always putting clients' needs first."

                    </p>
                </div>
                <div></div>
            </div>
        </div>
    </section>
@endsection
