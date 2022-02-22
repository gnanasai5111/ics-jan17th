<?php
if(isset($_POST['submit'])){
    $to = "career@icsglobal.biz"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $subject2 = "We will contact you shortly";
    $message = "Full Name : " .  $full_name . "\n"  . "Email : " . $email . "\n" . "Message : " . $_POST['message'];
    $message2 = "We got your message " . $full_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $full_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<script>
    function hideMessage(){
      document.getElementById("connectMsg").style.display = "none"
};
setTimeout(hideMessage,3000);
</script>











<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Innovation Communications Systems - Wireless Communication,Embedded,Digital signal processing and Modems</title>
  <meta name="description"
    content="Innovation Communications Systems Ltd. is a technology-driven orgaization with a strong focus on Communication product development and Software services. Established in year 1988, ICS started its journey under the commendable leadership of a group of technocrats.">
  <meta name="author" content="">
  <meta name="keywords" content="ICS,ICS WEBSITE,Wireless Communication,Embedded,Digital signal processing, Modems and innovative">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <!-- bootstrapcdn -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- owl carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="icon" href="images/favicon.png">
  <!-- css files -->
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/responsive.css">



  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>


<body>
  <header class="header_area">
    <div class="main_header_area animated">
      <nav id="navigation1" class="navigation">
        <div class="nav-header">
          <a class="navbar-brand" href="index.html">
            <img src="images/ics-logo.png" class="ics-logo" title="ICS logo" alt="ics logo" height="55px" width="100%" />
          </a>
          <!--  <img src="images/make-in-india.png" class="ics-logo make-india" title="ICS logo" alt="ics logo" height="40px" width="90" /> -->
          <div class="nav-toggle"></div>
        </div>
        <div class="nav-menus-wrapper">
          <ul class="nav-menu align-to-right">
            <li>
              <a href="#">About us</a>
              <ul class="nav-dropdown">
                <li><a href="index.html">Home</a></li>
                <li><a href="leadership.html">Leadership Team</a></li>
                <li><a href="qualitystandards-awards.html">Quality Standards & Awards</a></li>
                <li><a href="careers.html">Careers</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Products</a>
              <ul class="nav-dropdown">
                <li><a href="telecom.html">Telecom</a>

                </li>
                <li><a href="defence.html">Defence</a>

                </li>
                <li><a href="industrial.html">Industrial</a></li>

              </ul>
            </li>
            <li>
              <a href="#">Services</a>
              <ul class="nav-dropdown">
                <li><a href="custom-solutions.html">Custom solutions(System and Sub Systems Design)</a></li>
                <li><a href="embedded-solutions.html">Embedded Solutions(Hardware and Software)</a></li>
              </ul>
            </li>

            <li>
              <a href="#">Technologies</a>
              <ul class="nav-dropdown">
                <li><a href="signal-processing.html">Signal Processing</a>
                </li>
                <li><a href="networking.html">Networking</a></li>
                <li><a href="rf-microwave.html">RF and Microwave</a></li>
                <li><a href="image-processing.html">Image Processing & Computer Vision</a></li>
              </ul>
            </li>


          </ul>
        </div>
      </nav>
    </div>
  </header>


    <div class="top-img" style="background-image:url('images/about/4.jpg')">
      <p class="top-para">
        Contact
      </p>

    </div>
    <div class="contact container paddingTopBottom">
          <h2 class="page-sub-heading"><span>How can ICS help you?</span></h2>
          <div class="line">

          </div>
          <div>
            <p class="marginTop alignCenter para">
              Have something to say? We want to hear all about it.


            </p>
            <p class="alignCenter para">
            If you have files to upload with your inquiry, please email us with your attachments at info@icsglobal.biz.


            </p>

          </div>

          <div class="container " style="margin-top:30px;">


    <div class="row">
      <div class="col-lg-12">

        <form class="form-contact contact_form" action="" method="post" id="contactForm">
          <div class="row">

            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="full_name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Enter email address" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group mt-3">
            <button type="submit" name="submit" class="button button-contactForm">Send Message</button>
          </div>
          <?php
if(isset($_POST['submit'])){

    echo "<span style='color:#1D58A8' id='connectMsg'>Mail Sent. Thank you " . $full_name . ", we will contact you shortly.</span>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
        </form>
      </div>

    </div>
  </div>

        </div>



  <footer>
    <div class="footer">
      <div class="container">
        <div class="row ">


          <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 contact-footer-column">
            <div>


              <h2 class="footer-contact">Contact Us</h2>
              <div class="line">

              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6">
            <ul class="footer-widget-container">


              <ul class="contact-info-list">
                 <li><p class="map-text">
                  <span> <i class="fa fa-phone contact-icon-footer" aria-hidden="true"></i>
                    <span><strong>Address :</strong></span>
                    Level G, Kalajyothi Building, Survey No:185,Masjid Banda, Kondapur, R.R. District, Hyderabad-500084.
                </p></li>
                <li>
                  <p class="map-text">
                    <span> <i class="fa fa-phone contact-icon-footer" aria-hidden="true"></i>
                      <span><strong>Telephone :</strong></span>
                      +91-040-67855555. </span> <span>
                      <span><strong>Fax :</strong> </span>
                      91-040-67855565. </span>
                  </p>
                </li>
                <li>
                  <p class="map-text">
                    <i class="fa fa-envelope contact-icon-footer" aria-hidden="true"></i>
                    <span><strong>Email :</strong> info@icsglobal.biz </span>
                  </p>
                </li>
              </ul>

            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copyrights">
      <div class="container">
        <div class="copyright-text">© 2021 ICS Enterprises, Pvt Ltd. All rights reserved</div>
      </div>
    </div>
  </footer>
  <div class="style-light footer-scroll-top">
    <a href="#" class="scroll-top">
      <i class="fa fa-angle-up scroll-up-icon" aria-hidden="true"></i>

      </i>
    </a>
  </div>
  <div class="social-icons">
    <ul class="social-icons-listtype">
      <li class="social-icon-box"> <a href="https://www.linkedin.com/company/innovation-Communications-systems"><i class="fa fa-linkedin social-icon" aria-hidden="true"></i> </a></li>

      <li class="social-icon-box"> <a href="contact.html"><i class="fa fa-pencil social-icon" aria-hidden="true"></i> </a></li>
    </ul>
  </div>






  <!-- bootstrap reqires js and jqueryfiles too -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <!-- owl carousel js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- javascript files -->
  <script src="javascript/navbar.js"></script>
  <script src="javascript/sector-areas.js"></script>
  <script src="javascript/owlcarousel.js"></script>


</body>

</html>
