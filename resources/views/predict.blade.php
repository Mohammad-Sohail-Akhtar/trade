<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="style/predict.css">
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
   <h3 class="stock">Here are the stocks.</h3>
<div class="drop-down">
  <select class="form-select" aria-label="Default select example">
    <option selected>Choose Your Stock to be Predicted.</option>
    <option value="1">AAPL</option>
    <option value="2">MSFT</option>
    <option value="3">AMZN</option>
    <option value="1">GOOGL</option>
    <option value="2">TSLA</option>
    <option value="3">META</option>
    <option value="1">NVDA</option>
    <option value="2">BRK-A</option>
    <option value="3">TSM</option>
    <option value="3">TCEHY</option>
  </select>
</div>



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
    <p class="copyright">Copyright © 2020 www.tradegod.com</p>
  </footer>
</body>
</html>