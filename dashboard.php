<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Fetch user email from the session
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Creativity Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-transparent py-5">
      <div class="container">
        <a class="navbar-brand" href="#">
          <h1>Creativity</h1>
        </a>

        <div class="d-flex align-items-center">
          <a href="#" class="shopping-cart d-lg-none me-3">
            <i class="fa-solid fa-bag-shopping"></i>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item p-4">
              <a class="nav-link active fs-4" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item p-4">
              <a class="nav-link fs-4" aria-current="page" href="#about">About</a>
            </li>
            <li class="nav-item p-4">
              <a class="nav-link fs-4" aria-current="page" href="#">Contact us</a>
            </li>
            <li class="nav-item p-4 d-none d-lg-block">
              <a href="#" class="shopping-cart">
                <i class="fa-solid fa-bag-shopping"></i>
              </a>
            </li>
          </ul>
          <div class="d-flex">
            <a href="dashboard.php" class="me-3">
              <button class="btn border-1 rounded-3 border-white login" type="button">Dashboard</button>
            </a>
            <a href="logout.php">
              <button class="btn border-1 rounded-3 border-white sign_up" type="button">Logout</button>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <div class="content">
      <div class="item-wrapper">
        <h2>Welcome to Your Dashboard!</h2>
        <p>Your email: <?php echo htmlspecialchars($email); ?></p>
        <p>You Can Visit <br> Without A Visa</p>

        <a href="#our-services">
          <button class="btn border-2 border-white rounded-5 px-3 my-4">Book Now</button>
        </a> 
      </div>
    </div>
  </header>
  <main>
    <!-- About Us Section -->
    <section id="about">
      <div class="about-us">
        <div class="item-head p-5">
          <h2>About Us</h2>
          <div class="item-content">
            <p class="text">Our mission is to inspire the next generation of space enthusiasts through engaging content, interactive learning, and hands-on activities. Explore the wonders of the universe with us and unlock your potential!</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Services Section -->
    <section id="our-services">
      <div class="our-services">
        <div class="head text-center p-5 mb-5">
          <h2>Our Services</h2>
          <br>
          <p>We will do the upcoming steps by the given fund...</p>
        </div>
        <div class="container m-auto">
          <div class="item-wrapper row row-cols-2 row-cols-sm-1 justify-content-around">
            <div class="item1 col text-center">
              <div class="img m-auto rounded-circle">
                <img src="images/courses.png" alt="courses">
              </div>
              <h3>Online Course</h3>
              <br><br>
              <span>Videos</span>
              <br>
              <span>Tasks</span>
              <br>
              <button class="btn rounded-pill">Book</button>
            </div>
            <div class="item2 col text-center">
              <div class="img m-auto rounded-circle">
                <img src="images/shop.png" alt="shop">
              </div>
              <h3>Store</h3>
              <br><br>
              <span class="text-start">Games</span>
              <br>
              <button class="btn rounded-pill">BUY</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- The Store Section -->
    <section>
      <div class="the-store">
        <div class="container">
          <div class="head">
            <h2 class="p-5">The Store</h2>
          </div>
          <div class="container">
            <div class="row row-cols-3 row-cols-sm-1 justify-content-evenly">
              <div class="item1 pe-5 col">
                <div class="img pt-3">
                  <img src="images/solarSystem.png" alt="solarSystem">
                </div>
                <button class="btn rounded-pill px-4">Solar System <br> 250EGP</button>
              </div>
              <div class="item2 col">
                <img class="space-craft" src="images/spaceShuttle.png" alt="spaceShuttle">
                <div class="img">
                  <img src="images/box.png" alt="box">
                </div>
                <button class="btn rounded-pill px-4">Space Arcade <br> 250EGP</button>
              </div>
              <div class="item3 col">
                <div class="img">
                  <img src="images/box2.png" alt="box">
                </div>
                <button class="btn rounded-pill px-4">The Universe <br> 250EGP</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Us Section -->
    <section>
      <div class="contact-us">
        <div class="container py-5 text-center">
          <div class="container-fluid">
            <form method="post" action="contact.php">
              <div class="header">
                <h1 class="my-5">Contact Us</h1>
              </div>
              <div class="text-start my-5 input-label">
                <label for="exampleFormControlInput1" class="form-label">Number</label>
                <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Your Number" name="number">
              </div>
              <div class="text-start my-5 input-label">
                <label for="exampleFormControlInput2" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Your email" name="email" value="<?php echo htmlspecialchars($email); ?>" readonly>
              </div>
              <div class="mb-3 text-start">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write us what you want" name="message"></textarea>
              </div>
              <div class="container my-5">
                <div class="row align-items-center">
                  <div class="col-2 text-center">
                    <a href="#"><i class="fa-solid fa-phone"></i></a>
                  </div>
                  <div class="col-8 text-center">
                    <a href="#"><i class="fa-brands fa-instagram px-2"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f px-2"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin px-2"></i></a>
                  </div>
                  <div class="col-2 text-center">
                    <button type="submit" class="btn btn-link p-0" aria-label="Submit Form">
                      <i class="fa-regular fa-envelope fs-4"></i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <div class="row justify-content-between mt-4">
        <div class="col-md-4">
          <a href="index.html"><h1>Creativity</h1></a>
        </div>
        <div class="col-md-2">
          <h5>Education tools</h5>
          <ul class="list-unstyled">
            <li>Hologram</li>
            <li>Robots</li>
            <li>3D Models</li>
            <li>VR Games</li>
            <li>AR Games</li>
          </ul>
        </div>
        <div class="col-md-2">
          <h5>Courses</h5>
          <ul class="list-unstyled">
            <li>The solar system</li>
            <li>The universe</li>
            <li>Space</li>
          </ul>
        </div>
        <div class="col-md-2">
          <h5>About Us</h5>
          <ul class="list-unstyled">
            <li>Contact</li>
            <li>Help/Support</li>
          </ul>
        </div>
      </div>
      <div class="line"></div>
      <div class="text-end social-icons mt-2">
        <a href="#"><i class="fa-brands fa-facebook-f pe-1"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin ps-1"></i></a>
      </div>
      <div class="text-center copyright">
        © 2024 Lift Media. All rights reserved.
      </div>
    </div>
  </footer>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>