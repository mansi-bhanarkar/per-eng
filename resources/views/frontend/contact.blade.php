@extends('frontend.partial.main')
@section('content')
 <!-- Breadcrumb_section::start -->
 <section class="breadcrumb_main">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-main pt-30 pb-30">
                                <h2 class="breadcrumb_text">Contact Us</h2>
                                <p class="text-white para-text">Home |<span class="breadcrumb_text_small"> Contact Us</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb_section::End -->
            <!-- Content::Start -->
            <!-- contact_section::Start -->
            <section>
                <div class="container mt-50">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="contact-perfeng-box">
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-perfeng-box-inner-text  ml-20">
                                    <h3 class="sub_title">Call Us</h3>
                                    <a href="tel:+88 568 426 834"><p class="para-text">+91 8128268837</p></a>
                                </div>
                            </div>
                            <div class="contact-perfeng-box mt-30">
                                <div class="contact-icon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="contact-perfeng-box-inner-text  ml-20">
                                    <h3 class="sub_title">
                                        E-mail
                                    </h3>
                                    <a href="mailto:perfecteng25@gmail.com"><p class="para-text">perfecteng25@gmail.com</p></a>
                                </div>
                            </div>
                            <div class="contact-perfeng-box mt-30">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="contact-perfeng-box-inner-text  ml-20">
                                    <h3 class="sub_title">
                                        Address
                                    </h3>
                                    <p class="para-text">8, Shriji Ind. Estate , B/h Indian Oxygen,
                                        Panna Estate Road, Soni's Chawl,
                                        Odhav, Ahmedabad - 380023
                                    </p>
                                </div>
                            </div>
                            <div class="location-main mt-50">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="200" frameborder="0" style="border:0"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-sm-50 contact-col">
                            <div class="contact-form-main">
                                <div class="section-title mb-50">
                                    <h5 class="sub-title-text">Connect With Us</h5>
                                    <h2 class="main-title">Get In Touch</h2>
                                    <div class="title-span-line">
                                        <span class="line line-1"></span>
                                        <span class="line line-2"></span>
                                        <span class="line line-3"></span>
                                    </div>
                                </div>
                                <form class="contact-form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group contact-group">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group contact-group">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group contact-group">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                                            <div class="form-group contact-group">
                                                <input type="tel" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group contact-group">
                                                <select class="js-select2-multi" multiple="multiple" >
                                                    <option disabled>Product</option>
                                                    <option>Select A</option>
                                                    <option>Select B</option>
                                                    <option>Select C</option>
                                                    <option>Select D</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group contact-group">
                                                <select class="js-select2-multi" >
                                                    <option disabled>Quantity</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-10">
                                            <div class="form-group contact-group">
                                                <textarea class="form-control" placeholder="Message here...." rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="send-btn">
                                                <button type="button" class="main-btn perfeng-catagory-card-btn">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row location-col">
                        <div class="col-lg-12">
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact_section::End-->
@endsection
@section('script')
<script src="{{('assets/js/select2.min.js')}}"></script>

<script>
                $(document).ready(function () {
                  $('.navbar-toggler').click(
                    function () {
                      $("#navbarSupportedContent").addClass("menu-show");
                      $("#navbarSupportedContent").removeClass("menu-hide");
                
                    }
                  )
                
                  $('.close-menu').click(
                    function () {
                      $("#navbarSupportedContent").removeClass("menu-show");
                
                      $("#navbarSupportedContent").addClass("menu-hide");
                    }
                  )
                });
                $(document).ready(function () {
                
                  $(".Modern-Slider").slick({
                    autoplay: true,
                    autoplaySpeed: 10000,
                    speed: 600,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    pauseOnHover: false,
                    dots: false,
                    pauseOnDotsHover: true,
                    cssEase: 'linear',
                    // fade:true,
                    draggable: false,
                    prevArrow: '<button class="PrevArrow"></button>',
                    nextArrow: '<button class="NextArrow"></button>',
                  });
                
                })
                $(document).ready(function() {
                $(".js-select2").select2();
                $(".js-select2-multi").select2(
                {
                  placeholder: "Product"
                }
                );
                
                $(".large").select2({
                dropdownCssClass: "big-drop",
                });
                });
            </script>
@endsection