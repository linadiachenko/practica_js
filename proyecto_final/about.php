<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DELIBAKE - About Us</title>

  <!-- Favicon -->
  <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  

  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/estilos_about.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


  <script src="js/index.js" defer></script>
  <script src="js/index_about.js" defer></script>
</head>
<body>
  <header id="header">
    <?php   
      include 'include/header.php';
    ?> 

</header>

  
 
<main>
  <section class="about-hero-title">
    <h1>About Us</h1>
    <div class="breadcrumb">
      <a href="index.php">HOME</a> <i class="fas fa-angle-right"></i> <span>ABOUT</span>
    </div>
  </section>
  
  <section class="our-story-section">
    <div class="container">
      <div class="our-story-content">
        <h4 class="section-tag-small">OUR STORY</h4>
        <h2>We Create Delicious <br>Memories</h2>
      </div>
      <div class="our-story-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis,
          pulvinar dapibus leo. Nam fermentum nec odio laoreet consequat.</p>
        <button class="discover-more-button">DISCOVER MORE</button>
      </div>
    </div>
    <div class="our-story-images">
      <img src="img/about_1.webp" alt="Preparing Dough">
      <img src="img/about_2.webp" alt="Basket of Croissants">
      <img src="img/about_3.webp" alt="Pie on Stand">
    </div>
  </section>
  
  <section class="about-delibake-section">
    <div class="container">
      <div class="about-delibake-image">
        <img src="img/about_4.webp" alt="Baker mixing dough">
      </div>
      <div class="about-delibake-content">
        <h4 class="section-tag-small">ABOUT DELIBAKE</h4>
        <h2>So Sweet, So Good, <br>Sure to Bring Smiles</h2>
        <p>Nulla at ligula nibh. Mauris gravida lobortis viverra. Pellentesque urna quam, volutpat eget felis ac,
          malesuada blandit quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
          himenaeos. Morbi lacinia odio massa, at mollis urna rhoncus ac.</p>
        <p id="quote">"Integer pretium risus augue, non maximus nibh pretium non."</p>
        <button class="discover-more-button">DISCOVER MORE</button>
      </div>
    </div>
  </section>
  
  <section class="why-choose-us-section">
    <div class="container">
      <h4 class="section-tag-small">WHY CHOOSE US</h4>
      <h2>Great Taste in Every Bite</h2>
      <div class="reason-grid">
        <div class="reason-item">
          <i class="fas fa-shopping-basket"></i>
          <h3>Fresh Ingredients</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
        </div>
        <div class="reason-item">
          <i class="fas fa-store"></i>
          <h3>Years Experience</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
        </div>
        <div class="reason-item">
          <i class="fas fa-star"></i>
          <h3>Delicious Food</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="faqs-section">
    <div class="container">
      <div class="faqs-content">
        <p class="section-tag">FAQS</p>
        <h1>Frequently Asked Questions</h1>
        <p class="section-description">Pellentesque urna quam, volutpat eget felis ac, malesuada blandit quam. Class
          aptent taciti sociosqu ad litora torquent.</p>
  
        <div class="faq-item active">
          <div class="faq-question">
            <h3>What is the most ordered bread at Delibake?</h3>
            <span class="arrow"></span>
          </div>
          <div class="faq-answer">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget pretium tortor, ac volutpat sapien. Sed
              nec ipsum nec libero porta feugiat. Curabitur facilisis.</p>
          </div>
        </div>
  
        <div class="faq-item">
          <div class="faq-question">
            <h3>Can I order a birthday cake at your bakery?</h3>
            <span class="arrow"></span>
          </div>
          <div class="faq-answer">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam.</p>
          </div>
        </div>
  
        <div class="faq-item">
          <div class="faq-question">
            <h3>How much does it cost to make a fancy wedding cake?</h3>
            <span class="arrow"></span>
          </div>
          <div class="faq-answer">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sunt in culpa qui officia deserunt mollit anim id
              est laborum.</p>
          </div>
        </div>
  
        <div class="faq-item">
          <div class="faq-question">
            <h3>Can I order bread with a special shape?</h3>
            <span class="arrow"></span>
          </div>
          <div class="faq-answer">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="faqs-image">
      <img src="img/about_6.webp" alt="Baker holding a tray of bread">
    </div>
  </section>
  <section class="team-section">
    <div class="container-team-section">
      <p class="section-tag">OUR TEAM</p>
      <h2>Professional Bakers</h2>
      <div class="team-members">
        <div class="member-card">
          <div class="member-image">
            <img src="img/team_1.webp" alt="Austin George">
          </div>
          <h3>Austin George</h3>
          <p class="member-role">HEAD CHEF</p>
          <div class="social-links">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="member-card">
          <div class="member-image">
            <img src="img/team_2.webp" alt="Wanda Frank">
          </div>
          <h3>Wanda Frank</h3>
          <p class="member-role">BAKER</p>
          <div class="social-links">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="member-card">
          <div class="member-image">
            <img src="img/team_3.webp" alt="Stacy Coulden">
          </div>
          <h3>Stacy Coulden</h3>
          <p class="member-role">BAKER</p>
          <div class="social-links">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="member-card">
          <div class="member-image">
            <img src="img/team_4.webp" alt="Kyle Thomas">
          </div>
          <h3>Kyle Thomas</h3>
          <p class="member-role">BAKER</p>
          <div class="social-links">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
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
