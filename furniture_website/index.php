<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="stylee.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
    }

    .logo {
      margin: 0;
    }

    .navigation {
      float: right;
    }

    .navigation a {
      color: #fff;
      margin-left: 10px;
      text-decoration: none;
    }

    .hero {
      background-image: url('hero-image.jpg');
      background-size: cover;
      color: #fff;
      text-align: center;
      padding: 100px 0;
    }

    .featured-products {
      text-align: center;
      padding: 50px 0;
    }

    .featured-products .product {
      display: inline-block;
      width: 300px;
      margin: 0 20px;
      text-align: left;
    }

    .featured-products .product img {
      width: 100%;
      border-radius: 5px;
    }

    .mission-vision {
      background-color: #f4f4f4;
      padding: 50px 0;
      text-align: center;
    }

    .contact {
      text-align: center;
      padding: 50px 0;
    }
  </style>
</head>

<body>
<div class="navbar">
    <img src="img/loogo3.png" alt="Logo">
    <a href="login.php"><button id="loginButton">Login</button></a>
  </div>
  </header>
  <section class="hero">
    <h1>Welcome to SHEMA FURNITURE</h1>
    <p> where style meets comfort and every corner tells a story. Step into our world of timeless elegance and discover a curated collection of furniture pieces designed to transform your space into a haven of relaxation and beauty. Whether you're furnishing a cozy living room, revamping your bedroom sanctuary, or creating an inviting dining area, we're here to inspire and guide you on your journey to create the home of your dreams. Come explore our range of exquisite furniture crafted with passion and precision, and let us help you bring your vision to life. Welcome home."</p>
  </section>
  <div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/full4.jpg" style="width:100%">
  </div>
  
  <div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/full2.jpg" style="width:100%">
  </div>
  
  <div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/full3.jpg" style="width:100%">
  </div>
  
  </div>
  
<script src="slideshow.js"></script>
  <section class="featured-products">
    <h2>Featured Products</h2>
    <div class="product">
      <img src="img/f2.gif" alt="Product 1" />
      <h3>Modern Sofa Set</h3>
      <p>Enhance your living room with our comfortable and stylish sofa set.</p>
    </div>
    <div class="product">
      <img src="img/f1.gif" alt="Product 2" />
      <h3>Elegant Dining Table</h3>
      <p>Host dinner parties in style with our elegant dining table.</p>
    </div>
  </section>
  <section class="mission-vision">
    <h2>Our Mission</h2>
    <p>"At SHEMA FURNITURE, our mission is to redefine the way people experience their living spaces by offering exceptional furniture that seamlessly blends style, functionality, and comfort. We are committed to providing our customers with a curated selection of high-quality pieces that elevate their homes and reflect their unique personalities and tastes. With a focus on craftsmanship, sustainability, and customer satisfaction, we strive to inspire and empower individuals to create spaces that they love and cherish for years to come. Our dedication to excellence drives us to continuously innovate, collaborate with talented designers, and maintain ethical practices throughout our supply chain. At [Your Furniture Store Name], we believe that everyone deserves a home that is not only beautiful but also a true reflection of their lifestyle and values. Welcome to a world of timeless elegance and endless possibilities."</p>
    <h2>Our Vision</h2>
    <p>"Empowering homes with timeless elegance and lasting comfort, we envision SHEMA FURNITURE as the ultimate destination for discerning individuals seeking to create inspired living spaces. Our vision is to be a trusted leader in the furniture industry, renowned for our unwavering commitment to quality, innovation, and customer satisfaction. By curating a diverse range of thoughtfully designed pieces that capture the essence of modern luxury, we aspire to inspire creativity and transform houses into homes that evoke joy, serenity, and harmony. With a focus on sustainability and social responsibility, we aim to lead by example, fostering a culture of respect for the environment and our communities. Through our dedication to excellence and passion for design, we strive to become synonymous with sophistication, reliability, and unparalleled craftsmanship. Welcome to a world where your vision of home becomes a reality."</p>
  </section>
<div id="loginReminderModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Please log in to access exclusive features on SHEMA FURNITURE!</p>
      <a href="login.php"><button id="loginButton">Login</button></a>
    </div>
  </div>
  <script src="index.js"></script>
  <footer class="footerMain">
  <div style="width: 80%; padding-top: 15px;">
    <p>&copy; shema furniture 2024</p>
    <p class="legal"><a href="privacy.html">follow us on
      
    </a></p>
    <ul class="social-icons">
      <div id="social-icons">
        <div>
          <em class="fa fa-facebook"></em>
          <p>Facebook</p>
        </div>
        <div>
          <em class="fa fa-twitter"></em>
          <p>Twitter</p>
        </div>
        <div>
          <em class="fa fa-instagram"></em>
          <p>Instagram</p>
        </div>
        <div>
          <em class="fa fa-youtube"></em>
          <p>YouTube</p>
        </div>
      </div>
    </div>
    
  </div>
</footer>
</body>
</html>
