<?php
require_once "condom.php";
echo "YOU MADE IT INTO LANDING PAGE";
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
                  <a class="navbar-item is-active" href="/Project!/landing.php">
                    Your account
                  </a>
                  <a class="navbar-item" href="/Project!/BUILD PAGE">
                    Apply for loan by Kimmy
                  </a>
                  <a class="navbar-item" href="/Project!/BUILD PAGE">
                    Pay bills to Kimmy
                  </a>
                  <a class="navbar-item" href="/Project!/BUILD PAGE">
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
          <li class="is-active">
            <a href="/Project!/landing.php">Your account</a>
          </li>
          <li>
            <a href="/Project!/BUILD PAGE">Apply for loan by Kimmy</a>
          </li>
          <li>
            <a href="/Project!/BUILD PAGE">Pay bills to Kimmy</a>
          </li>
          <li>
            <a href="/Project!/BUILD PAGE">Talk to VERY FRIENDLY support</a>
          </li> 
        </ul>
      </div>
    </nav>
  </div>
</section>
<section class="section">
    <p class="level-item has-text-centered title">
        At a glance:
    </p>
<nav class="level">
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Available Balance</p>
      <p class="title">3,456₩</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading is-warning">Outstanding loans</p>
      <p class="title is-warning">20₩</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Balance</p>
      <p class="title">3,436₩</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Transaction count</p>
      <p class="title">234</p>
    </div>
  </div>
</nav>
<!-- this is where the business logic goes -->
<div class="columns">
  <div class="column">
  <div class="card">
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title">Your account: </p>
        <!-- TODO, generate account number dynamically -->
        <p class="subtitle">Balance: 50000₩ </p>
      </div>
    </div>

    <div class="content">
    In the glorious tapestry of Best Korea's economic landscape, money serves not as a means of exploitation or inequality but as a beacon of solidarity and unity, binding the Korean people in their collective endeavor to build a prosperous socialist paradise. It is a currency of liberation, emancipating the masses from the shackles of capitalist exploitation and ushering in an era of true autonomy and self-sufficiency.
    <br><br>
    Thus, within the hallowed halls of Best Korea's ideological fortress, the concept of money becomes inseparable from the spirit of Juche, embodying the resilience, determination, and unwavering commitment of the Korean people to realize their sovereign destiny, guided by the eternal wisdom of the Great Leader.
      <br>
    </div>
  </div>
</div>
  </div>
  <div class="column">
    <div class="card">
    <div class="card-content">
        <div class="media">
            <div class="media-content">
                <p class="title">Recent transactions: </p>
                <!-- TODO, generate account number dynamically -->
            </div>
        </div>
        <div class="content">
        <table class="table">
            <thead>
            <tr>
                <th>Transaction type</th>
                <th>Amount</th>
                <th>Description</th>
            </tr>
            </thead>
        </table>
        </div>
    </div>
    </div>
  </div>
</div>
<p class="level-item has-text-centered title">
        Quick links:
    </p>
<div class="tabs is-toggle is-fullwidth is-large">
  <ul>
    <li>
      <a>
        <span class="icon"></span>
        <span>Deposit Money</span>
      </a>
    </li>
    <li>
      <a>
        <span class="icon"></span>
        <span>Withdrawal Money</span>
      </a>
    </li>
    <li>
      <a>
        <span class="icon"></span>
        <span>Transfer Money</span>
      </a>
    </li>
  </ul>
</div>


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
