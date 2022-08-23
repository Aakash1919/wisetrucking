@extends('layouts.front')
@section('content')
    <section class="blog">
        <div class="blog-overlay">
            <div class="container">
                <div class="col-sm-12">
                    <div class="blog-head text-center  wow fadeInDown">
                        <h2>Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =-=-=-=-=-=-=-=-=-=- BANNER AREA CLOSE -=-=-=-=-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-=-=-=-=- MID AREA START -=-=-=-=-=-=-=-=-=-= -->

    <section class="service_sec_design1 ">
    <div class="container sc-part2-container">
      <div class="row custom-row-create">
        <div class="col-md-6 wow fadeInLeft">
          <div class="service-card">
            <img src="{{ asset('asset/images/s1.png') }}" alt="truck" />
          </div>
        </div>
        <div class="col-md-6 wow fadeInRight">
            <div class="service_card_content">
                <h2>Company Registeration</h2>
                <p>If you want to open a new trucking company, We will get all things done and all required authorities
                  for your highway and local business. The most important things is search your legal business name and
                  register that name for you.</p>
              </div>
        </div>
      </div>
      <div class="row custom-row-create right_img_side">
        <div class="col-md-6 custom-order  wow fadeInLeft">
            <div class="service_card_content">
                <h2>IFTA Registration</h2>
                <p>If your trucks runs on the highway or you are running a business all across the country, then you need International Fuel Tax Agreement (IFTA). We will setup your IFTA account and will get your IFTA sticker.</p>
              </div>
        </div>
        <div class="col-md-6  wow fadeInRight">
          <div class="service-card">
            <img src="{{ asset('asset/images/s2.png') }}" alt="truck" />
          </div>
        </div>
      </div>
      <div class="row custom-row-create">
        <div class="col-md-6  wow fadeInLeft">
          <div class="service-card">
            <img src="{{ asset('asset/images/s3.png') }}" alt="truck" />
          </div>
        </div>
        <div class="col-md-6  wow fadeInRight">
            <div class="service_card_content">
                <h2>Log Book Auditing</h2>
                <p>we are auditing your logbook and let youknow about your driver logbook errors. We check the 14 hours window, logbook status, matching fueltime, and speed according to hours. If their is any change of rule in DOT/MTO/USDOT, we let your drivers know immediately so that they can make correct logbook records.</p>
              </div>
        </div>
      </div>
      <div class="row custom-row-create right_img_side">
        <div class="col-md-6 custom-order  wow fadeInLeft">
            <div class="service_card_content">
                <h2>Safety Fitness Certificate /CVOR Registration</h2>
                <p>Safety Fitness Certificate is required in Alberta, whereas in Ontario CVOR is required for business operation. We help you to file your application for this. We will prepare safety and maintenance program for your transportation.</p>
              </div>
        </div>
        <div class="col-md-6  wow fadeInRight">
          <div class="service-card">
            <img src="{{ asset('asset/images/s4.png') }}" alt="truck" />
          </div>
        </div>
      </div>
      <div class="row custom-row-create">
        <div class="col-md-6  wow fadeInLeft">
          <div class="service-card">
            <img src="{{ asset('asset/images/s5.png') }}" alt="truck" />
          </div>
        </div>
        <div class="col-md-6  wow fadeInRight">
            <div class="service_card_content">
                <h2>Pars and PAPS</h2>
                <p>Pars and PIP is also required for running truks on highway and while crossing the broders. We provide you the printed sticker for Pars and PIP.</p>
              </div>
        </div>
      </div>
      <div class="row custom-row-create right_img_side">
        <div class="col-md-6 custom-order  wow fadeInLeft">
            <div class="service_card_content">
                <h2>MTO/DOT Safety Audit Preparation</h2>
                <p>we check your log books, and recomend you the corrections.We maintain the truck and trailer files and also help to keep the record of maintenance files</p>
              </div>
        </div>
        <div class="col-md-6  wow fadeInRight">
          <div class="service-card">
            <img src="{{ asset('asset/images/s6.png') }}" alt="truck" />
          </div>
        </div>
      </div>
     
    </div>
  </section>

@endsection
