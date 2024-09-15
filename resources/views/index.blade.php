@extends('layouts.main')
@section('content')

<section class="hero-wrap style1 bg-selago" style="background: linear-gradient(to bottom, #0080bf, #32cd32);">
            
    <div class="hero-content-wrap">
        <div class="hero-content">
            <span style="color: white; font-weight: bold;" data-aos="fade-up" data-aos-duration="1000">JOIN US NOW! ON</span>
            <!--<h1 style="color: #fff; text-transform: uppercase;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">WELCOME TO DATAVILLA</h1>-->
            <p style="color: white;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">DataVilla, we proudly provide the most affordable and cost-effective solutions for your data, airtime, DStv, GOtv, and Startimes subscriptions. Look no further; we're your go-to destination for hassle-free telecom needs.</p>
            <div class="hero-btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1200">
                
                <a style="background: #0080bf; color: white;" href="{{url('/register')}}" class="btn style1">Register</a>
                <a href="{{url('/login')}}" class="btn style1">Login</a>
                
            </div>
        </div>
        <div class="hero-img-wrap">
            <img class="hero-img" src="{{asset('static/tola/img/ab.png')}}" style="margin-bottom: 80px; height: 400px;" alt="Image">
            
           
        </div>
    </div>
</section>


<section class="feature-wrap pt-100 pb-75">
    <div class="container">
        <div class="section-title style1 text-center mb-40">
            <span>OUR FEATURES</span>
            <h3>We innovate, deliver swiftly, and provide excellent <br>support for a seamless client experience.</h3>
        </div>
        <div class="feature-card-wrap">
            <div class="feature-card">
                <div class="feature-icon"><img src="{{asset('static/tola/img/operational-system.png')}}"></div>
                <div class="feature-text">
                    <h4 class="feature-title">Automated Service</h4>
                    <p>We excel in rapid service delivery, offering instant solutions for airtime, data bundles, cable television subscriptions (DSTV, GOTV & Startimes), and a wide array of services.</p>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><img src="{{asset('static/tola/img/prestige.png')}}"></div>
                <div class="feature-text">
                    <h4 class="feature-title">Reliability</h4>
                    <p>We recognize the profound significance of connections to our users. In pursuit of this, all our offerings are meticulously optimized for security, exceptional speed, and the utmost convenience for you.</p>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><img src="{{asset('static/tola/img/customer-service(1).png')}}"></div>
                <div class="feature-text">
                    <h4 class="feature-title">Customer Support</h4>
                    <p>Caring for our users is of paramount importance to us, and that's why we provide dedicated and comprehensive support services.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="about" class="about-wrap style1 pb-100">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="about-img-wrap">
                    <div class="about-img">
                        <img style="border-radius: 10px; border: 8px solid; border-image: linear-gradient(to right, #0080bf, #32cd32) 1;" src="{{asset('static/tola/img/gy.jpg')}}">
                        

                       
                        <div class="about-img bg-f about-bg-2"></div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="content-title style1">
                        <span>ABOUT US</span>
                        <h3>We Simplify Your Utility, Bill, and Data Airtime Management with Ease</h3>
                        <p>Welcome to Datavilla, where convenience meets connectivity! We take pride in being a leading provider of essential services, offering a one-stop solution for your data, airtime, result checker pins, cable, and bills payment needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="service" class="service-wrap style1 pt-100 pb-75">
    <img src="{{asset('static/tola/img/wave-shape-2.png')}}" alt="Image" class="wave-shape-3">
    <div class="container">
        <div class="row mb-40 align-items-center">
            <div class="col-xl-6">
                <div class="section-title style1">
                    <span>OUR SERVICES</span>
                    <h2>Discover the spectrum of services we bring to you</h2>
                </div>
            </div>
            <div class="col-xl-6">
                <p class="section-para">At our core, we provide top-notch services that go above and beyond</p>
            </div>
        </div>
    </div>
    <div class="service-slider-wrap" style="margin-top: 120px;">
        <div class="container">
            <div class="service-slider-one swiper-container pb-0">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-card style1">
                            <div class="service-info">
                                    <img src="{{asset('static/tola/img/dta.png')}}">
                                <h3 class="service-title">Buy Data
                                </h3>
                                <p>Start enjoying this very low rates Data plan for your internet browsing databundle.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style1">
                            <div class="service-info">
                                <img src="{{asset('static/tola/img/telephone.png')}}" alt="Image">
                                <h3 class="service-title">Airtime TopUp
                                </h3>
                                <p>Making an online recharge has become very easy and safe on Datavilla.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style1">
                            <div class="service-info">
                                <img src="{{asset('static/tola/img/smart-tv.png')}}" alt="Image">
                                <h3 class="service-title">Cable Subscription</h3>
                                <p>Instantly Activate Cable subscription with favourable discount compare to others.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style1">
                            <div class="service-info">
                                <img src="{{asset('static/tola/img/lightbulb.png')}}" alt="Image">
                                <h3 class="service-title">Utility Payment</h3>
                                <p>Because we understand your needs, we have made bills and utilities payment more convenient.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-card style1">
                            <div class="service-info">
                                <img src="{{asset('static/tola/img/blk.png')}}" alt="Image">
                                <h3 class="service-title">Bulk SMS</h3>
                                <p>Send BulkSMS to any number for as low as just 2.5kobo per unit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-prev slider-btn style1"><i class="flaticon-left-arrow-1"></i></div>
        <div class="service-next slider-btn style1"><i class="flaticon-next"></i></div>
    </div>
</section>

<section id="pricing" class="pricing-table-wrap pt-100 pb-75">
    <div class="container">
        <div class="section-title style1 text-center mb-40">
            <span>OUR OFFICIAL PLAN</span>
            <h2>Simple &amp; Affordable Pricing Plan</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="pricing-table style1">
                    <div class="pricing-header">
                        <h4 style="color: white;">MTN PLAN</h4>
                        <img src="{{asset('static/tola/img/mtn1.jpg')}}" style="height: 70px;">
                    </div>
                    <center>
                        <table class="table table-all table-responsive table-stripped">
                
                            <tbody>
                                
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 500.0MB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;150</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 days</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 1.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;240</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30days - Data Transfer</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 1.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;270</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30Days</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 1.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;270</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 2.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;500</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30days - Data Transfer</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 2.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;540</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30Days</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 2.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;540</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 3.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;750</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30days - Data Transfer</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 3.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;810</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30Days</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 3.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;810</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 5.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;1250</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30days - Data Transfer</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 5.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;1350</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30Days</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 5.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;1350</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 10.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;2500</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30days - Data Transfer</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 10.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;2700</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days</i></td>
                                </tr>
    
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 10.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;2700</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                                </tr>
                
                          </tbody></table>
                       </center>
                    <div class="purchase-pricing">
                        <a href="profile/index.html" class="btn">Purchase Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="pricing-table style1">
                    <div class="pricing-header">
                        <h4 style="color: white;">AIRTEL PLAN</h4>
                        <img src="{{asset('static/tola/img/airtel.png')}}" style="height: 70px;">
                    </div>
                    <center>
                        <table class="table table-all table-responsive table-stripped">
                    

                    
                            <tbody>
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 300.0MB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;150</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>2days Validity</i></td>
                                </tr>
                            
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 500.0MB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;150</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days</i></td>
                                </tr>
                            
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 1.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;250</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>2days Validity</i></td>
                                </tr>
                            
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 1.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;285</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days</i></td>
                                </tr>
                            
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 2.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;400</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>2days Validity</i></td>
                                </tr>
                            
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 2.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;570</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 days</i></td>
                                </tr>
                            
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 3.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;600</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>7 day&#x27;s validity</i></td>
                                </tr>
                            
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 4.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;1100</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days validity</i></td>
                                </tr>
                            
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 5.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;1425</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 days</i></td>
                                </tr>
                            
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 10.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;2200</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30days Validity</i></td>
                                </tr>
                            
                                <tr>
                                <td style="color: black; font-size:16px; font-weight: bolder;"> 10.0GB </td>
                                <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;2850</i></td>
                                <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days</i></td>
                                </tr>
                            
                              
                            </tbody></table>
                    </center>
                    <div class="purchase-pricing">
                        <a href="profile/index.html" class="btn">Purchase Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="pricing-table style1">
                    <div class="pricing-header">
                        <h4 style="color: white;">GLO PLAN</h4>
                        <img src="{{asset('static/tola/img/glo.jpg')}}" style="height: 70px;">
                    </div>
                    <center>
                        <table class="table table-all table-responsive table-stripped">
                    
                            <tbody>
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 500.0MB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;150</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 1.024GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;270</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 1.8GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;450</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>14 Days(800MB + 1GB)</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 2.048GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;540</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 3.072GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;810</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 3.9GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;900</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days(1.9GB + 2GB) Day+night</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 7.5GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;1350</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days(3.5GB + 4GB) Day+night</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 5.12GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;1350</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 9.2GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;1800</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days(5.2GB + 4GB) Day+night</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 10.8GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;2200</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days(6.8GB + 4GB) Day+night</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 14.0GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;2650</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days(10GB + 4GB) Day+night</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 10.24GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;2700</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 18.0GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;3600</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days(14GB + 4GB) Day+night</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 24.0GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;4400</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days(20GB + 4GB) Day+night</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 29.5GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;7000</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days(27.5GB +2GB) Day+night</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 50.0GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;8800</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days(46GB + 4GB) Day+night</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 93.0GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;13000</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days(86GB + 7GB) Day+night</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 119.0GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;15500</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days(109GB +10GB) Day+night</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 138.0GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;17500</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>30 Days(126GB +12GB) Day+night</i></td>
                            </tr>
                        </tbody></table>
                    </center>
                    <div class="purchase-pricing">
                        <a href="profile/index.html" class="btn">Purchase Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="pricing-table style1">
                    <div class="pricing-header">
                        <h4 style="color: white;">9MOBILE PLAN</h4>
                        <img src="{{asset('static/tola/img/9mobile.png')}}" style="height: 70px;">
                    </div>
                    <center>
                        <table class="table table-all table-responsive table-stripped"><tbody>
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 500.0MB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;110</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 1.0GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;200</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 2.0GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;400</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 3.0GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;600</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                            </tr>
                        
                            <tr>
                            <td style="color: black; font-size:16px; font-weight: bolder;"> 5.0GB </td>
                            <td style="color: black; font-size:16px;  font-weight: bolder;"><i> &#8358;1000</i></td>
                            <td style="color: black; font-size:12px;  font-weight: bolder;"><i>Corporate Gifting 30days</i></td>
                            </tr>
                        
                        </tbody></table>
                    </center>
                    <div class="purchase-pricing">
                        <a href="pricing-plan.html" class="btn">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-choose-wrap style1 pb-100">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6">
                <div class="why-choose-content">
                    <div class="content-title style1 mb-40">
                        <span>WHY CHOOSE US</span>
                        <h2>We Offer The Best Networking Services</h2>
                        <p>At Datavilla, we prioritize the comfort of our cherished customers. Our services are not only fast, secure, and automated but also backed by round-the-clock support for our registered users. Your satisfaction is our commitment.</p>
                    </div>
                    <div class="wh-item-wrap">
                        <div class="wh-item">
                            
                            <div class="wh-text">
                                <h5>We Are Secure</h5>
                                <p>"Ensuring your security is our top priority. Count on us to provide a trustworthy and safe experience, backed by robust measures implemented at every step of our operations.</p>
                            </div>
                        </div>
                        <div class="wh-item">
                            
                            <div class="wh-text">
                                <h5>Automated Delivery</h5>
                                <p>At our core, we operate with automation excellence. From streamlined data delivery to automated wallet funding, experience the convenience of instant airtime top-up and data purchases seamlessly delivered to you.</p>
                            </div>
                        </div>
                        <div class="wh-item">
                            
                            <div class="wh-text">
                                <h5>24/7 Customer Support</h5>
                                <p>"Count on our 24/7 customer support for prompt assistance whenever you need it. Your satisfaction is our priority.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wh-img-wrap">
                        <img style="border-radius: 10px; border: 8px solid; border-image: linear-gradient(to right, #0080bf, #32cd32) 1;" src="{{asset('static/tola/img/pl.webp')}}">
                    
                </div>
            </div>
        </div>
    </div>
</section>

<div class="partner-wrap pb-100">
    <div class="container">
        <div class="section-title style1 text-center mb-40">
            <span>OUR PARTNER</span>
            <h2>Trusted By Biggest Brands</h2>
        </div>
        <div class="partner-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="partner-item">
                        <img src="{{asset('static/tola/img/startime.png')}}" style="height: 75px;" alt="Image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner-item">
                        <img src="{{asset('static/tola/img/mtn1.jpg')}}" style="height: 75px;" alt="Image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner-item">
                        <img src="{{asset('static/tola/img/glo.jpg')}}" style="height: 75px;" alt="Image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner-item">
                        <img src="{{asset('static/tola/img/9mobile.png')}}" style="height: 75px;" alt="Image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner-item">
                        <img src="{{asset('static/tola/img/eko.png')}}" style="height: 75px;" alt="Image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner-item">
                        <img src="{{asset('static/tola/img/dstv.png')}}" style="height: 75px;" alt="Image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="partner-item">
                        <img src="{{asset('static/tola/img/airtel.png')}}" style="height: 75px;" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<section id="about" class="about-wrap style1 pb-100">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <div class="about-img-wrap">
                    <div class="about-img">
                        <img style="border-radius: 10px; border: 5px solid #32cd32;" src="{{asset('static/tola/img/carbon(12).png')}}">
                       
                        <div class="about-img bg-f about-bg-2"></div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="content-title style1">
                        <h3> Integrate our API</h3>
                        <h3>We possess everything needed to bring <br> a smile to your face.</h3>
                        <p>Are you a developer, Integrate our well-documented API that lets you earn from serving hundreds of thousands of customers.However huge or complex your imagination, you can build it with Datavilla API.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="test" class="testimonial-wrap style1 ptb-100">
    <div class="container">
        <div class="section-title style1 text-center mb-40">
            <span>TESTIMONIALS</span>
            <h2>What People Say About Us</h2>
        </div>
        <div class="testimonial-slider-two swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="{{asset('static/tola/img/man.png')}}" alt="Image">
                            </div>
                            <div class="client-info">
                                <h5>Chidera Emmanuel</h5>
                                <span>Educator</span>
                            </div>
                        </div>
                        <div class="client-quote">
                            <p>Datavilla provides cost-effective data plans tailored for both end-users and resellers. This platform stands out for its speed, automation, and security, making it a highly recommended choice.</p>
                        </div>
                        <div class="testimonial-footer">
                            <ul class="ratings list-style">
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="quote-icon">
                                <i class="flaticon-quotation"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="{{asset('static/tola/img/fem.png')}}" alt="Image">
                            </div>
                            <div class="client-info">
                                <h5>Chizaram Nwachukwu</h5>
                                <span>Distributor</span>
                            </div>
                        </div>
                        <div class="client-quote">
                            <p>Ever since I joined Datavilla, my earnings have significantly increased. Kudos to Datavilla!</p>
                        </div>
                        <div class="testimonial-footer">
                            <ul class="ratings list-style">
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="quote-icon">
                                <i class="flaticon-quotation"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="{{asset('static/tola/img/fem.png')}}" alt="Image">
                            </div>
                            <div class="client-info">
                                <h5>Adebayo Adegoke</h5>
                                <span>Exclusive Customer</span>
                            </div>
                        </div>
                        <div class="client-quote">
                            <p>"Datavilla is the ultimate go-to for seamless access to top-notch data and airtime services."</p>
                        </div>
                        <div class="testimonial-footer">
                            <ul class="ratings list-style">
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="quote-icon">
                                <i class="flaticon-quotation"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="{{asset('static/tola/img/man.png')}}" alt="Image">
                            </div>
                            <div class="client-info">
                                <h5>Femi Olatunji</h5>
                                <span>Scholar</span>
                            </div>
                        </div>
                        <div class="client-quote">
                            <p>Look no further than Datavilla for unparalleled convenience in securing data and airtime – your one-stop solution for top-quality services.</p>
                        </div>
                        <div class="testimonial-footer">
                            <ul class="ratings list-style">
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star-1"></i></li>
                                <li><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="quote-icon">
                                <i class="flaticon-quotation"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-pagination slider-pagination style1"></div>
        </div>
    </div>
</section>
@endsection