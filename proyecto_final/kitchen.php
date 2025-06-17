<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DELIBAKE - Kitchen</title>

  <!-- Favicon -->
  <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">


  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/estilos_kitchen.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


  <script src="js/index.js" defer></script>
  <script src="js/index_kitchen.js" defer></script>

</head>

<body>
  <header>
    <?php
    include 'include/header.php';
    ?> 
    
  </header>


  <main>
    <section class="about-hero-title">
      <h1>Our Kitchen</h1>
      <div class="breadcrumb">
        <a href="index.php">HOME</a> <i class="fas fa-angle-right"></i> <span>Kitchen</span>
      </div>
    </section>

    <section class="kitchen-section">
      <div class="kitchen-text">
        <p class="section-tag">OUR KITCHEN</p>
        <h2 class="kitchen-title">Best Bakery at This Location</h2>
        <p class="kitchen-desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget pretium tortor, ac volutpat sapien. Sed nec
          ipsum nec libero porta feugiat. Curabitur facilisis ex eu urna elementum, et vulputate.
        </p>
        <ul class="kitchen-list">
          <li><i class="fas fa-check"></i> Vivamus consectetur ligula lacinia</li>
          <li><i class="fas fa-check"></i> Quisque porta massa vel tellus</li>
          <li><i class="fas fa-check"></i> Etiam ultricies blandit accumsan</li>
          <li><i class="fas fa-check"></i> Sed pulvinar, ante a dignissim</li>
        </ul>
      </div>
    
      <div class="kitchen-video-container">
        <video id="kitchenVideo" poster="img/about_4.webp" preload="metadata">
          <source src="img/video_1.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="play-button" id="playBtn"><i class="fas fa-play"></i></div>
      </div>
    </section>

    <section class="bakery-gallery-section">
      <div class="container">
        <p class="section-tag-small">OUR KITCHEN</p>
        <h2>We Treat Cake Obsession</h2>
    
        <div class="gallery-grid">
          <div class="gallery-item">
            <img src="img/img_4.webp" alt="Baker holding fresh bread" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="img/img_5.webp" alt="Woman arranging cinnamon rolls" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="img/img_6.webp" alt="Male bakers working in bakery" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="img/img_7.webp" alt="Man behind bakery counter with pastries" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="img/img_8.webp" alt="Braided sweet bread" loading="lazy">
          </div>
          <div class="gallery-item">
            <img src="img/img_9.webp" alt="Freshly baked baguettes" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <section class="features-section">
      <div class="feature-item">
        <i class="fas fa-seedling"></i>
        <h3>Fresh Ingredients</h3>
        <p>Lorem ipsum dolor sit amet, consect adipiscing.</p>
      </div>
      <div class="feature-item">
        <i class="fas fa-user-tie"></i>
        <h3>Expert Bakers</h3>
        <p>Lorem ipsum dolor sit amet, consect adipiscing.</p>
      </div>
      <div class="feature-item">
        <i class="fas fa-calendar-alt"></i>
        <h3>Years <br>Experience</h3>
        <p>Lorem ipsum dolor sit amet, consect adipiscing.</p>
      </div>
      <div class="feature-item">
        <i class="fas fa-cookie"></i>
        <h3>Delicious Food</h3>
        <p>Lorem ipsum dolor sit amet, consect adipiscing.</p>
      </div>
    </section>

    <section class="newsletter-section" style="background-image: url('img/subscribe_img.webp');">
      <div class="newsletter-overlay">
        <h4 class="section-tag-small">NEWSLETTER</h4>
        <h2>Subscribe to Our Newsletter</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar
          dapibus.</p>
        <div class="subscribe-form">
          <input type="email" placeholder="Email">
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