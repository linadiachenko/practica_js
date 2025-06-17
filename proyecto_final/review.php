<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DELIBAKE - Reviews</title>
  
  <!-- Favicon -->
  <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  
  
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/estilos_review.css">
  <link rel="stylesheet" href="css/estilos_about.css">
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
      <h1>Client Reviews</h1>
      <div class="breadcrumb">
        <a href="index.php">HOME</a> <i class="fas fa-angle-right"></i> <span>REVIEWS</span>
      </div>
    </section>

    <section class="testimonial-section">
      <div class="testimonial-stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <div class="testimonial-text">
        <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Fusce dictum libero nunc, interdum odio vestibulum
          at. Pellentesque vehicula eros.</p>
      </div>
      <div class="testimonial-author">
        FRANK RUPERT
      </div>
      <div class="testimonial-pagination">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </section>

    <section class="testimonials-section">
      <div class="container">
        <p class="section-tag-small">TESTIMONIALS</p>
        <h2>More Review From Clients</h2>
        <div class="testimonials-grid">
          <div class="testimonial-card">
            <div class="quote-icon">
              <i class="fas fa-quote-left"></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis,
              pulvinar dapibus leo. Sed pulvinar, ante.</p>
            <div class="client-info">
              <img src="img/avatar.webp" alt="Janella Frost">
              <div>
                <h4>JANELLA FROST</h4>
                <span>Customer</span>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="quote-icon">
              <i class="fas fa-quote-left"></i>
            </div>
            <p>Quisque porta massa vel tellus facilisis tempor. Etiam ultricies blandit accumsan. Suspendisse sed elit
              nulla. Sed pulvinar, ante a dignissim.</p>
            <div class="client-info">
              <img src="img/avatar.webp" alt="George Tune">
              <div>
                <h4>GEORGE TUNE</h4>
                <span>Customer</span>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="quote-icon">
              <i class="fas fa-quote-left"></i>
            </div>
            <p>Suspendisse eleifend convallis commodo. Nam fermentum nec odio laoreet consequat. Fusce vehicula ante id
              facilisis gravida. turpis nisl males.</p>
            <div class="client-info">
              <img src="img/avatar.webp" alt="Rihanna Clark">
              <div>
                <h4>RIHANNA CLARK</h4>
                <span>Customer</span>
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="quote-icon">
              <i class="fas fa-quote-left"></i>
            </div>
            <p>Etiam laoreet id felis a porttitor. Morbi et consectetur magna. Pellentesque purus est, convallis vel dictum
              nec, tempus et mauris. Quisque aliq.</p>
            <div class="client-info">
              <img src="img/avatar.webp" alt="Tommy Young">
              <div>
                <h4>TOMMY YOUNG</h4>
                <span>Customer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
    
    <section class="review-form-section">
      <div class="container">
        <p class="section-tag-small">OUR CONTACT</p>
        <h2>Give Us a Review</h2>
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