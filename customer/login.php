<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>DataHub-By Affordable dData</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

 
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">DataHub</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="login.php" class="active">Login</a></li>
          <li><a href="register.php"><span>Become an Agent</span></a>
          <li><a href="testimonials.html">GHS 0.00</a></li>
         
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.php">Get Started</a>

    </div>
  </header>

  <main  style="background-color: #dfe9f5; padding: 50px;">

  <div class="container" >
    <div class="form-container mx-auto" style="max-width: 450px; padding: 1.5rem; background: #fff; border-radius: 10px; box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.6);">
      <h1 class="form-title text-center" style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1.5rem;">Sign In</h1>
      <form action="user_account.php" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label" style="display: flex; align-items: center;"><i class="fas fa-envelope me-2"></i>Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required style="box-shadow: none;">
        </div>

        <div class="mb-3 position-relative">
          <label for="password" class="form-label" style="display: flex; align-items: center;"><i class="fas fa-lock me-2"></i>Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required style="box-shadow: none;">
          <i class="fa fa-eye position-absolute top-50 end-0 translate-middle-y me-3" id="eye" style="cursor: pointer;"></i>
        </div>

        <div class="text-end mb-3">
          <a href="#" class="text-primary" style="text-decoration: none;">Recover Password</a>
        </div>

        <button type="submit" class="btn btn-primary w-100 mb-3" name="signin" style="background-color: rgb(125, 125, 235); border: none;">Sign In</button>
        <p class="text-center" style="margin-bottom: 1rem;">or</p>
        <div class="social-icons text-center">
          <i class="fab fa-google" style="font-size: 1.5rem; padding: 0.8rem; border-radius: 50%; margin: 0 10px; border: 2px solid #dfe9f5; transition: 0.5s; cursor: pointer;"></i>
          <i class="fab fa-facebook" style="font-size: 1.5rem; padding: 0.8rem; border-radius: 50%; margin: 0 10px; border: 2px solid #dfe9f5; transition: 0.5s; cursor: pointer;"></i>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">DataHub</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Join Our WhatsApp Group</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+233 5589 55488</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
            <p>Terms and Comdition</p>
          </div>
          
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Working Hours</h4>
          <ul>
            <li><a href="#">Monday - Saturday</a></li>
            <li><a href="#">8:00am - 9:00pm</a></li>
            <li><a href="#">Sunday</a></li>
            <li><a href="#">12:00pm -9:00pm</a></li>
            
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">MTN Data Bundle</a></li>
            <li><a href="#">Telecel Data Bundle</a></li>
            <li><a href="#">At Data Bundle</a></li>
            
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Follow Us</h4>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">DataHub</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
       
        Designed by <a href="#">InfineCoding</a> Distributed by <a href="#">InfineCoding
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->

  <script src="assets/js/main.js"></script>
  <script>
    const eyeIcon = document.getElementById('eye');
    const passwordInput = document.getElementById('password');

    eyeIcon.addEventListener('click', () => {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
      } else {
        passwordInput.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
      }
    });
  </script>
</body>

</html>