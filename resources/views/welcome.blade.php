<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/pictures/images.png') }}" type="png">
    <title>Koze Cafe</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light-violet fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: black; font-weight: bold">Koze Cafe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="material-symbols-outlined">
                pets
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 " >
                    <li class="nav-item">
                        <a class="nav-link px-lg-3" href="#carouselExampleCaptions">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-lg-3" href="#aboutus">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-lg-3" href="#amenities">AMENITIES</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link px-lg-3" href="#contactus">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators" id="aboutus">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/pictures/background(landing).jpg" class="d-block w-100" alt="Please Like and Follow Koze Cafe">
                <div class="carousel-caption ">
                    <h5>Cozy Escapes with Coffee and Cat</h5>
                    <p>Koze Cafe offers a cozy escape with delightful coffee and charming cats, creating the perfect blend of warmth and relaxation. Enjoy a purrfectly soothing experience with every visit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/pictures/background2.jpg" class="d-block w-100" alt="Please Like and Follow Koze Cafe">
                <div class="carousel-caption ">
                    <h5>Sip, Relax, and Purr</h5>
                    <p>Indulge in our delicious coffee while being serenaded by the soft purrs of our resident cats. Your perfect relaxation spot awaits!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/pictures/background3.jpg" class="d-block w-100" alt="Please Like and Follow Koze Cafe">
                <div class="carousel-caption ">
                    <h5>Warm Drinks and Cat Cuddles</h5>
                    <p>Sip on your favorite beverage while enjoying the comforting presence of our affectionate cats. It’s the perfect spot for relaxation and feline fun.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


     <!-- about services --> 
        <section id="#about" class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="about-img">
                            <img src="assets/pictures/About.jpg" alt="About" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                        <div class="about-text">
                            <h2>We Serve Best Quality Services</h2>
                            <p>Koze Cafe is your cozy retreat in the heart of Davao City,
                            where the warmth of freshly brewed coffee meets the comfort of
                            feline companionship. Established with a passion for creating
                            a welcoming space, our cafe offers a unique blend of aromatic
                            coffee and charming cats, providing the perfect ambiance for
                            relaxation and connection. Whether you're here to unwind with 
                            a good book, catch up with friends, or simply enjoy the soothing
                            presence of our resident cats, Koze Cafe promises a delightful and memorable experience.
                            Join us and discover why we're Davao City's favorite spot for coffee and cat cuddles!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--- amenities Section --->

                 <section id="amenities" class="amenities section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                        <div class="about-text">
                            <h2>Our Amenities</h2>
                            <p>At Koze Cafe, you can enjoy a range of amenities including free high-speed Wi-Fi,
                                 cozy seating areas, and a selection of delicious beverages, 
                                all while spending time with our friendly resident cats.</p>
                        </div>
                    </div>
            <div class="col-lg-4 col-md-12 col-12">
                <div class="cat-img">
                    <img src="assets/pictures/koze_cat.jpg" id="cat1"  alt="About" class="img-fluid " >
                    <img src="assets/pictures/koze_cat2.jpg" id="cat2" alt="About" class="img-fluid " >
                    <img src="assets/pictures/koze_cat3.jpg" id="cat3" alt="About" class="img-fluid " >
                </div>
            </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">

                <div class="col-lg-2 col-md-2 text-center bg-purple rounded shadow py-4 my-3 mx-4 ms-2 ">
                                <img src="assets/pictures/wifi-solid.svg" width="50px">
                                <h5 class="mt-3">WIFI</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-purple rounded shadow py-4 my-3 mx-4 ms-4">
                                <img src="assets/pictures/aircon.svg" width="50px">
                                <h5 class="mt-3">Air Conditioned</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-purple rounded shadow py-4 my-3 mx-3 ms-4">
                                <img src="assets/pictures/paw.svg" width="50px">
                                <h5 class="mt-3">Cats</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-purple rounded shadow py-4 my-3 mx-4 ms-4">
                                <img src="assets/pictures/speaker.svg" width="50px">
                                <h5 class="mt-3">Music</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-purple rounded shadow py-4 my-3 mx-4 ms-4">
                                <img src="assets/pictures/book.svg" width="50px">
                                <h5 class="mt-3">Books</h5>
                    </div>
                    
                </div>
            </div>
        </section>

      <!--- Contact -->
      <section id="contactus" class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Contact Us</h2>
                        <p>Feel free to reach us at <b>0905 469 3991</b> for any inquiries, or email us at <b>kozecafedvo@gmail.com</b></p>
                        <p>Connect with us on Facebook at <b>Koze Cafe Davao</b> for the latest updates and special offers.</p>
                    </div>
                </div>
            </div>
        </div>
      </section>


    <!--- footer -->
    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p class="text-white">All Rights Reserved Koze Cafe</p>
        </div>
    </footer>






<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Q5T1XwooxJrrH5EYCGJNLsAxZ8HD/z6cAF0b1vXpVV4L9L4soJqaYPzXj6W3urJb" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-1fRBx07U5OELlzWTzNljESrcpbLGd22AKQwEp+Zg4yB5FFLRkIkJmc6HlXK6o9j5" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.navbar-collapse') && !e.target.closest('.navbar-toggler')) {
                var navbarCollapse = document.querySelector('.navbar-collapse');
                var bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                if (bsCollapse && bsCollapse._isShown()) {
                    bsCollapse.hide();
                }
            }
        });

        document.querySelectorAll('.navbar-nav .nav-link').forEach(function (link) {
            link.addEventListener('click', function () {
                var navbarCollapse = document.querySelector('.navbar-collapse');
                var bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                if (bsCollapse && bsCollapse._isShown()) {
                    setTimeout(function () {
                        bsCollapse.hide();
                    }, 2000); // Close the navbar after 2 seconds
                }
            });
        });
    </script>
</body>
</html>
