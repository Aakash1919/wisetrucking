@extends('layouts.front')
@section('content')
    <section class="blog">
        <div class="blog-overlay">
            <div class="container">
                <div class="col-sm-7">
                    <div class="blog-head">
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="top-contact-part">
            <div class="container">
                <div class="welcome-area3">
                    <div class="col-sm-12 col-xs-12">
                        <div class="col-sm-6 col-xs-12 no-padding">
                            <div class="f1-part2">
                                <h4>Ontario office</h4>
                                <table class="table cv contact-address table-bordered " cellspacing="3" cellpadding="0"
                                    border="0">
                                    <tbody>
                                        <tr>
                                            <td align="left" valign="top"><strong>Company Name:</strong></td>
                                            <td align="left" valign="top">Wise Trucking Solution</td>
                                        </tr>
                                        <tr>
                                            <td width="36%" valign="top" align="left"><strong>Address:</strong></td>
                                            <td width="64%" valign="top" align="left">
                                                234 Wilkinson RdBrampton, ON L6T 4N7, Canada
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" align="left"><strong>Phone:</strong></td>
                                            <td valign="top" align="left"> (905)-461-2525</td>
                                        </tr>
                                        <tr>
                                            <td valign="top" align="left"><strong>Fax:</strong></td>
                                            <td valign="top" align="left">905-696-6825</td>
                                        </tr>
                                        <tr>
                                            <td valign="top" align="left"><strong>Email:</strong></td>
                                            <td valign="top" align="left"><a href="mailto:truckingsolutions@gmail.com">
                                                    wisetruckingsolutions@gmail.com</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="f1-part2">
                                <iframe class="map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.3055863807026!2d-79.69597!3d43.683409999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3e5f3edb0e4d%3A0x591d1f54eabf9bea!2s234%20Wilkinson%20Rd%2C%20Brampton%2C%20ON%20L6T%204N7!5e0!3m2!1sen!2sca!4v1660552310263!5m2!1sen!2sca"></iframe>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-sm-12 col-xs-12">
                        <div class="col-sm-6 col-xs-12 no-padding">
                            <div class="f1-part2">
                                <h4>Calgary office </h4>
                                <table class="table cv contact-address table-bordered " cellspacing="3" cellpadding="0"
                                    border="0">
                                    <tbody>
                                        <tr>
                                            <td align="left" valign="top"><strong>Company Name:</strong></td>
                                            <td align="left" valign="top">G&G Trucking Solution</td>
                                        </tr>
                                        <tr>
                                            <td width="36%" valign="top" align="left"><strong>Address:</strong></td>
                                            <td width="64%" valign="top" align="left">
                                                Unit-205 2835 23rd Street NE, Calgary AB T2E 7A4 CANADA
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" align="left"><strong>Phone:</strong></td>
                                            <td valign="top" align="left">(403)-455-4258</td>
                                        </tr>
                                        <tr>
                                            <td valign="top" align="left"><strong>Fax:</strong></td>
                                            <td valign="top" align="left">403-455-4261 </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" align="left"><strong>Email:</strong></td>
                                            <td valign="top" align="left"><a
                                                    href="mailto:truckingsolutions4u@gmail.com ">
                                                    truckingsolutions4u@gmail.com </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="f1-part2">
                                <iframe class="map"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10026.575016291945!2d-114.006123!3d51.078126!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537164de2562b787%3A0x76a81aab4d978f16!2s2835+23+St+NE+%23205%2C+Calgary%2C+AB+T2E+7A4%2C+Canada!5e0!3m2!1sen!2sin!4v1514548630767"></iframe>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-sm-12 col-xs-12">
                        <div class="f1-part2">
                            <h4>Enquiry Form</h4>
                            <form action="submit_contactus.php" method="post" name="ContactForm">
                                <p><input class="form-control input-lg" name="name" required="" type="text"
                                        placeholder="Enter your Name Here.."></p>
                                <p><input class="form-control input-lg" name="email" required="" type="email"
                                        placeholder="Enter your E-Mail Id Here.."></p>
                                <p><input class="form-control input-lg" name="telephone" required="" type="number"
                                        placeholder="Enter your Contact No Here.."></p>
                                <p>
                                    <textarea class="form-control input-sm" name="comments" required="" rows="3"
                                        placeholder="Tupe Your message Here.."></textarea>
                                </p>
                                <p><button type="submit" name="contactUs"
                                        class="btn btn-primary btn-lg button-link7">Submit</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    @endsection
