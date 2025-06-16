<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DELIBAKE - Menu</title>

  <!-- Favicon -->
  <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">


  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/estilos_menu.css">
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
    <section class="about-hero-title">
      <h1>OUR MENU</h1>
      <div class="breadcrumb">
        <a href="index.html">HOME</a> <i class="fas fa-angle-right"></i> <span>MENU</span>
      </div>
    </section>

    <section class="meal-types-section">
      <div class="container">
        <div class="meal-card">
          <div class="meal-image-wrapper">
            <img src="img/menu_1.webp" alt="Breakfast">
          </div>
          <h3>Breakfast</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
          <button class="order-now-button">ORDER NOW</button>
        </div>
        <div class="meal-card">
          <div class="meal-image-wrapper">
            <img src="img/menu_2.webp" alt="Lunch">
          </div>
          <h3>Lunch</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
          <button class="order-now-button">ORDER NOW</button>
        </div>
        <div class="meal-card">
          <div class="meal-image-wrapper">
            <img src="img/menu_3.webp" alt="Dinner">
          </div>
          <h3>Dinner</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
          <button class="order-now-button">ORDER NOW</button>
        </div>
      </div>
    </section>
    <section class="menu-section" id="menu">
      <h4 class="section-tag-small">OUR MENU</h4>
      <h2 class="section-title">Feel the Butter, All Time</h2>

      <div class="menu-content-wrapper">
        <div class="bread-gallery">
          <img src="img/img_3.webp" alt="Assortment of freshly baked breads and pastries">
        </div>
      
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
      </div>
    
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
          include 'include/footer.php';
      ?> 
  </footer>

</body>
</html>