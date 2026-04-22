<?php
include 'includes/function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Career Advisor | Choose Your Perfect Career Path</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

<!-- navbar --> 
 <nav class="navbar  navbar-expand-lg navbar-light sticky-top" style="background-color: #2e69f1;">
  <div class="container">
    <a href="index.php" class="navbar-brand fw-bold">
      Career Advisor
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto"> 
       <li> 
        <a href="#" class="nav-link text-#3314bb ">
        <i class="fas fa-home me-2"></i>  
        Home</a>
       </li>
        <li class="nav-item">
        <a href="#services" class="nav-link">
          <i class="fas fa-briefcase me-2"></i>  
          Services
        </a>
       </li>

        <?php if (isLoggedIn()): ?>
       <li> 
        <a href="#" class="nav-link">
          <i class="fas fa-chart-line me-2"></i>  
          Dashboard
        </a>
       </li>

       <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fas fa-sign-out-alt me-2"></i>  
          Logout
        </a>
       </li>
        <?php else: ?>
       <li class="nav-item">
        <a href="login.php" class="nav-link">
          <i class="fas fa-sign-in-alt me-2"></i>  
          Login
        </a>
       </li>

       <li  class="nav-item">
        <a href="register.php" class="nav-link">
          <i class="fas fa-user-plus me-2"></i>  
          Register
        </a>
       </li>
        <?php endif;?>
      </ul>

    </div>
  </div>
</nav>

<!-- <img class="imgHome" src="img/mm.jpg" alt="Background Image"> -->

<!-- hero section -->

<div class="py-5" >
 <div class="container d-flex flex-column justify-content-center align-items-center "style="height: 50vh;" >
  <h1 class="display-6 fw-bold">Choose Your Perfect Career Path </h1>
     <p class="lead text-muted">
    Get personalized guidance for your stream, courses, and career after 10th/12th
      </p>
     <?php if (isLoggedIn()): ?>
       <a href="dashboard.php" class="btn btn-primary btn-lg">Go to Dashboard</a>
       <?php else: ?>
       <div class="d-flex gap-3">
        <a href="register.php" class="btn btn-primary btn-lg">Get Started</a>
        <a href="login.php" class="btn btn-outline-primary btn-lg">Login</a>
       </div>
        <?php endif; ?>
     </div>
  </div>
</div>

<!-- skill section -->
<!-- <div class="container py-5 " id="services">  
  <h2 class="text-center mb-5">Our Services</h2>

  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card text-center h-100">
        <div class="card-body">
          <h4 class="card-title">🧠 Aptitude Quiz</h4>
          <p class="card-text">Take our intelligent quiz to discover your ideal stream (Science, Commerce, or Arts)</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card text-center h-100">
        <div class="card-body">
          <h4 class="card-title">📚 Course Guide</h4>
          <p class="card-text"> Explore various courses and get detailed information about each one</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card text-center h-100">
        <div class="card-body">
          <h4 class="card-title">🏫 College Directory</h4>
          <p class="card-text">  Find nearby government colleges with course details and cutoffs</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card text-center h-100">
        <div class="card-body">
          <h4 class="card-title">💼 Career Paths</h4>
          <p class="card-text"> Discover career options and job opportunities in your field</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card text-center h-100">
        <div class="card-body">
          <h4 class="card-title">📅 Important Dates</h4>
          <p class="card-text"> tay updated with admission dates and scholarship deadlines</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card text-center h-100">
        <div class="card-body">
          <h4 class="card-title">👤 Personalized Guide</h4>
          <p class="card-text">  Get customized recommendations based on your profile</p>
        </div>
      </div>

       </div>

  </div>
</div> -->


   


</body>
</html>