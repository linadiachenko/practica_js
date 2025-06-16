<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DELIBAKE</title>

  <!-- Favicon -->
  <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">

  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <script src="js/index.js" defer></script>
</head>
<body>
  <header id="header">
    <?php   
            include 'include/header.php';
    ?> 
      
  </header>
 
   <main>
    <section class="hero">
      <div class="hero-content">
        <h4>BAKERY AND PASTRY</h4>
        <h1>Freshly Baked <br>All Day and <br>Every day</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
        <div class="hero-buttons">
          <button class="discover-more">Discover More</button>
          <button class="contact-us">Contact Us</button>
        </div>
        <div class="bottom-images">
          <div id="img"></div>
          <div id="img"></div>
          <div id="img"></div>
        </div>
      </div>
      <div class="hero-image">
        <div class="hero-image-overlay"></div>
        <div class="since-info">
         <sup>*</sup> Been baking since 1992
        </div>
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
    
    <section class="about-us-section" id="about">
      <div class="about-image">
        <div class="img-container"></div>
      </div>
      <div class="about-content">
        <h4 class="section-tag">ABOUT DELIBAKE</h4>
        <h2>So Sweet, So Good, <br>Sure to Bring Smiles</h2>
        <p>Nulla at ligula nibh. Mauris gravida lobortis viverra. Pellentesque urna quam, volutpat eget felis ac, malesuada
          blandit quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi
          lacinia odio massa, at mollis urna rhoncus ac</p>
        <p class="quote">"Integer pretium risus augue, non maximus nibh pretium non."</p>
        <button class="discover-more">DISCOVER MORE</button>
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

    <section class="menu-section" id="menu">
      <h4 class="section-tag-small">OUR MENU</h4>
      <h2 class="section-title">Feel the Butter, All Time</h2>
    
      <div class="menu-list-container">
        <div class="menu-column">
          <div class="menu-item">
            <div class="item-details">
              <h3>Sourdough</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
            <span class="item-price">$9</span>
          </div>
          <div class="menu-item">
            <div class="item-details">
              <h3>Banana Bread</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
            <span class="item-price">$11</span>
          </div>
          <div class="menu-item">
            <div class="item-details">
              <h3>Cornbread</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
            <span class="item-price">$12</span>
          </div>
          <div class="menu-item">
            <div class="item-details">
              <h3>Challah Bread</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
            <span class="item-price">$8</span>
          </div>
        </div>
    
        <div class="menu-column">
          <div class="menu-item">
            <div class="item-details">
              <h3>Brioche Bread</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
            <span class="item-price">$12</span>
          </div>
          <div class="menu-item">
            <div class="item-details">
              <h3>American Rye Bread</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
            <span class="item-price">$14</span>
          </div>
          <div class="menu-item">
            <div class="item-details">
              <h3>Pumpernickel Bread</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
            <span class="item-price">$21</span>
          </div>
          <div class="menu-item">
            <div class="item-details">
              <h3>Multigrain Bread</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
            <span class="item-price">$15</span>
          </div>
        </div>
      </div>
    
      <div class="menu-gallery">
      <article><div class="margin-top"></div>
      <div class="img-gallery"></div></article>
      <article><div class="img-gallery"></div>
      <div class="margin-bottom"></div></article>
      <article><div class="margin-top"></div>
      <div class="img-gallery"></div></article>
      <article><div class="img-gallery"></div>
      <div class="margin-bottom"></div></article>
      </div>
    </section>

    <section class="bread-selection-section">
      <div class="bread-selection-content">
        <h4 class="section-tag-small">BREAD SELECTION</h4>
        <h2 class="section-title-large">For Everlasting <br>Moments and Taste</h2>
        <p>Nulla at ligula nibh. Mauris gravida lobortis viverra. Pellentesque urna quam, malesuada blandit quam. Class
          aptent taciti sociosqu ad litora torquent per.</p>
        <button class="read-more-button">READ MORE</button>
      </div>
    
      <div class="offerings-grid">
        <div class="offering-item">
          <div class="offering-icon"><i class="fas fa-birthday-cake"></i></div>
          <h3>Birthday</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing,</p>
          <button class="order-now-button">ORDER NOW</button>
        </div>
        <div class="offering-item">
          <div class="offering-icon"><i class="fas fa-gift"></i></div>
          <h3>Presents</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing,</p>
          <button class="order-now-button">ORDER NOW</button>
        </div>
        <div class="offering-item">
          <div class="offering-icon"><i class="fas fa-heart"></i></div>
          <h3>Weddings</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing,</p>
          <button class="order-now-button">ORDER NOW</button>
        </div>
        <div class="offering-item">
          <div class="offering-icon"><i class="fas fa-champagne-glasses"></i></div>
          <h3>Parties</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing,</p>
          <button class="order-now-button">ORDER NOW</button>
        </div>
      </div>
    </section>
    
    <section class="how-we-work-section">
      <h4 class="section-tag-small">HOW WE WORK</h4>
      <h2 class="section-title">Making Sweet Things Happen</h2>
    
      <div class="work-process-grid">
        <article>
          <div class="margin-top"></div>
          <div class="process-item">
            <div class="representative-img"></div>
            <h3>Fresh Ingredients</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
            </div>
        </article>

        <article>
          <div class="process-item">
            <div class="representative-img"></div>
            <h3>Old Recipes</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
          </div>
          <div class="margin-bottom"></div>
        </article>

        <article>
          <div class="margin-top"></div>
          <div class="process-item">
            <div class="representative-img"></div>
            <h3>Quality Check</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
          </div>
        </article>
        <article>
          <div class="process-item">
            <div class="representative-img"></div>
            <h3>Delivery</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
          </div>
          <div class="margin-bottom"></div>
        </article>
    </section>

    <section class="video-hero">
      <video id="heroVideo" autoplay loop muted playsinline poster="img/img_1.jpg">
        <img src="img/img_1.jpg" alt="Golden brown loaf of bread on a rustic wooden table, surrounded by wheat stalks and a linen cloth, evoking a warm and inviting bakery atmosphere. The mood is cozy and welcoming. Text on the image: DELIBAKE." class="video-poster" id="videoPoster">
        <source src="img/video_1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="video-overlay">
        <h4 class="section-tag-small">BREAD SELECTION</h4>
        <h1>It's Always Fresh or You <br>Won't Find It Here</h1>
        <div class="play-button-container">
          <i class="fas fa-play" id="playPauseButton"></i>
        </div>
      </div>
    </section>

    <section class="promo-sections-container">
      <div class="promo-item large-promo">
        <div class="promo-image-bg" style="background-image: url('img/img_blog_1.webp');"></div>
        <div class="promo-content">
          <h2>Come discover our new menus <br>and get special a discount!</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, luctus nec ullamcorper mattis, pulvinar dapibus leo.
            Vivamus consectetur ligula lacinia.</p>
          <button class="read-more-button">READ MORE</button>
        </div>
      </div>
    
      <div class="promo-item small-promo">
        <div class="promo-content">
          <h2>Our 10 special types of bread that you must try this month</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, luctus nec ullamcorper mattis, pulvinar dapibus leo.
            Vivamus consectetur ligula lacinia.</p>
          <button class="read-more-button">READ MORE</button>
        </div>
        <div class="promo-image-bg" style="background-image: url('img/img_blog_2.webp');"></div>
      </div>
    </section> 
    
    <section class="stats-section">
      <div class="stat-item">
        <h3>25+</h3>
        <p>YEARS EXPERIENCE</p>
      </div>
      <div class="stat-item">
        <h3>34+</h3>
        <p>NEW BRANCHES</p>
      </div>
      <div class="stat-item">
        <h3>610+</h3>
        <p>POSITIVE REVIEWS</p>
      </div>
      <div class="stat-item">
        <h3>72+</h3>
        <p>AVAILABLE MENU</p>
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

   <footer id="footer">
    <?php   
        include 'include/footer.html';
    ?> 
      
    </footer>
   
  

 

</body>
</html>