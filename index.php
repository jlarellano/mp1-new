<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="images/logo-2.png">
        <title>BIGBREW</title>
    </head>

    <body>
        <!-- NAVBAR STARTS -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand">BIGBREW</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#products">Products</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#grow">Grow with Us</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- NAVBAR ENDS -->

        <!-- SECTION STARTS HERE -->
        <section id="home">
            <div class="container">
                <div class="container-home">
                    <div class="row home-content">
                        <div class="col-lg-4 col-md-8">
                            <div class="home-image-details">
                                <img src="images/img-34.jpg" class="img-home">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="details">
                                <h1 class="home-heading">
                                    <span class="b-design">B</span>igBrew serves coffee, tea, and snacks that are "big" in taste but "bit" in price.
                                </h1>
                                <p>If you're looking for high-quality milk tea while in a budget;
                                    Craving for some sweet and delicious drinks
                                    without cutting your wherewithal?
                                    Worry no more as BigBrew serves your favorite coffee,
                                    milk tea, and snacks in incredibly affordable cost!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about-section">
            <div class="container">
                <div class="container-about">
                    <div class="about-us-content">
                        <div class="about-row">
                            <div class="col-lg-6">
                                <div class="content-about">
                                    <h3 class="heading">About Us</h3>
                                    <p class="parag-about">Big Brew is a Filipino-owned company that started in 2019 with the 
                                        vision of providing high-quality coffee, tea, and snacks to Filipinos 
                                        at affordable prices. Big Brew aims to satisfy the taste buds of its 
                                        customers with its wide range of flavors and toppings. Big Brew also 
                                        prides itself on its fast and friendly service, its cozy and clean 
                                        ambiance, and its social responsibility initiatives. Big Brew has over 
                                        50 branches nationwide and plans to expand more in the future.
                                    </p>
                                    <a href="#products" class="link-about">
                                        <span class="span-about"></span>
                                        Check our Products
                                        <span class="icon-arrow">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>  
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="images/img-38.jpg" class="img-about">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="products" class="products-section">
            <h3 class="heading heading-products">POPULAR DRINKS</h3>
            <h6>Try our popular drinks</h6>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <div class="card border-0 bg-light mb-4">
                            <div class="card-body">
                                <img src="images/img-6.jpg" class="img-fluid">
                            </div>
                            <div class="card-name">
                                <h6>CHEESECAKE</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="card border-0 bg-light mb-4">
                            <div class="card-body">
                                <img src="images/img-11.jpg" class="img-fluid">
                            </div>
                            <div class="card-name">
                                <h6>COOKIES & CREAM</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="card border-0 bg-light mb-4">
                            <div class="card-body">
                                <img src="images/img-17.jpg" class="img-fluid">
                            </div>
                            <div class="card-name">
                                <h6>KAPE VANILLA</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="card border-0 bg-light mb-4">
                            <div class="card-body">
                                <img src="images/img-15.jpg" class="img-fluid">
                            </div>
                            <div class="card-name">
                                <h6>KAPE MACCH</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 text-center m-auto">
                        <a href="#grow" class="btn-one">Click for more</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="grow" class="grow-section">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-4 col-md-8">
                        <div class="grow-image">
                            <img src="images/img-39.jpg" class="img-grow">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="grow-details">
                            <h3 class="heading">BECOME A PARTNER</h3>
                            <p>
                                IF YOU ARE INTERESTED IN BEING PART OF THE BIGBREW FRANCHISE, PLEASE FILL UP THE FORM BELOW
                            </p>
                        </div>
                        <div class="col-lg-12 col-md-8 mt-3">
                            <form class="form-origin-grow">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Full Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Email Address" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Contact Number" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <textarea class="form-control" placeholder="Your Message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <a href="#" class="btn-submit-form">SUBMIT</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="contact" class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <form class="form-origin">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Full Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Email Address" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <textarea class="form-control" placeholder="Your Message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <a href="#" class="btn-submit">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="content-contact">
                            <h3 class="heading">GET IN TOUCH!</h3>
                            <h5>
                                HAVE QUESTIONS? WE ARE HAPPY TO ANSWER!
                            </h5>

                            <div class="social-links">
                                <h6>Follow us on</h6>
                                <a href="https://www.facebook.com/bigbrew.main">
                                    <i class="fa-brands fa-facebook"></i>
                                    <span class="social-name">Bigbrew Main</span>
                                </a>
                                <br>
                                <a href="https://www.instagram.com/bigbrew.main/">
                                    <i class="fa-brands fa-instagram"></i>
                                    <span class="social-name">Bigbrew Main</span>
                                </a>
                                <br>
                                <a href="https://www.tiktok.com/@bigbrewmain">
                                    <i class="fa-brands fa-tiktok"></i>
                                    <span class="social-name">Bigbrew Main</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- SECTION ENDS HERE -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
    </body>
</html>