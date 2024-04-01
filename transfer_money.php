<?php
require_once "condom.php";
require_once "loanAccountDAO.php";
echo "YOU LOGIN LEGALLY";

var_dump($_SESSION);
$status = "first_time";
var_dump($status);
if(array_key_exists("transfer",$_POST)){
    $temp = new loanAccountDAO();
    $status = $temp->transfer($_POST["ToUserID"],$_SESSION["bankBoi"],$_POST["amount"]);
    var_dump($status);      
}else{

}
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
                  <a class="navbar-item" href="/Project!/BUILD PAGE">
                    Pay bills to Kimmy
                  </a>
                  <a class="navbar-item" href="/Project!/feedback.php">
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
            <a href="/Project!/applyLoan.php">Apply for loan by Kimmy</a>
          </li>
          <li>
            <a href="/Project!/BUILD PAGE">Pay bills to Kimmy</a>
          </li>
          <li>
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
                    <?php
                    if($status === true){
                        echo ' <div class="notification is-success"><button class="delete"></button>
                        Transfer Successful.check your bro.
                        <strong>REMEMBER TO NOT USE THIS TO ENGAGE IN CAPITALIST ACTIVITIES.</strong>
                        <a href="/Project!/landing.php">click here to return</a></div>';
                    }elseif($status === "first_time"){
                        echo "";
                    }elseif($status === "NO MONEY NO HONEY"){
                      echo ' <div class="notification is-danger"><button class="delete"></button>
                      Withdrawal Unsuccessful. <strong>YOU DO NOT HAVE THIS MUCH MONEY!!</strong>
                      <a href="/Project!/landing.php">click here to return</a></div>';
                    }else{
                        echo ' <div class="notification is-danger"><button class="delete"></button>
                        Transfer Unsuccessful. The other userID might not exist
                        <a href="/Project!/landing.php">click here to return</a></div>';
                    }
                    ?>
                    <form action="./transfer_money.php" method="POST">
                      <br><br>
                      <p class="subtitle">Transfer fund to: (please enter their stateID)</p>
                        <div class="field">
                            <div class="control has-icons-left ">
                                <input name="ToUserID" class="input is-large" type="text" placeholder="e.g. KimJoungUn" required>
                                <span class="icon is-medium is-left"><i class="fa-solid fa-user"></i></span>
                            </div>
                        </div>
                        <br>
                      <p class="subtitle">Transfer fund amount:</p>
                        <div class="field">
                            <div class="control has-icons-left ">
                                <input name="amount" class="input is-large" type="number" placeholder="420.69" step=".01" min=0 required>
                                <span class="icon is-medium is-left"><i class="fa-solid fa-won-sign"></i></span>
                            </div>
                        </div>
                        <br>
                      <div class="field is-grouped is-grouped-centered">
                        <p class="control">
                            <input type="submit" value="Submit" name="transfer" class="button is-success">
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