<header id="header" class="fixed-top ">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
   
    .mega-menu {
      position: relative;
    }
    .mega-menu .dropdown-menu {
        width: 100vw; / Expand the width to 100% /
        left: 50vw;
        transform: translateX(-39%);   
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease; / Adding smooth transition for the collapse/expand effect /
        display: flex;
        flex-wrap: wrap;
        z-index: 9999;
        background-color: #fff; / Adjust background color /
        position: absolute;
        text-align:  center;
        visibility: visible;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1); / Optional: Add box-shadow for a subtle elevation effect /
    }
    .mega-menu .dropdown-menu .row {
        display: flex;
        justify-content: space-around;
    }
    .mega-menu:hover .dropdown-menu {
        max-height: 300px; / Adjust the maximum height according to your needs /
    }
   
    .mega-menu .dropdown-item {
        width: 30%; / Adjust the width of each dropdown item /
        padding: 1rem;
        white-space: nowrap;
        text-align: left; / Align text to the left /
        margin: 0.5rem;
        box-sizing: border-box;
        color: black;
        transition: background-color 0.3s ease; / Add a smooth transition for the hover effect /
    }
    .mega-menu .dropdown-item:hover {
        background-color: #f8f9fa; / Change background color on hover /
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Devzila</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li class="nav-item dropdown mega-menu">
            <a class="nav-link dropdown-toggle" href="index.php" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
            <div class="dropdown-menu">
              <div class="row">
                <div class="col">
                  <a class="dropdown-item" href="index.php">Home</a>
                  <a class="dropdown-item" href="about.php">About us</a>
                  <a class="dropdown-item" href="services.php">Services</a>
                  <a class="dropdown-item" href="term-services.php">Terms of service</a>
                  <a class="dropdown-item" href="privacy-policy.php">Privacy policy</a>
                </div>
                <div class="col">
                  <a class="dropdown-item" href="ror-application-development.php">ROR Application Development</a>
                  <a class="dropdown-item" href="mern-stack-development.php">MERN Stack Development</a>
                  <a class="dropdown-item" href="mobile-app-development.php">Mobile App Development</a>
                  <a class="dropdown-item" href="api-driven-development.php">API Driven Development</a>
                  <a class="dropdown-item" href="ui-ux-design-services.php">UI UX Design Services</a>
                </div>
                <div class="col">
                  <a class="dropdown-item" href="spree-commerce-development.php">Spree Commerce Development</a>
                  <a class="dropdown-item" href="saas-application-development.php">SaaS Application Development</a>
                  <a class="dropdown-item" href="mvp-development.php">MVP Development</a>
                  <a class="dropdown-item" href="app-support-development.php">App Support & Maintainence</a>
                  <a class="dropdown-item" href="rails-upgrade-service.php">Rails Upgrade Service</a>
                </div>
              </div>
            </div>
          </li>
          <li><a class="nav-link scrollto " href="index.php">Project</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">How we Work</a></li>
          <li><a class="nav-link scrollto" href="resources.php">Resources</a></li>
          <!--
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          -->
          <li><a class="nav-link scrollto " href="carrers.php">Careers</a></li>
          <li><a class="getstarted nav-link scrollto" href="contact_us.php">Let's Talk</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>