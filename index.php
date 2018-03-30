<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="/src/css/myStyle.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:500" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l"
    crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/regular.js" integrity="sha384-t7yHmUlwFrLxHXNLstawVRBMeSLcXTbQ5hsd0ifzwGtN7ZF7RZ8ppM7Ldinuoiif"
    crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" integrity="sha384-sCI3dTBIJuqT6AwL++zH7qL8ZdKaHpxU43dDt9SyOzimtQ9eyRhkG3B7KMl6AO19"
    crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c"
    crossorigin="anonymous"></script>
  <title>Gerry Studio | Home</title>
</head>

<body id="myBody">
  <div class="d-flex navbar navbar-expand-md flex-column flex-md-row align-items-center p-3 px-md-4 bg-dark box-shadow sticky-top">
    <div class="container nav">
      <a class="navbar-brand text-light" href="https://fontawesome.com/">
        <i class="fas fa-code"></i>
      </a>
      <h5 class="navbar-brand my-0 mr-md-auto font-weight-bold text-light">Gerry's Studio</h5>

      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#gerry-nav" aria-controls="gerry-nav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="gerry-nav">
        <ul class="navbar-nav my-2 my-md-0 mr-md-3 navbar-dark">
          <li class="nav-item">
            <a class="nav-link p-2 text-light" href="./index.html" active>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 text-light" href="about.html">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 text-light" href="work.html">My Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 text-light" href="#contact">Contact Me</a>
          </li>
          <li class="nav-item">
              <span class="nav-link p-2 text-light">|</span>
            </li>

          <li class="nav-item">
              <a class="nav-link p-2 text-light" href="./login.php">Sign In</a>
            </li>
        </ul>
      </div>

    </div>

  </div>

  <section id="head-section">
    <div id="topShowcase" class="position-relative overflow-hidden p-3 p-md-5 text-center bg-dark text-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-2 font-weight-normal">Hi, I'm Gerry<?php echo "From php!"?></h1>
        <p class="lead font-weight-normal">Developer / Designer :)</p>
        <p class="text-muted font-weight-normal">iOS / Android / Web / Design Enthusiast</p>
        <br>

        <a class="btn btn-lg btn-outline-light" href="./about.html">Learn more about Me</a>
      </div>

      <div class="d-none d-md-flex justify-content-center">
        <div class="row px-5 w-70">
          <div class="col-sm-4">
            <!--Top Layer-->
            <div class="i">
              <i class="fab fa-angrycreative icons-float-left" style="width:100px;height:auto;"></i>
              <i class="fas fa-adjust icons-float-left" style="width:50px;height:auto;animation-delay:0.1s"></i>
            </div>
            <!--Mid Layer-->
            <div class="i">
              <i class="fab fa-accessible-icon icons-float-left" style="width:50px;height:auto; animation-delay:0.2s"></i>
              <i class="fab fa-app-store icons-float-left pt-1" style="width:50px;height:auto;animation-delay:0.3s"></i>
              <i class="fab fa-adversal icons-float-left mt-2" style="width:40px;height:auto;animation-delay:0.4s"></i>
            </div>
            <!--Bottom Layer-->
            <div class="i">
              <i class="fab fa-apple icons-float-left" style="width:30px;height:auto;animation-delay: 0.5s;"></i>
              <i class="fab fa-bluetooth-b icons-float-left" style="width:30px;height:auto;animation-delay: 0.6s;"></i>
              <i class="fas fa-anchor icons-float-left" style="width:30px;height:auto;animation-delay: 0.7s;"></i>
              <i class="fas fa-bowling-ball icons-float-left" style="width:20px;height:auto;animation-delay: 0.4s;"></i>
            </div>
            <!--Super small Layer-->
            <div class="i">
              <i class="far fa-bell icons-float-left" style="width:15px;height:auto;animation-delay:0.4s;"></i>
            </div>
          </div>
          <div class="col-sm-4">
            <!--Out Layer-->
            <div class="i">
              <i class="fas fa-asterisk icons-float-up" style="width:40px;height:auto;"></i>
            </div>
            <!--Top Layer-->
            <div class="i">
              <i class="fab fa-grav icons-float-up" style="width:100px;height:auto; animation-delay:0.1s;"></i>
              <i class="fab fa-goodreads icons-float-up" style="width:50px;height:auto; transform:rotate(-45deg);"></i>
            </div>
            <!--Mid Layer-->
            <div class="i">
              <i class="fab fa-angular icons-float-up" style="width:50px;height:auto;animation-delay:0.2s;"></i>
              <i class="fab fa-app-store icons-float-up" style="width:50px;height:auto;animation-delay:0.3s;"></i>
              <i class="fas fa-asterisk icons-float-up" style="width:30px;height:auto;animation-delay:0.3s;"></i>
            </div>
            <!--Bottom Layer-->
            <div class="i">
              <i class="fab fa-accusoft icons-float-up" style="width:20px;height:auto;animation-delay: 0.7s;"></i>
              <i class="fas fa-at icons-float-up" style="width:30px;height:auto;animation-delay:0.5s;"></i>
              <i class="fab fa-avianex icons-float-up" style="width:30px;height:auto;animation-delay:0.4s;"></i>
              <i class="fab fa-android icons-float-up" style="width:30px;height:auto;animation-delay: 0.7s;"></i>
              <i class="far fa-address-book icons-float-up" style="width:20px;height:auto;animation-delay: 0.7s;"></i>
            </div>
            <!--Super small Layer-->
            <div class="i">
              <i class="fas fa-quote-right icons-float-up" style="width:15px;height:auto;animation-delay:0.4s;"></i>
              <i class="fas fa-question icons-float-up" style="width:20px;height:auto;animation-delay:0.5s;"></i>
              <i class="fas fa-bomb icons-float-up" style="width:15px;height:auto;animation-delay:0.7s;"></i>
            </div>
          </div>
          <div class="col-sm-4">
            <!--Top Layer-->
            <div class="i">
              <i class="fas fa-quote-right icons-float-right" style="width:100px;height:auto; animation-delay:0.1s;"></i>
              <i class="fas fa-band-aid icons-float-right" style="width:50px;height:auto;"></i>
            </div>
            <!--Mid Layer-->
            <div class="i">
              <i class="fas fa-bug icons-float-right" style="width:40px;height:auto;animation-delay:0.2s;"></i>
              <i class="fas fa-balance-scale icons-float-right" style="width:50px;height:auto;animation-delay:0.2s;"></i>
              <i class="fab fa-bandcamp icons-float-right" style="width:50px;height:auto;animation-delay:0.3s;"></i>
            </div>
            <!--Bottom Layer-->
            <div class="i">
              <i class="fas fa-bath icons-float-right" style="width:30px;height:auto;animation-delay:0.4s;"></i>
              <i class="fab fa-behance icons-float-right" style="width:30px;height:auto;animation-delay:0.5s;"></i>
              <i class="fab fa-angellist icons-float-right" style="width:30px;height:auto;animation-delay:0.7s;"></i>
              <i class="fas fa-qrcode icons-float-right" style="width:30px;height:auto;animation-delay:0.7s;"></i>
            </div>
            <!--Super small Layer-->
            <div class="i">
              <i class="far fa-bell icons-float-right" style="width:15px;height:auto;animation-delay:0.4s;"></i>
              <i class="fas fa-bold icons-float-right" style="width:20px;height:auto;animation-delay:0.5s;"></i>
              <i class="fas fa-bomb icons-float-right" style="width:15px;height:auto;animation-delay:0.7s;"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>


  <section id="showcase" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="showcase-left">
            <img src="src/img/Swift_logo_with_text.svg.png">
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="showcase-right">
            <h1>Programming is Fun!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At in quod harum! Nulla, nemo? Rem? Lorem ipsum dolor
              sit, amet consectetur adipisicing elit. Pariatur omnis mollitia laboriosam facilis eius ut, reprehenderit dolore
              dolor beatae voluptate!</p>
          </div>
          <br>
          <div class="scaled-btn d-inline-block">
            <a class="btn btn-outline btn-lg showcase-btn">Read More</a>
          </div>

        </div>

      </div>
    </div>
  </section>

  <section id="testimonial" class="bg-dark">
    <div class="container text-light">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, assumenda! Eligendi asperiores unde, at optio minima
        voluptatem quaerat, animi soluta nam eveniet quis cum dolorum velit aspernatur officiis esse odio.Eligendi asperiores
        unde, at optio minima voluptatem quaerat, animi soluta nam eveniet quis cum dolorum velit aspernatur officiis esse
        odio.</p>
    </div>
  </section>

  <section id="slide" class="my-5">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item slideItem active">
          <img class="first-slide slideImg img-fluid img-responsive" src="/src/img/coding.jpeg" alt="First slide">
          <div class="overlay"></div>
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Explore my coding projects</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.
                Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p>
                <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item slideItem">
          <img class="second-slide slideImg img-fluid" src="/src/img/design.jpeg" alt="Second slide">
          <div class="overlay"></div>
          <div class="container">
            <div class="carousel-caption">
              <h1>How about a little bit UI design</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.
                Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p>
                <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item slideItem">
          <img class="third-slide slideImg img-fluid" src="/src/img/drawing.jpeg" alt="Third slide">
          <div class="overlay"></div>
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>See my CG works</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.
                Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p>
                <a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <section id="info1">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="info-left">
            <img class="slice_1 img-fluid" src="src/img/pexels-photo-160107.jpeg">
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="info-right">
            <h2>Not just about Coding!</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae numquam nobis quam ea fuga suscipit, soluta consectetur
              itaque doloribus? Rem, corporis deserunt? Consequatur, incidunt? Nesciunt error id rem, aperiam accusantium
              amet est harum temporibus voluptatem?</p>
          </div>
          <br>
          <a class="btn btn-default btn-lg showcase-btn">Read more</a>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="bg-dark">
    <div class="container text-light py-4">
      <div class="row">
        <div class="col-md-6">
          <h1 class="display-3">Contact me:</h1>
          <i class="fas fa-envelope" style="width:auto;height:100px"></i>
        </div>
        <div class="col-md-6">
          <form method="POST" action="./test.php">
            <div class="form-group">
              <input class="form-control form-control-lg m-3" type="text" name="name" value="" placeholder="Enter name">
              <input class="form-control form-control-lg m-3" type="text" name="email" value="" placeholder="Enter Email">
              <textarea class="form-control form-control-lg m-3" name="message" placeholder="Message" rows="2"></textarea>
              <!--<button type="submit" class="btn btn-outline-light btn-lg m-3">Submit</button>-->
              <input type="submit" value="Submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-dark text-light py-4">
    <p class="text-center mb-0 pb-0">Design & Copyright: &copy; Gerry Gao 2018</p>
  </footer>

  .0

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

  <script>
    window.sr = ScrollReveal();

    sr.reveal('.showcase-left', {
      duration: 2000,
      origin: 'left',
      distance: '300px',
      viewFactor: 0.5
    });

    sr.reveal('.showcase-right', {
      duration: 2000,
      origin: 'right',
      distance: '300px',
      viewFactor: 0.5
    });



    sr.reveal('.showcase-btn', {
      duration: 2000,
      delay: 1000,
      origin: 'bottom'

    });

    sr.reveal('#testimonial div', {
      duration: 2000,
      origin: 'bottom'
    });


    sr.reveal('.slice_1', {
      duration: 2500,
      origin: 'left',
      distance: '300px',
      viewFactor: 0.2
    });


    sr.reveal('.info-right', {
      duration: 2000,
      origin: 'right',
      distance: '300px',
      viewFactor: 0.2
    });
  </script>

</body>

</html>