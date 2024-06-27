<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style/about.css">
</head>
<body>
     <!-- navbar starts -->
     <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{url('/')}}">
            <img class="logo" src="images/logo (1).png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/login')}}">Sign In</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
       <!-- navbar ends -->

<!-- pargraph page strats -->

<div class="container-1 flex">
  <div class="left-side">
    <img class="paraimg" src="images/p.jpg" alt="">
    
  </div>
  <div class="right-side">
    <h1>Why TradeGod ?</h1>
    <p>In the past few decades, we have seen significant advancements in the usage of social media platforms which have fundamentally altered customer behavior and patterns. This has all been possible due to the current wave of digitalization and can be marked as the beginning of the digital era.</p>
  </div>
</div>

<div class="secondpara">
  <h2>How TradeGod works ?</h2>
  <p>The most striking outcome of the digital revolution is the amount of data that is now collected and analyzed leading to an information explosion and the creation of more and more data-driven platforms. For a country like Nepal, Digital Marketing and Data Science can be a fantastic field to start a career where interest in business is growing and information technology is on the rise. </p>
</div>





<!-- paragraph page ends -->

<!-- contact page -->
<div class="contact flex">
    <div class="social-part">
      <h3>Contact Us</h3>
      <p class="num">Phone Number: +977-980000000</p>
      <p class="email">Email: tradegod@gmail.com</p>
      <div class="icons">
        <i class="bi bi-facebook" style="color: blue;"></i>
        <i class="bi bi-youtube" style="color: red;"></i>
        <i class="bi bi-github" style="color: green;"></i>
        <i class="bi bi-instagram" style="color: red;"></i>
      </div>
    </div>
    @if (session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    
    @endif
    <form action="{{route('setting.store')}}" method="POST">
      @csrf
    <div class="form-part">
      <div class="mb-3">
        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Your Name is Required.">
      </div>

      <div class="mb-3">
        <input type="email" name="gmail" class="form-control" id="formGroupExampleInput2" placeholder="Your Email Address">
      </div>
      <div class="mb-3">
        <textarea name="message" id="formGroupExampleInput2" class="form-control" rows="4" cols="0"
          placeholder="Type your Message....."></textarea>
      </div>
    </div>
    



  
  <button type="submit" class="sub">Submit</button>
  </form>
  </div>

  <!-- contact ends -->


       <!-- footer starts -->

<footer>
    <div class="container-1">
        <div class="flex wrap">
            <div class="footer-box">
              <img class="logo-1" src="images/logo (1).png" alt="">
                <p>Millions of people of all ages and from around
                the world are improving their lives with us</p>
            </div>
            <div class="footer-box-1">
                <h4 class="foot1">Reach Out</h4>
                <ul>
                    <li><i class="bi bi-geo-alt-fill"></i><a href="">Maitidevi Kathmandu</a></li>
                    <li><i class="bi bi-envelope"></i><a href="">tradegod@gmail.com</a></li>
                    <li><i class="bi bi-telephone"></i><a href="">9800000000</a></li>
                </ul>
            </div>
            <div class="footer-box-2">
              <h4 class="links">Useful Link</h4>
              <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="">About</a></li>

                 
              </ul>
          </div>
            
        </div>
    </div>
    <p class="copyright">Copyright © 2020 www.com</p>
  </footer>
  <!-- footer ends -->
  
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="js/index.js"></script>
</body>
</html>