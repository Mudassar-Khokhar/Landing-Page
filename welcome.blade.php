<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Professional Landing Page</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <style>
/* Base Reset */
body, html {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #003366; /* Unique text color */
}

/* Hero Section */
.hero-section {
  background: url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  position: relative;
}
.hero-section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background-color: rgba(0, 0, 139, 0.3);
  backdrop-filter: blur(1px);
  z-index: 1;
}
.hero-content {
  color: #fff;
  padding: 2rem;
  max-width: 800px;
  margin: 0 auto;
  position: relative;
  z-index: 2;
}

/* Navbar */
.navbar {
  /* background-color: #f0f8ff !important; */
  width: 100%;
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
  /* box-shadow: 0 2px 8px rgba(0,0,0,0.1); */
}
.navbar .container {
  width: 80% !important;
  max-width: 100%;
  justify-content: center !important;
  padding-left: 2rem;
  padding-right: 2rem;
}
.navbar-nav .nav-link {
  color: white !important;
  font-weight: 500;
}
.navbar-nav .nav-link.active {
  font-weight: bold;
  color: #0056b3 !important;
}
.navbar-brand img {
  height: 40px;
}
.btn-outline-light {
  border-color: #0056b3;
  color: #0056b3;
}
.btn-outline-light:hover {
  background-color: #0056b3;
  color: #fff;
}
.btn-primary {
  background-color: #0056b3 !important;
  border-color: #0056b3 !important;
}
.btn-primary:hover {
  background-color: #003d7a !important;
  border-color: #003d7a !important;
}

/* Responsive */
@media (max-width: 768px) {
  .hero-content {
    padding: 1.5rem;
  }
}

/* Icons */
.icon-container {
  position: absolute;
  bottom: 20px;
  width: 80%;
  display: flex;
  justify-content: space-between;
  gap: 15px;
  left: 10%;
  z-index: 3;
}
.arrow-icons, .social-icons {
  display: flex;
  gap: 15px;
}
.circle-icon {
  background-color: rgba(0, 0, 0, 0.6);
  color: white;
  border-radius: 50%;
  padding: 10px;
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: background-color 0.3s;
}
.circle-icon:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.dark-blue-bg {
  background-color: #001a33;
  padding: 4rem 0;
  color: #fff;
}
.light-blue-box {
  padding: 2.5rem;
  border-radius: 10px;
  margin: 0.75rem;
  height: 100%;
}
.blur-box {
  background-color: rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  color: #fff;
}
.img-container {
  height: 70%;
  width: 100%;
  display: flex;
  align-items: flex-start;
  justify-content: flex-end;
}
.img-container img {
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
}
.btn-view {
  background-color: #0056b3;
  color: white;
  padding: 0.75rem 1.75rem;
  border-radius: 30px;
  text-decoration: none;
  display: inline-block;
  margin-top: 1.5rem;
  border: none;
}
.btn-view:hover {
  background-color: #003d7a;
  color: white;
}
.content-wrapper {
  height: 100%;
  padding: 1rem;
}

/* Product Box Styles */
.blur-blue-top {
  background-color: #cfe2ff;
  height: 70%;
  position: relative;
  padding: 25px;
}
.box-bottom {
  height: 30%;
  padding: 20px;
  background-color: #001a33;
  color: white;
}
.product-box {
  height: 350px;
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 30px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.product-img {
  max-height: 150px;
  width: auto;
  display: block;
  margin: 0 auto;
}
.original-price {
  text-decoration: line-through;
  color: #adb5bd;
  font-size: 0.9rem;
}
.discount-price {
  font-weight: bold;
  color: #ff6b6b;
  font-size: 1.1rem;
}

/* Sticky Button */
.btn-shop {
  position: fixed;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
  padding: 12px 24px;
  background-color: #ff6b6b;
  color: white;
  border: none;
  border-radius: 5px;
  font-weight: 500;
  z-index: 1000;
}

/* Product Section */
.products-section {
  padding-top: 3rem;
  padding-bottom: 4rem;
}
.products-navbar {
  margin: 2rem 0;
}
.product-title {
  margin-bottom: 1.5rem;
}
.product-description {
  margin-bottom: 2rem;
}
.products-container {
  width: 80% !important;
  max-width: 100% !important;
  margin: 0 auto !important;
}

/* Product Content Section */
.product-content {
  display: none;
  padding: 2rem 0;
}
.product-content.active {
  display: block;
}

</style>
</head>

<body>

  <!-- NAVIGATION -->
  <nav class="navbar navbar-expand-lg py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-2 text-warning" href="#">
            AJR
          </a>          
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active text-white" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Features</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">Pricing</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#">About</a></li>
        </ul>
        <div class="d-flex align-items-center">
          <a href="#" class="text-white me-3"><i class="bi bi-search fs-5"></i></a>
          <a href="#" class="text-white me-3" title="Forgot Password?" data-bs-toggle="modal" data-bs-target="#fgtModal"><i class="bi bi-key fs-5"></i></a>   
          <div class="vr bg-white me-3"></div>
          <a href="#" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#myModal">Sign In</a> 
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#regModal">Register</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section class="hero-section">
    <div class="hero-content">
      <h1 class="display-4 fw-bold mb-4">Transform Your Business Today</h1>
      <p class="lead mb-5">Streamline operations and boost productivity with our cutting-edge technology designed for modern enterprises.</p>
      <div class="d-flex flex-wrap gap-3 justify-content-center">
        <a href="#" class="btn btn-primary btn-lg px-4 py-2">Get Started <i class="bi bi-arrow-right ms-2"></i></a>
        <a href="#" class="btn btn-outline-light btn-lg px-4 py-2">Learn More</a>
      </div>
    </div>

    <div class="icon-container">
      <div class="arrow-icons">
        <div class="circle-icon"><i class="bi bi-arrow-left"></i></div>
        <div class="circle-icon"><i class="bi bi-arrow-right"></i></div>
      </div>
      <div class="social-icons">
        <div class="circle-icon"><i class="bi bi-twitter"></i></div>
        <div class="circle-icon"><i class="bi bi-instagram"></i></div>
      </div>
    </div>
  </section>

  <!-- TWO COLUMN BLUR SECTION -->
  <section class="container-fluid dark-blue-bg">
    <div class="row g-4">
      <!-- First Box -->
      <div class="col-md-6">
        <div class="light-blue-box blur-box">
          <div class="row align-items-center content-wrapper">
            <div class="col-md-6">
              <h2 class="mb-3">First Heading</h2>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="btn btn-view">View Now</a>
            </div>
            <div class="col-md-6">
              <div class="img-container float-end">
                <img src="{{ asset('images/2.png') }}" alt="Placeholder" class="img-fluid rounded">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Second Box -->
      <div class="col-md-6">
        <div class="light-blue-box blur-box">
          <div class="row align-items-center content-wrapper">
            <div class="col-md-6">
              <h2 class="mb-3">Second Heading</h2>
              <p class="mb-4">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <a href="#" class="btn btn-view">View Now</a>
            </div>
            <div class="col-md-6">
              <div class="img-container float-end">
                <img src="{{ asset('images/6.png') }}" class="card-img-top" alt="img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- PRODUCTS SECTION -->
    <div class="container products-section products-container">
        <!-- Heading -->
        <div class="row text-center product-title">
            <div class="col-12">
                <h1 class="display-5 mb-3">Our Products</h1>
                <p class="lead product-description">Discover our amazing collection of items</p>
            </div>
        </div>
        
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light products-navbar rounded">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-center">
                    <ul class="navbar-nav" id="productsNav">
                        <li class="nav-item mx-3"><a class="nav-link product-nav-link active" href="home.blade.php" data-target="home">Home</a></li>
                        <li class="nav-item mx-3"><a class="nav-link product-nav-link" href="product.blade.php" data-target="products">Products</a></li>
                        <li class="nav-item mx-3"><a class="nav-link product-nav-link" href="categories.blade.php" data-target="categories">Categories</a></li>
                        <li class="nav-item mx-3"><a class="nav-link product-nav-link" href="offer.blade.php" data-target="offers">Offers</a></li>
                        <li class="nav-item mx-3"><a class="nav-link product-nav-link" href="about.blade.php" data-target="about">About</a></li>
                        <li class="nav-item mx-3"><a class="nav-link product-nav-link" href="{{ url('/all') }}" data-target="all">All</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        
  </section>

  <!-- BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const productNavLinks = document.querySelectorAll('.product-nav-link');
        const contentContainer = document.createElement('div');
        contentContainer.id = 'dynamicContentContainer';
        contentContainer.className = 'product-content active';
        document.querySelector('.products-navbar').after(contentContainer);
    
        // Function to load content
        async function loadContent(target) {
            try {
                // Show loading indicator
                contentContainer.innerHTML = `
                    <div class="text-center py-5">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                `;
                
                // Determine the correct URL based on data-target
                let url;
                switch(target) {
                    case 'home':
                        url = 'home.blade.php';
                        break;
                    case 'products':
                        url = 'product.blade.php';
                        break;
                    case 'categories':
                        url = 'categories.blade.php';
                        break;
                    case 'offers':
                        url = 'offer.blade.php';
                        break;
                    case 'about':
                        url = 'about.blade.php';
                        break;
                    case 'all':
                        url = '/all';
                        break;
                    default:
                        url = 'home.blade.php';
                }
                
                // Fetch the content
                const response = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'text/html'
                    }
                });
                
                if (!response.ok) {
                    throw new Error('Failed to load content');
                }
                
                const content = await response.text();
                contentContainer.innerHTML = content;
                
            } catch (error) {
                console.error('Error loading content:', error);
                contentContainer.innerHTML = `
                    <div class="alert alert-danger">
                        Error loading content. Please try again.
                    </div>
                `;
            }
        }
        
        // Handle navigation clicks
        productNavLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                productNavLinks.forEach(el => el.classList.remove('active'));
                this.classList.add('active');
                const target = this.getAttribute('data-target');
                loadContent(target);
            });
        });
        loadContent('home');
    });
    </script>
  
  @include('modals.login')
  @include('modals.register')
  @include('modals.forgot')
  
</body>
</html>