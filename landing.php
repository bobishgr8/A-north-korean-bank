<?php
require_once "condom.php";
echo "YOU LOGIN LEGALLY";
var_dump($_SESSION);
require_once "userDAO.php";
$user = new userDAO;
$outstanding = $user->find_outstanding($_SESSION["bankBoi"]);
$total_balance = $user->find_totalBalance($_SESSION["bankBoi"]);
$total_transactions = $user->find_totalTransaction($_SESSION["bankBoi"]);
if($outstanding != null){
  $outstanding = $outstanding[0]["SUM(t3.loanAmount)"];
}else{
  $outstanding = 0;
}
$balance = $total_balance - $outstanding;
// $outstanding = $user->find_outstanding($_SESSION["bankBoi"])

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
                  <a class="navbar-item" href="/Project!/applyLoan.php">
                    Apply for loan by Kimmy
                  </a>
                  <a class="navbar-item" href="/Project!/repayloan.php">
                    Pay bills to Kimmy
                  </a>
                  <a class="navbar-item" href="/Project!/feedback.php">
                    Talk to VERY FRIENDLY support
                  </a>
                  <a class="navbar-item" href="/Project!/logout.php">
                    Logout
                  </a>
                  <span class="navbar-item">
                    <a class="button" href="https://github.com/bobishgr8/A-north-korean-bank">
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
            <a href="/Project!/applyLoan.php">Apply for loan by Kimmy</a>
          </li>
          <li>
            <a href="/Project!/repayloan.php">Pay bills to Kimmy</a>
          </li>
          <li>
            <a href="/Project!/feedback.php">Talk to VERY FRIENDLY support</a>
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
      <p class="title"><?php echo "$total_balance"?>₩</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading is-warning">Outstanding loans</p>
      <p class="title is-warning"><?php echo "$outstanding"?>₩</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Balance</p>
      <p class="title"><?php echo "{$balance}"?>₩</p>
    </div>
  </div>
  <div class="level-item has-text-centered">
    <div>
      <p class="heading">Transaction count</p>
      <p class="title"><?php echo "$total_transactions"?></p>
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
        <p class="subtitle">Balance: <?php echo "$total_balance"?>₩ </p>
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
                <th>Transaction ID</th>
            </tr>
            <?php
              $user = new UserDAO;
              $transactions = $user->recentTransactions($_SESSION["bankBoi"]);
              foreach($transactions as $transaction){
                $data = $transaction->format_transactions();
                if($data[0] == "Deposit"){
                  echo "<tr style='background-color: #A8FFD9'>";
                  echo "<td><strong>{$data[0]}</strong></td>";
                  echo "<td>{$data[1]}</td>";
                  echo "<td>{$data[2]}</td>";
                echo "</tr>";
                }else{
                  echo "<tr style='background-color: #F59794'>";
                  echo "<td><strong>{$data[0]}</strong></td>";
                  echo "<td>{$data[1]}</td>";
                  echo "<td>{$data[2]}</td>";
                  echo "</tr>";
                }
              }
              // var_dump($transactions);
            ?>
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
      <a href="/Project!/deposit_money.php">
        <span class="icon"></span>
        <span>Deposit Money</span>
      </a>
    </li>
    <li>
      <a href="/Project!/withdrawl_money.php">
        <span class="icon"></span>
        <span>Withdrawal Money</span>
      </a>
    </li>
    <li>
      <a href="/Project!/transfer_money.php">
        <span class="icon"></span>
        <span>Transfer Money</span>
      </a>
    </li>
    <li>
      <a href="/Project!/edit_password.php">
        <span class="icon"></span>
        <span>Edit password</span>
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
