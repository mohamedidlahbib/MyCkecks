<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <style>
    .order-pos {
        position: absolute;
        top: 710px;
        left: 260px;
        font-size: 20px
        }
  </style>

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            

            @auth 
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a style="margin-left: 10px" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
            @endauth
            @guest
               <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ route('register')}}"> Register</a>
              </li> 
            @endguest

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="container"  style=" ">
      <form action="" method="POST" enctype="">
              @csrf
              <div style="padding: 15px">
                <label >Pays:</label>
                <select name="pay" style="color: black; width: 200px ;">
                    <option value="skin">Morocco</option>
                    <option value="heart">Canada</option>
                    <option value="eyes">france</option>
                    
                </select>
                <div class="pay-pos"></div>
            </div>
            <div style="padding: 15px">
              <label >Banks:</label>
              <select name="bank" style="color: black; width: 200px ;">
                  <option value="skin">Al Barid</option>
                  <option value="heart">BMCI</option>
                  <option value="eyes">CIH</option>
              </select>
              <div class="bank-pos"></div>
          </div>
              <div style="padding: 15px">
                  <label >Date de Cheque:</label>
                  <input type="date" name="datecheque" >
                  
              </div>
              <div style="padding: 15px">
                  <label > A l'order:</label>
                  <input type="text" id="order" name="order" style="color: black" >
                  <div class="order-pos"></div>
              </div>
              <div style="padding: 15px">
                <label > Montant:</label>
                <input type="number" name="montant" style="color: black" >
            </div>
            <div style="padding: 15px">
              <label > Payer pour:</label>
              <input type="text" name="payerpour" style="color: black" >
          </div>
          <div style="padding: 15px">
            <label > Cheque bares:</label>
            <input type="text" name="payerpour" style="color: black" >
        </div>
              
        
        
      </form>

      <img src="assets/img/checks/cheque.png" alt="hhhhh">
  </div>

  <script>
    const input = document.getElementById('order');
        const output = document.querySelector('.order-pos');

        input.addEventListener('input', () => {
        output.textContent = input.value;
        });
  </script>



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>