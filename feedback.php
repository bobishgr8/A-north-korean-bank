<?php
require_once "condom.php";
echo "YOU LOGIN LEGALLY";
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Comrade!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="home.css">
  </head>
  <body>
    <!-- <marquee direction="left">beware of scams! Supreme leader will execute you if you are a scammer </marquee> -->
    <section class="hero is-dark">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
          <header class="navbar">
            <div class="container">
              <div class="navbar-brand">
                <a class="navbar-item" href="/Project!/">
                  <img src="./Assets/Central_Bank_of_DPRK.svg.png" alt="Logo">
                </a>
                <a class="navbar-item" href="/Project!/landing.php">
                    This is <span>&nbsp;</span><strong>OUR</strong><span>&nbsp;</span> banking
                </a>
                <span class="navbar-burger" data-target="navbarMenuHeroC">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
                
              </div>
              <div id="navbarMenuHeroC" class="navbar-menu">
                <div class="navbar-end">
                  <a class="navbar-item" href="/Project!/landing.php">
                    Your account
                  </a>
                  <a class="navbar-item" href="/Project!/applyLoan.php">
                    Apply for loan by Kimmy
                  </a>
                  <a class="navbar-item" href="/Project!/BUILD PAGE">
                    Pay bills to Kimmy
                  </a>
                  <a class="navbar-item is-active" href="/Project!/feedback.php">
                    Talk to VERY FRIENDLY support
                  </a>
                  <a class="navbar-item" href="/Project!/BUILD PAGE">
                    Logout
                  </a>
                  <span class="navbar-item">
                    <a class="button">
                      <span class="icon">
                        <i class="fab fa-github"></i>
                      </span>
                      <span>This is a meme project</span>
                    </a>
                  </span>
                </div>
              </div>
            </div>
          </header>
        </div>
      
        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
          <div class="container has-text-centered" id="center-black">
            <p class="title">
              North Korean state banking application
            </p>
            <p class="subtitle">
                조선민주주의인민공화국중앙은행
            </p>
          </div>
        </div>
    <marquee direction="left">beware of scams! Supreme leader will execute you if you are a scammer </marquee>
    <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li>
            <a href="/Project!/landing.php">Your account</a>
          </li>
          <li>
            <a href="/Project!/applyLoan.php">Apply for loan by Kimmy</a>
          </li>
          <li>
            <a href="/Project!/BUILD PAGE">Pay bills to Kimmy</a>
          </li>
          <li class="is-active">
            <a href="/Project!/feedback.php">Talk to VERY FRIENDLY support</a>
          </li> 
        </ul>
      </div>
    </nav>
  </div>
</section>
<!-- Business logic area -->

<section class="section">
        <div class="block">
            <div class="columns">
                <div class="column">
                </div>
                <div class="column">
                    <form action="./feedback_process.php" method="POST">
                      <br><br>
                      <div class="field">
                        <p class="heading is-3">Please tell me more about your problem and we will send an anti-aircraft missile to your house in 3-5 juche days</p>
                        <textarea class="textarea is-warning" name="content" placeholder="Warning! Do not SPEAK UNWISELY." required></textarea>
                      </div>
                      <div class="field is-grouped is-grouped-centered">
                        <p class="control">
                            <input type="submit" value="Submit" name="feedback" class="button is-success">
                        </p>
                        <p class="control">
                            <a class="button is-light">
                              Cancel
                            </a>
                      </div>
                    </form>
                    </div>
                
                <div class="column">
                  <!-- Third column -->
                </div>
              </div>
        </div>
      </section>




</section>
      <footer class="footer">
        <div class="content has-text-centered">
          <p>
            <img src="./Assets/Central_Bank_of_DPRK.svg.png"><br><br>
            <strong>This is made as a meme</strong>, built for one of my web development modules in university. May Kim Fatty the third not smeer VX nerve agent on me.

          </p>
        </div>
      </footer>

</body>
</html>
