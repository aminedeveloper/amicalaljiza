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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            min-height: 100vh;
            max-width: 100vw;
            line-height: 1.4;
            padding: 20px 40px;
        }

        .container {
            max-width: 1500px;
        }

        .heading-1 {
            font-size: 40px;
            text-transform: uppercase;
        }

        .heading-2 {
            font-size: 40px;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .heading-3 {
            font-size: 20px;
            text-transform: uppercase;
            color: #FFC31D;
            margin-bottom: 10px;
        }


        .sub-heading {
            font-size: 20px;
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }

        .sub-heading p {
            font-weight: 700;
            text-transform: capitalize;
            margin-right: 10px;
        }

        .sub-heading span {
            color: #555;
            font-weight: 300;
            border-right: 1px solid #ccc;
            padding-right: 10px;
        }

        .sub-heading .importent {
            color: crimson;
            text-transform: uppercase;
            font-weight: 300;
        }

        /* HOME */
        .home {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 40px;
        }

        .home-img {
            width: 100%;
        }

        .list {
            display: grid;

            gap: 10px;
            margin-bottom: 10px;
        }

        .list img {
            width: 100%;
            height: 80px;
        }

        /* ARTICLE */
        article>p {
            font-size: 20px;
            margin-bottom: 20px;

            columns: 3 25ch;
            column-gap: 40px;
            hyphens: auto;
        }

        article p:first-child::first-line {
            font-weight: 700;
            font-size: 25px;
        }

        /* blockquote */
        blockquote {
            font-size: 20px;
            padding: 10px 30px;
            margin-bottom: 40px;
            position: relative;
        }

        blockquote::before {
            content: open-quote;
            position: absolute;
            top: -48px;
            left: -4px;
            opacity: .3;
            color: #666;
            font-size: 150px;
        }

        .cards {
            columns: 25ch 3;
            gap: 40px;
            margin-bottom: 40px;
        }

        .card {
            font-size: 20px;
            border: 1px solid;
            padding: 10px 20px;
            break-inside: avoid;
        }

        @media (max-width: 600px) {
            .home {
                grid-template-columns: 1fr;
            }

            .lists {
                display: grid;
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .list {
                grid-template-columns: 1fr;
            }

            .card {
                margin-bottom: 40px;
            }
        }

        @media (max-width: 450px) {
            .lists {
                grid-template-columns: 1fr;
            }
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
                            @foreach ($news as $new)
                                <p class="titlep">
                                    <a class="btn amine" news="#news_{{$new->id}}" id="titles">
                                        <span
                                            style="color:#FFC31D; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                                            >
                                        </span>
                                        {{$new->name}}
                                    </a>
                                </p>
                            @endforeach
                        </div>
                    </div>
                    <div class="left">
                        <div class="img-slider">
                            @foreach ($news as $new)
                                <div id="news_{{$new->id}}" class="slide @if($topnews->id == $new->id) active @endif">

                                    <h3 style="margin-bottom: 10px; color:#FFC31D;">
                                        NEWS</h3>
                                    <div
                                        style="width: 20%; height: 5px; background-color: #FFC31D; border-radius: 5px; margin-bottom: 10px;">
                                    </div>
                                    @if ($new->extension == 'mp4')
                                        <video width="500" height="400" controls> 
                                            <source src="/{{ $new->path }}" type="video/mp4">
                                        </video>
                                    @elseif ($new->extension == 'pdf' || $new->extension == 'doc'  || $new->extension == 'docx')
                                      <a href="/{{ $new->path }}">Téléchargez l\'annonce </a>

                                    
                                    @else
                                        <img src="{{ Storage::url($new->path) }}" class="home-img" alt="Paper photo">
                                    @endif
                                    <h5 class="para" style="margin-top: 10px; color: dimgray;">
                                       {{Str::words($new->description, 10, ' ...')}} <br><br>
                                       {{$new->name }}
                                    </h5>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

            <script src="/assets/web/js/jquery.3.5.1.min.js"></script>

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
                        }, 10000);
                    }
                    repeater();
                }
                repeat();
            </script>
            <script>
                $('.amine').click(function(){
                    let d = $(this).attr('news');
                    $('.active').removeClass('active');
                    $(d).addClass('active');
                });
            </script>
    </body>

</html>
