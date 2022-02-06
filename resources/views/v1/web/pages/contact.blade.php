@extends('v1.web.layouts.default')
@section('content')
    <!-- CONTACT START -->
    <div class="page-contact">
        <div class="container">
            <div class="iframe-wrap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6652.268601829713!2d-7.6121459!3d33.5238937!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda633573d22b9c7%3A0x2225828e91cfb1c9!2sAMICALE%20ALJIZA!5e0!3m2!1sfr!2sma!4v1640815502667!5m2!1sfr!2sma"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contact-wrap grid grid-cols-12 gap-20">
                <div class="contact-us banner-text col-span-6 sm:col-span-12 res:col-span-12">
                    <div class="the-title">
                        <h2>Contactez-nous</h2>
                        <span class="line"></span>
                    </div>
                    <div class="social-contact col-span-6 sm:col-span-12 res:col-span-12">
                        <div class="social-share clearfix">
                            <ul class="clearfix">
                                <li class="soc-icon"><a class="facebook" href="#"><i class="icon icon-themify-17"></i></a></li>
                                <li class="soc-icon"><a class="twitter" href="#"><i class="icon icon-themify-13"></i></a></li>
                            </ul>
                        </div>
                        <div class="social-contact-wrap">
                            <div class="social-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="social-info">
                                <h4> Téléphone</h4>
                                <span>05 22 25 35 68</span>
                            </div>
                        </div>
                        <div class="social-contact-wrap">
                            <div class="social-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="social-info">
                                <h4> Email</h4>
                                <span>amicalealjiza@gmail.com  </span>
                            </div>
                        </div>
                        <div class="social-contact-wrap">
                            <div class="social-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="social-info">
                                <h4> Adresse</h4>
                                <span>CALIFORNIE AIN CHOK, Casablanca, Maroc.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form col-span-6 sm:col-span-12 res:col-span-12">
                    <div class="form-wrap contact-form-style-1">
                        <div class="contact-bordered item-column clearfix">
                            <span class="wpcf7-form-control-wrap your-name">
                                <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name">
                            </span> 
                            <span class="contact-ef border-form-top"><br>
                            </span><br>
                            <span class="contact-ef border-form-left"><br>
                            </span><br>
                            <span class="contact-ef border-form-bottom"><br>
                            </span><br>
                            <span class="contact-ef border-form-right"><br>
                            </span>
                        </div>
                        <div class="contact-bordered item-column clearfix">
                            <span class="wpcf7-form-control-wrap your-name">
                                <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Email">
                            </span> 
                            <span class="contact-ef border-form-top"><br>
                            </span><br>
                            <span class="contact-ef border-form-left"><br>
                            </span><br>
                            <span class="contact-ef border-form-bottom"><br>
                            </span><br>
                            <span class="contact-ef border-form-right"><br>
                            </span>
                        </div>
                        <div class="contact-bordered item-column clearfix">
                            <span class="wpcf7-form-control-wrap your-name">
                                <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Subject">
                            </span> 
                            <span class="contact-ef border-form-top"><br>
                            </span><br>
                            <span class="contact-ef border-form-left"><br>
                            </span><br>
                            <span class="contact-ef border-form-bottom"><br>
                            </span><br>
                            <span class="contact-ef border-form-right"><br>
                            </span>
                        </div>
                        <div class="contact-bordered item-column text-area clearfix">
                            <span class="wpcf7-form-control-wrap your-message">
                                <textarea name="your-message" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Text"></textarea>
                            </span>
                            <span class="contact-ef border-form-top"><br>
                            </span><br>
                            <span class="contact-ef border-form-left"><br>
                            </span><br>
                            <span class="contact-ef border-form-bottom"><br>
                            </span><br>
                            <span class="contact-ef border-form-right"><br>
                            </span>
                        </div>
                        <div class="contact-submit clearfix">
                            {{-- <a href="mailto:Amicalealjiza@gmail.com" class="button-basic-1">Laissez un message</a> --}}
                                <form action="mailto:Amicalealjiza@gmail.com">
                                        <input style="cursor:pointer" type="submit" value="Laissez un message"  class="button-basic-1">
                                
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT END -->
@endsection