<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Newspaper Layout</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            background: #ffffff;
        }

        .img-slider {
            position: relative;

        }

        .img-slider .slide {
            z-index: 1;
            position: absolute;
            width: 100%;
            clip-path: circle(0% at 0 50%);
        }

        .img-slider .slide.active {
            clip-path: circle(150% at 0 50%);
            transition: 2s;
            transition-property: clip-path;
        }

        .img-slider .slide img {
            z-index: 1;
            border-radius: 5px;
            flex-shrink: 0;
            min-width: 100%;
            min-height: 100%
        }

        .img-slider .slide .info {
            position: absolute;
            top: 0;
            padding: 15px 30px;
        }

        .img-slider .slide .info h2 {
            color: #fff;
            font-size: 38px;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .img-slider .slide .info p {
            color: #fff;
            background: rgba(0, 0, 0, 0.1);
            font-size: 15px;
            width: 60%;
            padding: 10px;
            border-radius: 4px;
        }

        .img-slider .navigation {
            z-index: 2;
            position: absolute;
            display: flex;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
        }

        .img-slider .navigation .btn {
            background: rgba(255, 255, 255, 0.5);
            width: 12px;
            height: 12px;
            margin: 10px;
            border-radius: 50%;
            cursor: pointer;
        }

        .img-slider .navigation .btn.active {
            background: #FFC31D;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 820px) {
            .img-slider {
                width: 600px;
                height: 375px;
            }

            .img-slider .slide .info {
                padding: 10px 25px;
            }

            .img-slider .slide .info h2 {
                font-size: 25px;
            }

            .img-slider .slide .info p {
                width: 70%;
                font-size: 12px;
            }

            .img-slider .navigation {
                bottom: 25px;
            }

            .img-slider .navigation .btn {
                width: 10px;
                height: 10px;
                margin: 8px;
            }
        }

        @media (max-width: 620px) {
            .img-slider {
                width: 400px;
                height: 250px;
            }

            .img-slider .slide .info {
                padding: 10px 20px;
            }

            .img-slider .slide .info h2 {
                font-size: 22px;
            }

            .img-slider .slide .info p {
                width: 80%;
                font-size: 8px;
            }

            .img-slider .navigation {
                bottom: 15px;
            }

            .img-slider .navigation .btn {
                width: 8px;
                height: 8px;
                margin: 6px;
            }
        }

        @media (max-width: 420px) {
            .img-slider {
                width: 320px;
                height: 200px;
            }

            .img-slider .slide .info {
                padding: 5px 10px;
            }

            .img-slider .slide .info h2 {
                font-size: 18px;
            }

            .img-slider .slide .info p {
                width: 90%;
                font-size: 6px;
            }

            .img-slider .navigation {
                bottom: 10px;
            }
        }

        li {
            padding: 5px;
        }

        #titles:hover {
            cursor: pointer;
            color: #FFC31D;
        }

        #titles {
            font-size: 15px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: dimgray;

        }

        .titlep {
            margin: 10px 0 10px 0;
        }

    </style>
</head>

<body>
    <div class="container">


        <div class="main">
            <div class="home">
                <div class="right">
                    <h3 class="heading-3">ACTUALITES</h3>
                    <div style="width: 20%; height: 5px; background-color: #FFC31D; border-radius: 5px;"></div>
                    <div class="lisssts">
                        <a class="btn" id="titles"> </a>

                        <p class="titlep"><a class="btn" id="titles"> <span
                                    style="color:#FFC31D; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">></span>
                                Terrassement de la tranche 7 </a></p>

                        <p class="titlep"><a class="btn" id="titles"> <span
                                    style="color:#FFC31D; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">></span>
                                Statistiques d'affectation </a></p>

                        <p class="titlep"><a class="btn" id="titles"> <span
                                    style="color:#FFC31D; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">></span>
                                Opération d'affectation </a></p>

                        <p class="titlep"><a class="btn" id="titles"> <span
                                    style="color:#FFC31D; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">></span>
                                Isolation Horizontale </a></p>

                        <p class="titlep"><a class="btn" id="titles"> <span
                                    style="color:#FFC31D; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">></span>
                                Etanchéité & Protection des terrasses </a></p>
                    </div>
                </div>
                <div class="left">
                    <div class="img-slider">
                        <div class="slide active">

                            <h3 style="margin-bottom: 10px; color:#FFC31D;">
                                NEWS</h3>
                            <div
                                style="width: 20%; height: 5px; background-color: #FFC31D; border-radius: 5px; margin-bottom: 10px;">
                            </div>
                            <img src="../../images/VUE1%20(1).jpg" class="home-img" alt="Paper photo">
                        </div>



                        <div class="slide ">

                            <h3 style="margin-bottom: 10px; color: dimgray;">Terrassement de la tranche 7 </h3>
                            <div
                                style="width: 20%; height: 5px; background-color: #FFC31D; border-radius: 5px; margin-bottom: 10px;">
                            </div>
                            <!--<img src="../../images/terrassement-de-la-tranche-7-1640002199.mp4" class="home-img" alt="Paper photo">-->
                            <video width="500" height="400" controls>
                                <source src="../../images/terrassement-de-la-tranche-7-1640002199.mp4" type="video/mp4">
                            </video>
                            <h5 class="para" style="margin-top: 10px; color: dimgray;">
                                <br><br>Début des travaux de terrassement de la tranche 7

                            </h5>
                        </div>

                        <div class="slide ">

                            <h3 style="margin-bottom: 10px; color: dimgray;">Statistiques d'affectation</h3>
                            <div
                                style="width: 20%; height: 5px; background-color: #FFC31D; border-radius: 5px; margin-bottom: 10px;">
                            </div>
                            <!--<img src="../../images/statistiques1_0-1639608632.jpg" class="home-img" alt="Paper photo">-->
                            <img style="height:500px;" src="../../images/statistiques1_0-1639608632.jpg"
                                class="home-img" alt="Code Paper photo">
                            <h5 class="para" style="margin-top: 10px; color: dimgray;">
                                Statistiques d'affectation des adhérents<br><br>Plus de 250 appartements ont été
                                affectés à nos adhérents

                            </h5>
                        </div>

                        <div class="slide ">

                            <h3 style="margin-bottom: 10px; color: dimgray;">Opération d'affectation</h3>
                            <div
                                style="width: 20%; height: 5px; background-color: #FFC31D; border-radius: 5px; margin-bottom: 10px;">
                            </div>
                            <!--<img src="../../images/tableau-d'affectation-a-la-date-1640003493.jpg" class="home-img" alt="Paper photo">-->
                            <img style="height:500px;" src="../../images/tableau-d'affectation-a-la-date-1640003493.jpg"
                                class="home-img" alt="Code Paper photo">
                            <h5 class="para" style="margin-top: 10px; color: dimgray;">
                                L'affectation des appartements se poursuit selon le critère" Premier venu, Premier
                                servi".<br><br>

                            </h5>
                        </div>

                        <div class="slide ">

                            <h3 style="margin-bottom: 10px; color: dimgray;">Isolation Horizontale</h3>
                            <div
                                style="width: 20%; height: 5px; background-color: #FFC31D; border-radius: 5px; margin-bottom: 10px;">
                            </div>
                            <!--<img src="../../images/isolation-horizontale-1640696691.mp4" class="home-img" alt="Paper photo">-->
                            <video width="500" height="400" controls>
                                <source src="../../images/isolation-horizontale-1640696691.mp4" type="video/mp4">
                            </video>
                            <h5 class="para" style="margin-top: 10px; color: dimgray;">
                                Etapes de l'exécution des travaux d'isolation horizontale<br><br>

                            </h5>
                        </div>

                        <div class="slide ">

                            <h3 style="margin-bottom: 10px; color: dimgray;">Etanchéité & Protection des terrasses</h3>
                            <div
                                style="width: 20%; height: 5px; background-color: #FFC31D; border-radius: 5px; margin-bottom: 10px;">
                            </div>
                            <!--<img src="../../images/etancheite-des-terasses-1640696817.mp4" class="home-img" alt="Paper photo">-->
                            <video width="500" height="400" controls>
                                <source src="../../images/etancheite-des-terasses-1640696817.mp4" type="video/mp4">
                            </video>
                            <h5 class="para" style="margin-top: 10px; color: dimgray;">
                                Etapes da la mise en place de l'étanchéité et la protection des terrasses <br><br>

                            </h5>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <script type="text/javascript">
            var slides = document.querySelectorAll('.slide');
            var btns = document.querySelectorAll('.btn');
            let currentSlide = 1;

            // Javascript for image slider manual navigation
            var manualNav = function(manual) {
                slides.forEach((slide) => {
                    slide.classList.remove('active');

                    btns.forEach((btn) => {
                        btn.classList.remove('active');
                    });
                });

                slides[manual].classList.add('active');
                btns[manual].classList.add('active');
            }

            btns.forEach((btn, i) => {
                btn.addEventListener("click", () => {
                    manualNav(i);
                    currentSlide = i;
                });
            });

            // Javascript for image slider autoplay navigation
            var repeat = function(activeClass) {
                let active = document.getElementsByClassName('active');
                let i = 1;

                var repeater = () => {
                    setTimeout(function() {
                        [...active].forEach((activeSlide) => {
                            activeSlide.classList.remove('active');
                        });

                        slides[i].classList.add('active');
                        btns[i].classList.add('active');
                        i++;

                        if (slides.length == i) {
                            i = 0;
                        }
                        if (i >= slides.length) {
                            return;
                        }
                        repeater();
                    }, 5000);
                }
                repeater();
            }
            repeat();
        </script>
</body>

</html>
