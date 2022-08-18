<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <title>Event Management System</title>
    <script>
        $(function() {
            $('a[href*=\\#]:not([href=\\#])').on('click', function() {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.substr(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 500);
                    return false;
                }
            });
        });
    </script>
</head>

<body>
    <div id="navbar">

        <div id="main1">
            <div id="logo">
                <div id="music">Music</div>
                <div id="loop">Loop</div>
            </div>
            <div id="navigate">
                <div class="nav">
                    <div><a href="#navbar">Home</a></div>
                </div>
                <div class="nav">
                    <div><a href="#sponser">Sponser</a></div>
                </div>
                <div class="nav">
                    <div><a href="#package">Package</a></div>
                </div>
                <div class="nav">
                    <div><a href="#upperhelp">Help Us</a></div>
                </div>
                <div class="nav">
                    <div><a href="register.php">Register</a></div>
                </div>
                <div class="nav">
                    <div><a href="#contact">Contact</a></div>
                </div>
            </div>
        </div>
        <div id="main2">
            <div id="submain21">
                <div id="submain211">Are You Ready For
                    <div id="submain212" class="element"></div>
                    <div><a href="#package"><button id="btn1">Details</button></a></div>
                </div>

            </div>
            <div id="submain22">
                <img src="atif5.png" />
            </div>
        </div>

        <div id="main3">
            <div>
                <div class="main31 icon1"><i class="fa-solid fa-money-bill fa-2x"></i></div>
                <div class="main31">Discount
                    <div class="main32">In Tickets</div>
                </div>
            </div>

            <div>
                <div class="main31 icon1"><i class="fa-solid fa-calendar-days fa-2x"></i></div>
                <div class="main31">Date
                    <div class="main32">At 28th August</div>
                </div>
            </div>

            <div>
                <div class="main31 icon1"><i class="fa-solid fa-ticket fa-2x"></i></div>
                <div class="main31">Total Tickets
                    <div class="main32">Limited Tickets</div>
                </div>
            </div>

        </div>

    </div>

    <!-- sponser starts -->
    <div id="sponser">
        <div id="sponser1">Sponsers
            <div id="sponser3"></div>
        </div>
        <div id="sponser2">
            <div id="spnospic1" class="hoverpic"></div>
            <div id="spnospic2" class="hoverpic"></div>
            <div id="spnospic3" class="hoverpic"></div>
            <div id="spnospic4" class="hoverpic"></div>
            <div id="spnospic5" class="hoverpic"></div>
        </div>

    </div>
    <!-- sponsers end -->

    <!-- packages start -->
    <div id="package">
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h3 class="mb-3 txt">Packages </h3>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn  btn3 mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn btn3 mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">

                                                <div class="card-body packlist">
                                                    <span class="cardtype">Classic</span>
                                                    <p class="card-text">
                                                        <ul class="cardtxt2">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                        </ul>
                                                    </p>
                                                    <span class="price">$ 5.99</span>
                                                    <div class="packbtn">
                                                        <button class="packbtn1">Buy Now !</button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body packlist">
                                                    <span class="cardtype">Silver</span>
                                                    <p class="card-text">
                                                        <ul class="cardtxt2">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                        </ul>
                                                    </p>
                                                    <span class="price">$ 6.99</span>
                                                    <div class="packbtn">
                                                        <button class="packbtn1">Buy Now !</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body packlist">
                                                    <span class="cardtype">Gold</span>
                                                    <p class="card-text">
                                                        <ul class="cardtxt2">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                        </ul>
                                                    </p>
                                                    <span class="price">$ 8.99</span>
                                                    <div class="packbtn">
                                                        <button class="packbtn1">Buy Now !</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body packlist">
                                                    <span class="cardtype">Diamond</span>
                                                    <p class="card-text">
                                                        <ul class="cardtxt2">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                        </ul>
                                                    </p>
                                                    <span class="price">$ 11.99</span>
                                                    <div class="packbtn">
                                                        <button class="packbtn1">Buy Now !</button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body packlist">
                                                    <span class="cardtype">Platinum</span>
                                                    <p class="card-text">
                                                        <ul class="cardtxt2">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                        </ul>
                                                    </p>
                                                    <span class="price">$ 13.99</span>
                                                    <div class="packbtn">
                                                        <button class="packbtn1">Buy Now !</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body packlist">
                                                    <span class="cardtype">Premium</span>
                                                    <p class="card-text">
                                                        <ul class="cardtxt2">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                        </ul>
                                                    </p>
                                                    <span class="price">$ 15.99</span>
                                                    <div class="packbtn">
                                                        <button class="packbtn1">Buy Now !</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body packlist">
                                                    <span class="cardtype">VIP</span>
                                                    <p class="card-text">
                                                        <ul class="cardtxt2">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                        </ul>
                                                    </p>
                                                    <span class="price">$ 17.99</span>
                                                    <div class="packbtn">
                                                        <button class="packbtn1">Buy Now !</button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body packlist">
                                                    <span class="cardtype">VVIP</span>
                                                    <p class="card-text">
                                                        <ul class="cardtxt2">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                        </ul>
                                                    </p>
                                                    <span class="price">$ 18.99</span>
                                                    <div class="packbtn">
                                                        <button class="packbtn1">Buy Now !</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div class="card-body packlist">
                                                    <span class="cardtype">Black Diamond</span>
                                                    <p class="card-text">
                                                        <ul class="cardtxt2">
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                            <li>Lorem ipsum dolor sit amet</li>
                                                            <li>numquam blanditiis harum</li>
                                                            <li>harum nesciunt ipsum </li>
                                                            <li>expedita sint? Sed quibusdam</li>
                                                            <li>alias error harum maxime</li>
                                                            <li>esse temporibus sint culpa</li>
                                                            <li>eligendi, placeat qui corporis</li>
                                                        </ul>
                                                    </p>
                                                    <span class="price">$ 20.99</span>
                                                    <div class="packbtn">
                                                        <button class="packbtn1">Buy Now !</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- packages end -->

    <!-- help start -->
    <div id="upperhelp">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,32L48,58.7C96,85,192,139,288,154.7C384,171,480,149,576,117.3C672,85,768,43,864,48C960,53,1056,107,1152,112C1248,117,1344,75,1392,53.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </div>
    <div id="help1">
        <div id="innerhelp">
            <div id="helptext">Help</div>
            <div id="helpcontent">
                <div class="help-block">
                    <div class="help-block-content"><i class="fa-solid fa-comment fa-3x"></i></div>
                    <div class="help-block-content lihelp">
                        <ul>
                            <li>Almost every piece of writing you do that is</li>
                            <li>good paragraph should not be measured </li>
                            <li>Various educators teach rules governing the length of paragraphs. </li>
                            <li>paragraph to be effective, it must begin with a topic</li>
                        </ul>
                    </div>
                </div>
                <div class="help-block">
                    <div class="help-block-content"><i class="fa-solid fa-download fa-3x"></i></div>
                    <div class="help-block-content lihelp">
                        <ul>
                            <li>Almost every piece of writing you do that is</li>
                            <li>good paragraph should not be measured </li>
                            <li>Various educators teach rules governing the length of paragraphs. </li>
                            <li>paragraph to be effective, it must begin with a topic</li>
                        </ul>
                    </div>
                </div>
                <div class="help-block">
                    <div class="help-block-content"><i class="fa-brands fa-servicestack fa-3x"></i>
                    </div>
                    <div class="help-block-content lihelp">
                        <ul>
                            <li>Almost every piece of writing you do that is</li>
                            <li>good paragraph should not be measured </li>
                            <li>Various educators teach rules governing the length of paragraphs. </li>
                            <li>paragraph to be effective, it must begin with a topic</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <svg id="helpend1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,128L48,128C96,128,192,128,288,149.3C384,171,480,213,576,234.7C672,256,768,256,864,213.3C960,171,1056,85,1152,69.3C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    <!-- help end -->
    <!-- contact start -->
    <div id="contact">
        <div id="innerconctact1">
            <div class="contactaction head">
                Contact Us
            </div>
            <div class="contactaction">
                <input type="text" class="inp1" placeholder="First Name" />
            </div>
            <div class="contactaction">
                <input type="text" class="inp1" placeholder="Last Name" />
            </div>
            <div class="contactaction">
                <input type="email" class="inp1" placeholder="Email" />
            </div>
            <div class="contactaction">
                <input type="text" class="inp1" placeholder="Message" />
            </div>
            <div class="contactaction">
                <button class="btn5">Submit</button>
            </div>
            <div class="contactaction">
                <div class="icon"><i class="fa-brands fa-facebook"></i> <a href="https://www.facebook.com/profile.php?id=100009164465054" class="anc2">Facebook</a></div>
                <div class="icon"><i class="fa-brands fa-instagram"></i> <a href="https://www.instagram.com/uddin.hasham/?hl=en" class="anc2">Instagram</a></div>
                <div class="icon"><i class="fa-brands fa-linkedin"></i> <a href="https://www.linkedin.com/in/hasham-uddin-5767a7210" class="anc2">Linkedin</a></div>
                <div class="icon"><i class="fa-solid fa-globe"></i> <a href="#" class="anc2">Website</a></div>
                <div class="icon"><i class="fa-solid fa-phone"></i> Contact +331 8347850</div>
            </div>
        </div>
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.6056293694437!2d67.11319331447933!3d24.94550134798853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338a24e592ea7%3A0x396c11bf227c8d35!2sUBIT%20-%20Umaer%20Basha%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2s!4v1660564199988!5m2!1sen!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


        </div>
    </div>
    <!-- contact end -->
    <script>
        $(function() {
            $('.carousel').carousel({
                interval: 2800 * 1
            })
        })
    </script>
    <script src="typed.js"></script>
    <script>
        var typed = new Typed('.element', {
            strings: [' The Biggest Event Ever', ' Your Dream Event'],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true
        });
    </script>
    <script>
        var typed = new Typed('#sponser3', {
            strings: ['Local And Multi National Companies Sponsored on this Event'],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true
        });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>