
<?php 
include "../Back-end/connect.php";
include "../Back-end/listD.php";
include "../Back-end/acceuil.php";
// function listD(){
//     global $db;
//     return $db->query("select * from Doctor");
// }
    // Call the connection function
    $D= listD();
    $doctorData=userDocterData();
    $id = $doctorData["idD"];
    $Doctorname = $doctorData["nomD"];
    $email = $doctorData["mailD"]
   
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Find easily a doctor and book online an appointment"
    />
    <meta name="author" content="Ansonika" />
    <title>
      FINDOCTOR - Find easily a doctor and book online an appointment
    </title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link
      rel="apple-touch-icon"
      type="image/x-icon"
      href="img/apple-touch-icon-57x57-precomposed.png"
    />
    <link
      rel="apple-touch-icon"
      type="image/x-icon"
      sizes="72x72"
      href="img/apple-touch-icon-72x72-precomposed.png"
    />
    <link
      rel="apple-touch-icon"
      type="image/x-icon"
      sizes="114x114"
      href="img/apple-touch-icon-114x114-precomposed.png"
    />
    <link
      rel="apple-touch-icon"
      type="image/x-icon"
      sizes="144x144"
      href="img/apple-touch-icon-144x144-precomposed.png"
    />

    <!-- GOOGLE WEB FONT -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/menu.css" rel="stylesheet" />
    <link href="css/vendors.css" rel="stylesheet" />
    <link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet" />

    <!-- SPECIFIC CSS -->
    <link href="css/vegas.min.css" rel="stylesheet" />

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet" />
  </head>

  <body>
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <div id="preloader">
      <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->

    <header class="static">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div id="logo">
              <a href="in" title="Findoctor"
                ><img src="img/logo.png" alt="" width="163" height="36"
              /></a>
            </div>
          </div>
          <nav class="col-lg-9 col-6">
            <a
              class="cmn-toggle-switch cmn-toggle-switch__htx open_close"
              href="#0"
              ><span>Menu mobile</span></a
            >
            <ul id="top_access">
              <li id="user">
                <a href="#0">
                  <figure>
                    <img src="http://via.placeholder.com/150x150.jpg" alt="" />
                  </figure>
                  <?php  echo $Doctorname ?>
                </a>
              </li>
            </ul>
            <div class="main-menu">
              <ul>
                <li class="submenu">
                  <a href="index-8.html" class="show-submenu">Home</a>
                </li>
                <li class="submenu">
                  <a href="#0" class="show-submenu"
                    >Lists<i class="icon-down-open-mini"></i
                  ></a>
                  <ul>
                    <li class="third-level">
                      <a href="#0">Patients</a>
                      <ul>
                        <li><a href="list.html">List page</a></li>
                      </ul>
                    </li>
                    <li class="third-level">
                      <a href="#0">Dorctors</a>
                      <ul>
                        <li><a href="detail-page.html">Detail page 1</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li><a href="#0">LogOut</a></li>
              </ul>
            </div>
            <!-- /main-menu -->
          </nav>
        </div>
      </div>
      <!-- container -->
    </header>
    <!-- /header -->

    <main>
      <div class="hero_home hero_kenburns">
        <div class="content">
          <h3>Find a Doctor!</h3>
          <p>
            Ridiculus sociosqu cursus neque cursus curae ante scelerisque
            vehicula.
          </p>
          <form method="post" action="list.html">
            <div id="custom-search-input">
              <div class="input-group">
                <input
                  type="text"
                  class="search-query"
                  placeholder="Ex. Name, Specialization ...."
                />
                <input type="submit" class="btn_search" value="Search" />
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- /Hero -->
      
              
      <div class="container margin_120_95">
        <div class="main_title">
          <h2>Most Viewed doctors</h2>
          <p>
            Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat
            cu pri.
          </p>
        </div>
        
        <div class="row">
        <?php while ($res=$D->fetch()){
          ?>
          <div class="col-lg-4 col-md-6">
            <div class="box_list home">
              <a
                href="#0"
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Add to wishlist"
                class="wish_bt"
              ></a>
              <figure>
                <a href="detail-page.html"
                  ><img
                    src=""
                    class="img-fluid"
                    alt=""
                /></a>
                <div class="preview"><span>Read more</span></div>
              </figure>
              <div class="wrapper">
                <small><?php echo $res['Spc']?></small>
                <h3>Dr. <?php echo $res['prD']?></h3>
                <p>
                <?php echo $res['descr']?>
                </p>
                <span class="rating"
                  ><i class="icon_star voted"></i><i class="icon_star voted"></i
                  ><i class="icon_star voted"></i><i class="icon_star"></i
                  ><i class="icon_star"></i> <small>(145)</small></span
                >
                <a
                  href="#0"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Badge Level"
                  class="badge_list_1"
                  ><img
                    src="img/badges/badge_1.svg"
                    width="15"
                    height="15"
                    alt=""
                /></a>
              </div>
              <ul>
                <li><i class="icon-eye-7"></i> 854 Views</li>
                <li><a href="detail-page.html">Book now</a></li>
              </ul>
            </div>
          </div>
          <?php } ?>
         
        <p class="text-center add_top_30">
          <a href="list.html" class="btn_1 medium">View all Doctors</a>
        </p>
      </div>
      <!-- End container -->

      <!-- /white_bg -->

      <div class="container margin_120_95">
        <div class="main_title">
          <h2>Find by specialization</h2>
          <p>
            Nec graeci sadipscing disputationi ne, mea ea nonumes percipitur.
            Nonumy ponderum oporteat cu mel, pro movet cetero at.
          </p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <a href="list.html" class="box_cat_home">
              <i class="icon-info-4"></i>
              <img src="img/icon_cat_1.svg" width="60" height="60" alt="" />
              <h3>Primary Care</h3>
              <ul class="clearfix">
                <li><strong>124</strong>Doctors</li>
                <li><strong>60</strong>Clinics</li>
              </ul>
            </a>
          </div>
          <div class="col-lg-3 col-md-6">
            <a href="list.html" class="box_cat_home">
              <i class="icon-info-4"></i>
              <img src="img/icon_cat_2.svg" width="60" height="60" alt="" />
              <h3>Cardiology</h3>
              <ul class="clearfix">
                <li><strong>124</strong>Doctors</li>
                <li><strong>60</strong>Clinics</li>
              </ul>
            </a>
          </div>
          <div class="col-lg-3 col-md-6">
            <a href="list.html" class="box_cat_home">
              <i class="icon-info-4"></i>
              <img src="img/icon_cat_3.svg" width="60" height="60" alt="" />
              <h3>MRI Resonance</h3>
              <ul class="clearfix">
                <li><strong>124</strong>Doctors</li>
                <li><strong>60</strong>Clinics</li>
              </ul>
            </a>
          </div>
          <div class="col-lg-3 col-md-6">
            <a href="list.html" class="box_cat_home">
              <i class="icon-info-4"></i>
              <img src="img/icon_cat_4.svg" width="60" height="60" alt="" />
              <h3>Blood test</h3>
              <ul class="clearfix">
                <li><strong>124</strong>Doctors</li>
                <li><strong>60</strong>Clinics</li>
              </ul>
            </a>
          </div>
          <div class="col-lg-3 col-md-6">
            <a href="list.html" class="box_cat_home">
              <i class="icon-info-4"></i>
              <img src="img/icon_cat_7.svg" width="60" height="60" alt="" />
              <h3>Laboratory</h3>
              <ul class="clearfix">
                <li><strong>124</strong>Doctors</li>
                <li><strong>60</strong>Clinics</li>
              </ul>
            </a>
          </div>
          <div class="col-lg-3 col-md-6">
            <a href="list.html" class="box_cat_home">
              <i class="icon-info-4"></i>
              <img src="img/icon_cat_5.svg" width="60" height="60" alt="" />
              <h3>Dentistry</h3>
              <ul class="clearfix">
                <li><strong>124</strong>Doctors</li>
                <li><strong>60</strong>Clinics</li>
              </ul>
            </a>
          </div>
          <div class="col-lg-3 col-md-6">
            <a href="list.html" class="box_cat_home">
              <i class="icon-info-4"></i>
              <img src="img/icon_cat_6.svg" width="60" height="60" alt="" />
              <h3>X - Ray</h3>
              <ul class="clearfix">
                <li><strong>124</strong>Doctors</li>
                <li><strong>60</strong>Clinics</li>
              </ul>
            </a>
          </div>
          <div class="col-lg-3 col-md-6">
            <a href="list.html" class="box_cat_home">
              <i class="icon-info-4"></i>
              <img src="img/icon_cat_8.svg" width="60" height="60" alt="" />
              <h3>Piscologist</h3>
              <ul class="clearfix">
                <li><strong>124</strong>Doctors</li>
                <li><strong>60</strong>Clinics</li>
              </ul>
            </a>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->

      <div id="app_section">
        <div class="container">
          <div class="row justify-content-around">
            <div class="col-md-5">
              <p>
                <img
                  src="img/app_img.svg"
                  alt=""
                  class="img-fluid"
                  width="500"
                  height="433"
                />
              </p>
            </div>
            <div class="col-md-6">
              <small>Application</small>
              <h3>Download <strong>Findoctor App</strong> Now!</h3>
              <p class="lead">
                Tota omittantur necessitatibus mei ei. Quo paulo perfecto eu,
                errem percipit ponderum no eos. Has eu mazim sensibus. Ad
                nonumes dissentiunt qui, ei menandri electram eos. Nam iisque
                consequuntur cu.
              </p>
              <div class="app_buttons wow" data-wow-offset="100">
                <svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 43.1 85.9"
                  style="enable-background: new 0 0 43.1 85.9"
                  xml:space="preserve"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="st0 draw-arrow"
                    d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1"
                  />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="draw-arrow tail-1"
                    d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58"
                  />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="draw-arrow tail-2"
                    d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9"
                  />
                </svg>
                <a href="#0" class="fadeIn"
                  ><img
                    src="img/apple_app.png"
                    alt=""
                    width="150"
                    height="50"
                    data-retina="true"
                /></a>
                <a href="#0" class="fadeIn"
                  ><img
                    src="img/google_play_app.png"
                    alt=""
                    width="150"
                    height="50"
                    data-retina="true"
                /></a>
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /app_section -->
    </main>
    <!-- /main content -->
    <footer>
      <div class="container margin_60_35">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <p>
              <a href="index.html" title="Findoctor">
                <img
                  src="img/logo.png"
                  alt=""
                  width="163"
                  height="36"
                  class="img-fluid"
                />
              </a>
            </p>
          </div>
          <div class="col-lg-3 col-md-4">
            <h5>About</h5>
            <ul class="links">
              <li><a href="#0">About us</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="#0">FAQ</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="register.html">Register</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-4">
            <h5>Useful links</h5>
            <ul class="links">
              <li><a href="#0">Doctors</a></li>
              <li><a href="#0">Clinics</a></li>
              <li><a href="#0">Specialization</a></li>
              <li><a href="#0">Join as a Doctor</a></li>
              <li><a href="#0">Download App</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-4">
            <h5>Contact with Us</h5>
            <ul class="contacts">
              <li>
                <a href="tel://61280932400"
                  ><i class="icon_mobile"></i> + 61 23 8093 3400</a
                >
              </li>
              <li>
                <a href="mailto:info@findoctor.com"
                  ><i class="icon_mail_alt"></i> help@findoctor.com</a
                >
              </li>
            </ul>
            <div class="follow_us">
              <h5>Follow us</h5>
              <ul>
                <li>
                  <a href="#0"><i class="social_facebook"></i></a>
                </li>
                <li>
                  <a href="#0"><i class="social_twitter"></i></a>
                </li>
                <li>
                  <a href="#0"><i class="social_linkedin"></i></a>
                </li>
                <li>
                  <a href="#0"><i class="social_instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--/row-->
        <hr />
        <div class="row">
          <div class="col-md-8">
            <ul id="additional_links">
              <li><a href="#0">Terms and conditions</a></li>
              <li><a href="#0">Privacy</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <div id="copy">© 2023 Findoctor</div>
          </div>
        </div>
      </div>
    </footer>
    <!--/footer-->

    <div id="toTop"></div>
    <!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
    <script src="js/functions.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="js/vegas.min.js"></script>
    <script>
      $(function () {
        "use strict";
        $(".hero_kenburns").vegas({
          slides: [
            { src: "img/slides/1.jpg" },
            { src: "img/slides/3.jpg" },
            { src: "img/slides/2.jpg" },
          ],
          overlay: false,
          transition: "fade2",
          animation: "kenburnsUpRight",
          transitionDuration: 1000,
          delay: 5000,
          animationDuration: 30000,
        });
      });
    </script>
  </body>
</html>
