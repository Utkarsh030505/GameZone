<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/GameZone/public/gamepadicon.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <meta name="description" />
  <title>GameZone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link rel="stylesheet" href="public/style.css">

</head>

<body>
  <header class="header">
    <section class="flex">
      <div class="icon">
        <svg class="gamepad" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 512 512 " id="game">
          <path
            d="M135.123 204.568c-10.688 0-19.343 8.717-19.343 19.441 0 10.727 8.655 19.447 19.343 19.447 10.641 0 19.297-8.721 19.297-19.447 0-10.724-8.656-19.441-19.297-19.441z"
            fill="#e056fd" class="color000000 svgShape"></path>
          <path
            d="M466.279 248.866c-21.157-88.471-43.631-135.489-88.454-148.83C368.06 97.135 359.748 96 352.076 96c-27.598 0-46.938 14.683-96.08 14.683-49.174 0-68.502-14.681-96.062-14.683-7.665 0-15.963 1.135-25.721 4.036-44.869 13.341-67.342 60.359-88.461 148.83-21.181 88.473-17.334 152.363 7.679 164.289C57.502 415.1 61.662 416 65.885 416c21.694 0 45.139-23.838 67.659-52.047C159.198 331.848 165.658 331 243.822 331h24.343c78.147 0 84.628.846 110.282 32.953 22.526 28.207 45.97 52.004 67.665 52.004 4.226 0 8.384-.879 12.457-2.823 25.005-11.926 28.852-75.795 7.71-164.268zm-331.045 14.767c-21.64 0-39.234-17.758-39.234-39.623 0-21.84 17.594-39.643 39.234-39.643 21.655 0 39.249 17.803 39.249 39.643 0 21.865-17.593 39.623-39.249 39.623zm172.842-19.493c-11.058 0-20.076-9.019-20.076-20.107 0-11.09 9.019-20.104 20.076-20.104 11.131 0 20.148 9.014 20.148 20.104.001 11.088-9.017 20.107-20.148 20.107zM351.988 288c-11.058 0-20.053-8.951-20.053-20.016 0-11.157 8.995-20.106 20.053-20.106 11.146 0 20.148 8.949 20.148 20.106.001 11.065-9.002 20.016-20.148 20.016zm0-87.81c-11.058 0-20.053-8.993-20.053-20.083 0-11.094 8.995-20.107 20.053-20.107 11.146 0 20.148 9.014 20.148 20.107.001 11.09-9.002 20.083-20.148 20.083zm43.959 43.95c-11.105 0-20.101-9.019-20.101-20.107 0-11.09 8.995-20.104 20.101-20.104 11.059 0 20.053 9.014 20.053 20.104 0 11.088-8.994 20.107-20.053 20.107z"
            fill="#e056fd" class="color000000 svgShape"></path>
        </svg>
        <a href="#" class="logo">GameZone</a>
      </div>
      <nav class="navbar">
        <a href="#">Home</a>
        <a href="#" onClick="document.getElementById('about').scrollIntoView();">About</a>
        <a href="#" onClick="document.getElementById('topgames').scrollIntoView();">Discover</a>
        <a href="#" onClick="document.getElementById('pricing').scrollIntoView();">Subscriptions</a>
        <a href="#" onClick="document.getElementById('contact').scrollIntoView();">Contact</a>
      </nav>
      <div class="btnbox">
        <?php if (isset($_SESSION['username'])): ?>
          <div class="logout">
          <h4>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h4>
          <a href="forms/logout.php" class="btn logout">Logout</a>
          </div>
        <?php else: ?>
          <a href="forms/loginforms.php" class="btn login">Login</a>
          <a href="forms/registerform.php" class="btn">Sign Up</a>
        <?php endif; ?>
      </div>
    </section>
  </header>
  <!-- header ends -->

  <!-- home section starts -->
  <div class="home" style="background: url('/GameZone/public/bg.jpg');  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  text-align: center;">
    <section class="flex">
      <div class="content">
        <h3>Unlimited <span>Gaming</span></h3>
        <p>Endless Adventures, One Click Away - Dive Into the World of Gaming Today!</p>
        <a href="#" class=" btn" onClick="document.getElementById('topgames').scrollIntoView();">Play Now</a>
      </div>

    </section>
  </div>

  <!-- home section ends -->


  <div class="features">
    <section class="flex">
      <div class="container" id="custom-cards">
        <h1 class="featuretitle">Our <span>features</span></h1>
        <div class="row">
          <div class="col">
            <div class="card box1" style="background: url('/GameZone/public/character-playing-video-games-eating-snacks_23-2148537996.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;">
              <div class="card-content">
                <h3 class="card-title">New Challenges Everyday</h3>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card box2" style="background: url('/GameZone/public/multiplayerimg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;">
              <div class="card-content">
                <h3 class="card-title">Enjoy Multiplayer with Friends</h3>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card box3" style="background: url('/GameZone/public/mobilegamer.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;">
              <div class="card-content">
                <h3 class="card-title">Online and Offline Modes</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- about section starts -->
  <div class="about" id="about">
    <section class="flex" style="background-image: url('/GameZone/public/aboutbg.jpg'),linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)) ;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    height: 46rem;">
      <div class="content" style="  margin-top: 3rem;">
        <h3>About us</h3>
        <p>Welcome to GameZone, your ultimate destination for thrilling and engaging gaming experiences! At GameZone, we
          bring together a vast collection of games across genres, ensuring there's something for every gamer out there.
          Whether you're a casual player seeking quick entertainment or a dedicated gamer looking for your next big
          adventure, we've got you covered.

          Our mission is to create a platform that delivers endless fun, challenges, and connections to our gaming
          community. From action-packed adventures to brain-teasing puzzles, our library is constantly expanding to
          include the latest and greatest in the gaming world.

          For our most passionate players, we offer exclusive premium subscription plans that unlock special benefits
          such as upcoming early game access, free coins, and premium features to enhance your experience.

          At GameZone, we believe that gaming is more than just entertainment -it's a way to connect, learn, and have
          fun. Our mission is to create a platform that brings people together, ignites creativity, and challenges the
          mind. With a focus on quality, innovation, and user satisfaction, we aim to become the go-to destination for
          gamers of all ages and interests.

          So, what are you waiting for? Dive into world of /GameZone,where adventure, and thrill await you at every
          click.Start playing today and discover why we're the ultimate gaming paradise!

          <br>
          Dive into the world of gaming with GameZone - where the fun never ends!
        </p>
        <a class="btn" onClick="document.getElementById('foot').scrollIntoView();" >Read More</a>
      </div>
    </section>
  </div>
  <!-- about section ends -->

  <!-- games section starts -->
  <div class="topgames" id="topgames">
    <section class="grid">
      <h1 class="heading">Top <span>Games</span></h1>
      <div class="box-container">
        <a class="box" href="/GameZone/games/Rock Paper Scissors/index.html">
          <img src="/GameZone/public/rockpaperscissor1.jpg" alt="">
        </a>
        <a class="box" href="/GameZone/games/Tik Tac Toe/index.html">
          <img src="/GameZone/public/tictactoe1.webp" alt="">
        </a>
        <a class="box" href="/GameZone/games/Simon game/Simon Game Challenge Starting Files/index.html">
          <img src="/GameZone/public/Simongame.png" alt="">
        </a>
        <a class="box" href="/GameZone/games/Recall Rush/index.html">
          <img src="/GameZone/public/recallrush.png" alt="">
        </a>
        <a class="box " href="/GameZone/games/2048 game/">
          <img src="/GameZone/public/2048.png" alt="">
        </a>
        <a class="box" href="/GameZone/games/Hangman Game/index.html">
          <img src="/GameZone/public/hangman.png" alt="">
        </a>
        <a class="box" href="/GameZone/games/Nom Nom snake/index.html">
          <img src="/GameZone/public/snake.jpg" alt="">
        </a>
        <a class="box" href="/GameZone/games/Word Scramble Game/index.html">
          <img src="/GameZone/public/word.jpg" alt="">
        </a>

      </div>
    </section>
  </div>
  <!-- games section ends -->
  <!-- info section starts -->
  <div class="info">
    <section class="grid">
      <div class="box">
        <img src="/GameZone/public/Horror video game-bro.svg" alt="">
        <h3>Unlimited Games</h3>
      </div>
      <div class="box">
        <img src="/GameZone/public/Account-rafiki.svg" alt="">
        <h3>Multiple Accounts</h3>
      </div>
      <div class="box">
        <img src="/GameZone/public/Piggy bank-amico.svg" alt="">
        <h3>Daily Rewards</h3>
      </div>
      <div class="box">
        <img src="/GameZone/public/E-Wallet-amico.svg" alt="">
        <h3>Secured Payments</h3>
      </div>
    </section>
  </div>
  <!-- info section ends -->

  <!-- pricing section starts -->
  <div class="pricing" id="pricing">
    <section class="grid">
      <h1 class="heading">Our <span>Plans</span></h1>
      <div class="box-container">
        <div class="box">
          <h3>silver</h3>
          <div class="amount">$<span>4.99</span></div>
          <div class="date">for 3 months</div>
          <div class="list">
            <p><i class="fa fa-check"></i>15 days free trial</p>
            <p><i class="fa fa-check"></i>cancel anytime</p>
            <p><i class="fa fa-check"></i>24/7 services</p>
            <p><i class="xmark ">&#10060;</i>daily free coins/diamonds</p>
            <p><i class="xmark">&#10060;</i>early games access</p>
          </div>
          <a href="forms/subscription/Payment.html" class="btn">Check Out</a>
        </div>

        <div class="box">
          <h3>Gold</h3>
          <div class="amount">$<span>9.99</span></div>
          <div class="date">for 6 months</div>
          <div class="list">
            <p><i class="fa fa-check"></i>15 days free trial</p>
            <p><i class="fa fa-check"></i>cancel anytime</p>
            <p><i class="fa fa-check"></i>24/7 services</p>
            <p><i class="fa fa-check"></i>daily free coins/diamonds</p>
            <p><i class="xmark">&#10060;</i>early games access</p>
          </div>
          <a href="forms/subscription/Payment.html" class="btn">Check Out</a>
        </div>
        <div class="box">
          <h3>Diamond</h3>
          <div class="amount">$<span>14.99</span></div>
          <div class="date">for 12 months</div>
          <div class="list">
            <p><i class="fa fa-check"></i>15 days free trial</p>
            <p><i class="fa fa-check"></i>cancel anytime</p>
            <p><i class="fa fa-check"></i>24/7 services</p>
            <p><i class="fa fa-check"></i>daily free coins/diamonds</p>
            <p><i class="fa fa-check"></i>early games access</p>
          </div>
          <a href="forms/subscription/Payment.html" class="btn">Check Out</a>
        </div>
      </div>
    </section>
  </div>
  <!-- pricing section ends -->


  <!-- contact section starts -->

  <div class="contact" id="contact">
    <h1 class="heading">Contact <span>Us</span></h1>
    <div class="box-container">
      <div class="box">
        <img src="/GameZone/public/Mail-amico.svg" alt="">
        <h3>Email</h3>
        <a href="mailto:GameZone24@gmail.com">GameZone24@gmail.com</a>
      </div>
      <div class="box">
        <img src="/GameZone/public/telephone.svg" alt="">
        <h3>Phone</h3>
        <a href="tel:+918656759823">+918656759823</a>
      </div>

      <div class="box map">
        <img src="/GameZone/public/map.svg" alt="">
        <h3>Address</h3>
        <a href="#">Connaught Place,New Delhi,India</a>
      </div>
    </div>

    <form action="" class="form" id="getintouch">
      <h1 class="heading"><span>Get </span>in touch</h1>
      <div class="flex">
        <input type="text" placeholder="Username" class="input">
        <input type="email" placeholder="Email" class="input">
        <input type="text" placeholder="Phone no" class="input">
        <input type="text" placeholder="Country" class="input">
        <textarea name="textarea" class="input" placeholder="Your message"></textarea>
      </div>
      <input type="submit" name="submit" class="btn" value="Send Message">
      <div id="confirmationMessage" style="display: none; margin-top: 20px; color: green; font-size: 1.2em;">
      Thank you for contacting us! We will get back to you shortly.
  </div>
    </form>

  </div>
  <!-- contact section ends -->

  <!-- Footer Section Starts -->
  <div class="footer-container">
    <!-- Footer -->
    <footer class="footer" id="footer">
      <!-- Links Section -->
      <div class="footer-links" id="foot">
        <div class="footer-link-item">
          <h6><a href="#!" onClick="document.getElementById('about').scrollIntoView();">About us</a></h6>
        </div>
        <div class="footer-link-item">
          <h6><a href="#!" onClick="document.getElementById('topgames').scrollIntoView();">Discover</a></h6>
        </div>
        <div class="footer-link-item">
          <h6><a href="#!" onClick="document.getElementById('pricing').scrollIntoView();">Subscriptions</a></h6>
        </div>
        <div class="footer-link-item">
          <h6><a href="#!" onClick="document.getElementById('contact').scrollIntoView();">Contact</a></h6>
        </div>
        <div class="footer-link-item">
          <h6><a href="#!" onClick="document.getElementById('getintouch').scrollIntoView();">Help</a></h6>
        </div>
      </div>
      <!-- Links Section Ends -->

      <hr class="footer-divider" />

      <!-- Description Section -->
      <div class="footer-description">
        <p>
        Established in 2024, Game Zone has been a leading platform for gaming enthusiasts worldwide. We are dedicated to providing the latest in gaming trends, top-rated games, and a thriving community for players of all levels.Explore, discover, and immerse yourself in the world of gaming with Game Zone – where passion meets innovation.
        </p>
      </div>
      <!-- Description Section Ends -->

      <!-- Social Icons Section -->
      <div class="footer-social">
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
        <a href=""><i class="fab fa-google"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-linkedin"></i></a>
        <a href=""><i class="fab fa-github"></i></a>
      </div>
      <!-- Social Icons Section Ends -->

      <!-- Copyright -->
      <div class="footer-copyright">
        © 2024 Copyright:
        <a href="#">GameZone.com</a>
      </div>
      <!-- Copyright Ends -->
    </footer>
    <!-- Footer Ends -->
  </div>
  <!-- Confirmation Message -->

  </div>
  <!-- contact section ends -->

  <script>
    // Function to handle the form submission
    document.querySelector(".form").addEventListener("submit", function (event) {
      event.preventDefault();
      document.getElementById("confirmationMessage").style.display = "block";
      this.reset();
    });
  </script>


</body>

</html>