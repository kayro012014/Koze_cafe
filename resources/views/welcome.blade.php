<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" >
                    <li class="nav-item">
                        <a class="nav-link" href="#carouselExampleCaptions">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#amenities">AMENITIES</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#contactus">CONTACT US</a>
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
                            <img src="assets/pictures/koze_cat.jpg" alt="About" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>


                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-4 d-flex justify-content-center">
                        <div class="card text-white text-center bg-dark pb-2 custom-card-width">
                            <div class="card-body">
                                <h3 class="card-title">FREE WIFI</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                                    <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049"/>
                                    <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
                                </svg>
                                <p class="lead">Enjoy seamless connectivity with our complimentary high-speed Wi-Fi, perfect for staying connected or getting work done while you relax.</p>
                            </div>
                        </div>
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
