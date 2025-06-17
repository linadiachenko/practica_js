<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DELIBAKE - Blog</title>
  
  <!-- Favicon -->
  <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  
  
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/estilos_about.css">
  <link rel="stylesheet" href="css/estilos_blog.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  
  
  <script src="js/index.js" defer></script>
  <script src="js/index_blog.js" defer></script>
</head>
<body>
  <header id="header">
    <?php   
      include 'include/header.php';
    ?>  
  
</header>
  
 
  <main>

    <section class="about-hero-title">
      <h1>Blog Posts</h1>
      <div class="breadcrumb">
        <a href="index.php">HOME</a> <i class="fas fa-angle-right"></i> <span>BLOG</span>
      </div>
    </section>
  
    <section class="latest-news-section">
      <div class="container">
          <p class="section-tag-small">OUR BLOG</p>
          <h2>Latest News</h2>
          <div class="blog-grid">
              <div class="blog-post-card">
                  <img src="img/img_2.webp" alt="Variety of delicious cookies" loading="lazy">
                  <div class="card-content">
                      <span class="post-date">May 26, 2022</span>
                      <h3>Sugar reduction is key for a healthy future</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dictum...</p>
                      <a href="#" class="read-more">READ MORE</a>
                  </div>
              </div>
              <div class="blog-post-card">
                  <img src="img/img_7.webp" alt="Woman arranging cinnamon rolls" loading="lazy">
                  <div class="card-content">
                      <span class="post-date">May 26, 2022</span>
                      <h3>Trends food and beverage industry today</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dictum...</p>
                      <a href="#" class="read-more">READ MORE</a>
                  </div>
              </div>
              <div class="blog-post-card">
                  <img src="img/img_9.webp" alt="Braided sweet bread on cutting board" loading="lazy">
                  <div class="card-content">
                      <span class="post-date">May 26, 2022</span>
                      <h3>Going banana (bread) over bread baking</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dictum...</p>
                      <a href="#" class="read-more">READ MORE</a>
                  </div>
              </div>
              <div class="blog-post-card">
                  <img src="img/img_4.webp" alt="Baker holding a freshly baked loaf of bread" loading="lazy">
                  <div class="card-content">
                      <span class="post-date">May 26, 2022</span>
                      <h3>Selling like hot cake: bakery 2022 trend</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dictum...</p>
                      <a href="#" class="read-more">READ MORE</a>
                  </div>
              </div>
          </div>
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

  <footer id="footer">
     <?php   
        include 'include/footer.php';
      ?> 
  
  </footer>

</body>
</html>