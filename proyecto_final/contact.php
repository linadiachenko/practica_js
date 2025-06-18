<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DELIBAKE - Contact</title>
  
  <!-- Favicon -->
  <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  
  
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/estilos_about.css">
  <link rel="stylesheet" href="css/estilos_review.css">
  <link rel="stylesheet" href="css/estilos_contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  
  
  <script src="js/index.js" defer></script>
  <script src="js/index_review.js" defer></script>

</head>
<body>
    <header>
         <?php   
            include 'include/header.php';
        ?> 
    </header>
  
 
  <main>
    <section class="about-hero-title">
      <h1>Our Contact</h1>
      <div class="breadcrumb">
        <a href="index.php">HOME</a> <i class="fas fa-angle-right"></i> <span>Contact</span>
      </div>
    </section>

    <section class="contact-info-section">
      <div class="container">
        <div class="info-card">
          <div class="info-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3>Address</h3>
          <p>457 Morningview Lane</p>
          <p>New York USA</p>
        </div>
        <div class="info-card">
          <div class="info-icon">
            <i class="fas fa-phone-alt"></i>
          </div>
          <h3>Phone</h3>
          <p>+1 (234) 567 890</p>
          <p>+0 (987) 654 321</p>
        </div>
        <div class="info-card">
          <div class="info-icon">
            <i class="fas fa-envelope"></i>
          </div>
          <h3>Email</h3>
          <p>delibake@mails.com</p>
          <p>example@mail.com</p>
        </div>
      </div>
      </section>

    <section class="review-form-section">
      <div class="container">
        <p class="section-tag-small">OUR CONTACT</p>
        <h2>Send a Message</h2>
        <form class="review-form" id="reviewForm">
          <div class="form-row">
            <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
            <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
          </div>
          <div class="form-row">
            <input type="email" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-row">
            <textarea id="message" name="message" rows="6" placeholder="Message" required></textarea>
          </div>
          <button type="submit" class="send-message-button">SEND MESSAGE</button>
        </form>
      </div>
    </section>

    <section class="map-section">
        <iframe class="map-container"
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19763.183704296905!2d-76.1122044745037!3d43.00940370998693!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d98b3843a8c0c1%3A0x387c0c755397a7ad!2sPastry%20Palace%20Bakery!5e0!3m2!1sru!2ses!4v1750282480087!5m2!1sru!2ses"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    

    <section class="newsletter-section" style="background-image: url('img/subscribe_img.webp');">
      <div class="newsletter-overlay">
        <h4 class="section-tag-small">NEWSLETTER</h4>
        <h2>Subscribe to Our Newsletter</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar
          dapibus.</p>
        <div class="subscribe-form">
        <input type="email" id="email" name="email" placeholder="Email" required>
        <button class="subscribe-button">SUBSCRIBE</button>
        </div>
      </div>
    </section>
 
  </main> 

  <footer>
    <?php   
        include 'include/footer.php';
    ?> 
  </footer>

</body>
</html>