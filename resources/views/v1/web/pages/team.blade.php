@extends('v1.web.layouts.default')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection
@section('content')



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hamid RAHNAOUI ; PRESIDENT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row">
                    <div class="col-md-12 offset-md-3">
                        <img src="/assets/web/img/image001.jpg" class="img-thumbnail" alt="Hamid RAHNAOUI">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TEAM BLOCK -->
    <div class="team-block">
        <div class="container">
            <div class="team-block-wrap">
                <div class="head-title text-center">
                    <h2>
                        Notre Équipe
                    </h2>
                    <span data-aos="fade-up" class="line center"></span>
                </div>
                <div class="team-block-grid grid grid-cols-12 gap-12">

                    <div data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                        <div class="team-inner-block clearfix">
                            <img src="/assets/web/img/image001.jpg" alt="team-1">
                            <div class="team-details clearfix" style="width: 100%;">
                                <div class="inner-team-details" >
                                    <h3 class="team-name">
                                        Hamid RAHNAOUI
                                    </h3>
                                    <h5 class="team-job">PRESIDENT</h5>
                                    <div class="team-bio">
                                     
                                    </div>
                                    <div class="team-socials clearfix">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-17"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-13"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                        <div class="team-inner-block clearfix">
                            <img src="/assets/web/img/image003.jpg" alt="team-1">
                            <div class="team-details clearfix"  style="width: 100%;">
                                <div class="inner-team-details">
                                    <h3 class="team-name">
                                        Abdelilah FAHMI
                                    </h3>
                                    <h5 class="team-job">1er VICE PRESIDENT</h5>
                                    <div class="team-bio">
                                       
                                    </div>
                                    <div class="team-socials clearfix">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-17"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-13"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                        <div class="team-inner-block clearfix">
                            <img src="/assets/web/img/image002.jpg" alt="team-1">
                            <div class="team-details clearfix" style="width: 100%;">
                                <div class="inner-team-details" >
                                    <h3 class="team-name">
                                        ABDELLATIF EL ALAMI
                                    </h3>
                                    <h5 class="team-job">2ème VICE PRESIDENT</h5>
                                    <div class="team-bio">
                                        
                                    </div>
                                    <div class="team-socials clearfix">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-17"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-13"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                        <div class="team-inner-block clearfix">
                            <img src="/assets/web/img/image004.jpg" alt="team-1">
                            <div class="team-details clearfix"  style="width: 100%;">
                                <div class="inner-team-details">
                                    <h3 class="team-name">
                                        Issam ATOUF
                                    </h3>
                                    <h5 class="team-job">SECRETAIRE GENERAL</h5>
                                    <div class="team-bio">
                                     
                                    </div>
                                    <div class="team-socials clearfix">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-17"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-13"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                        <div class="team-inner-block clearfix">
                            <img src="/assets/web/img/image010.jpg" alt="team-1">
                            <div class="team-details clearfix" style="width: 100%;">
                                <div class="inner-team-details" >
                                    <h3 class="team-name">
                                        Taoufik EL OUDNI
                                    </h3>
                                    <h5 class="team-job">TRESORIER</h5>
                                    <div class="team-bio">
                                        
                                    </div>
                                    <div class="team-socials clearfix">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-17"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-13"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                        <div class="team-inner-block clearfix">
                            <img src="/assets/web/img/image008 (1).jpg" alt="team-1">
                            <div class="team-details clearfix" style="width: 100%;">
                                <div class="inner-team-details" >
                                    <h3 class="team-name">
                                        Mohamed EN NAJJAR</h3>
                                    <h5 class="team-job">VICE SECRETAIRE GENERAL</h5>
                                    <div class="team-bio">
                                       
                                    </div>
                                    <div class="team-socials clearfix">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-17"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-13"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                        <div class="team-inner-block clearfix">
                            <img src="/assets/web/img/image006.jpg" alt="team-1">
                            <div class="team-details clearfix" style="width: 100%;">
                                <div class="inner-team-details" >
                                    <h3 class="team-name">
                                        Marouan HAMDOUNI
                                    </h3>
                                    <h5 class="team-job">VICE TRESORIER
                                    </h5>
                                    <div class="team-bio">
                                      
                                    </div>
                                    <div class="team-socials clearfix">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-17"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-13"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                        <div class="team-inner-block clearfix">
                            <img src="/assets/web/img/image007.jpg" alt="team-1">
                            <div class="team-details clearfix" style="width: 100%;">
                                <div class="inner-team-details" >
                                    <h3 class="team-name">
                                        Mohamed EL BOUANANI

                                    </h3>
                                    <h5 class="team-job">CONSEILLER

                                    </h5>
                                    <div class="team-bio">
                                       
                                    </div>
                                    <div class="team-socials clearfix">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-17"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-13"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                        <div class="team-inner-block clearfix">
                            <img src="/assets/web/img/image005.jpg" alt="team-1">
                            <div class="team-details clearfix" style="width: 100%;">
                                <div class="inner-team-details" >
                                    <h3 class="team-name">
                                        Larbi NOURI


                                    </h3>
                                    <h5 class="team-job">CONSEILLER

                                    </h5>
                                    <div class="team-bio">
                                       
                                    </div>
                                    <div class="team-socials clearfix">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-17"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-13"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-block-item col-span-3 sm:col-span-12 res:col-span-6">
                        <div class="team-inner-block clearfix">
                            <img src="/assets/web/img/image009.jpg" alt="team-1">
                            <div class="team-details clearfix" style="width: 100%;">
                                <div class="inner-team-details" >
                                    <h3 class="team-name">
                                        Mustapha OUDRHIRI
                                    </h3>
                                    <h5 class="team-job">CONSEILLER

                                    </h5>
                                    <div class="team-bio">
                                       
                                    </div>
                                    <div class="team-socials clearfix">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-17"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-themify-13"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TEAM BLOCK END -->
    <!-- BANNER BLOCK -->
    <div class="banner-block">
        <div class="container">
            <div class="system-block-wrap grid grid-cols-12 gap-20">
                <div class="block-system col-span-4 sm:col-span-12 res:col-span-4">
                    <div class="system-image">
                        <i class="fas fa-phone-alt fa-5x"></i>
                    </div>
                    <div class="system-text">
                        <h3>Appelez-nous</h3>
                        <p>05 22 25 35 68</p>
                    </div>
                </div>
                <div class="block-system col-span-4 sm:col-span-12 res:col-span-4">
                    <div class="system-image">
                        <i class="fas fa-map-marker-alt fa-5x"></i>
                    </div>
                    <div class="system-text">
                        <h3>Nous Rendre Visite</h3>
                        <a href="https://goo.gl/maps/vKVDU4kWevXFJ1cA7" target="_blank">
                            <p>Amicale Al Jiza</p>
                        </a>
                    </div>
                </div>
                <div class="block-system col-span-4 sm:col-span-12 res:col-span-4">
                    <div class="system-image">
                        <i class="fas fa-envelope fa-5x"></i>
                    </div>
                    <div class="system-text">
                        <h3>
                            Envoyez Un Message</h3>
                                                <a href="mailto:Amicalealjiza@gmail.com">Amicalealjiza@gmail.com</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER BLOCK END -->
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
@endsection
