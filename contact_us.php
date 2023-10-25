<!DOCTYPE html>
<html lang="en">

<head>
  <?php $title = "Devzila Contact Us" ?>
  <?php include('common_head.inc.php') ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('common_header.inc.php') ?>
<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Contact us:-</h1>
          <h2>We provide cost effective solution to your business problem.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            
            <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
   
    <!-- ======= Team Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      <div class="row">

      <div class="section-title">
          <h2>Let's Get In Touch</h2>
          <p class="col-md-10 text-center">Thank you for your interest in Devzila services! Have any enquiry? Need to share your thought with us? Write to us or call us or drop in at the contact details given below</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"> SCO 91, Ansal Sampark, Sector - 5, Panchkula 134109</i>
              </div>

              <div class="email">
                <i class="bi bi-envelope"> info@devzila.com</i>
              </div>

              <div class="phone">
                <i class="bi bi-phone"> +91 9876727393</i>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d27446.557256955857!2d76.84732661184083!3d30.69534982827685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x390f937734cffb3b%3A0x8602c697784e1f8c!2sDevzila%20Software%20Solutions%2C%20SCO%2096%20Ground%20Floor%2C%20Sector%205%2C%20Panchkula%2C%20Haryana%20134109!3m2!1d30.700972!2d76.85493199999999!5e0!3m2!1sen!2sin!4v1674999438488!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form id="contactForm" role="form" class="php-email-form">
              <!-- Your form fields go here -->
              <div class="row">
                  <div class="form-group col-md-6">
                      <label for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label for="email">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="10" required></textarea>
                </div>
              </div>
              <!-- Add more form fields as needed -->
              <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
    <script>
              document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();
            
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var subject = document.getElementById('subject').value;
            var message = document.getElementById('message').value;
            
            var formData = {
                name: name,
                email: email,
                subject: subject,
                message: message,
                // Add more form fields as needed
            };
            
            // Make an AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'https://dummyjson.com/posts', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            
            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 400) {
                    // Success
                    var response = JSON.parse(xhr.responseText);
                    var sentMessage = document.querySelector('.sent-message');
                    sentMessage.style.display = 'block';
                    sentMessage.innerHTML = 'Your message has been sent. Thank you!';
                    document.getElementById('contactForm').reset();
                } else {
                    // Error
                    var errorMessage = document.querySelector('.error-message');
                    errorMessage.innerHTML = 'Error sending message. Please try again later.';
                }
            };
            
            xhr.onerror = function () {
                // Connection error
                var errorMessage = document.querySelector('.error-message');
                errorMessage.innerHTML = 'Error sending message. Please try again later.';
            };
            
            xhr.send(JSON.stringify(formData));
        });

    </script>
        </div>
      </div>

      </div>
    </section><!-- End About Us Section -->
    <!-- ======= Cta Section ======= -->



    <!-- ======= Services Section ======= -->
  
    <!-- ======= Cta Section ======= -->
    <!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <!--
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>SCO 91, Ansal Sampark, Sector - 5, Panchkula 134109</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@devzila.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 9876727393</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d27446.557256955857!2d76.84732661184083!3d30.69534982827685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x390f937734cffb3b%3A0x8602c697784e1f8c!2sDevzila%20Software%20Solutions%2C%20SCO%2096%20Ground%20Floor%2C%20Sector%205%2C%20Panchkula%2C%20Haryana%20134109!3m2!1d30.700972!2d76.85493199999999!5e0!3m2!1sen!2sin!4v1674999438488!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    -->
    <!-- End Contact Section -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('common_footer.inc.php')?>

</body>

</html>