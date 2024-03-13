<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="home.css">
  </head>
  <body>
    <section class="hero is-dark is-medium">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
          <header class="navbar">
            <div class="container">
              <div class="navbar-brand">
                <a class="navbar-item" href="/Project!/">
                  <img src="./Assets/Central_Bank_of_DPRK.svg.png" alt="Logo">
                </a>
                <span class="navbar-burger" data-target="navbarMenuHeroC">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </div>
              <div id="navbarMenuHeroC" class="navbar-menu">
                <div class="navbar-end">
                <a class="navbar-item" href="/Project!/">
                    Login 
                  </a>
                  <a class="navbar-item is-active" href="/Project!/signup.php">
                    Sign Up
                  </a>
                  <a class="navbar-item" href="/Project!/about.html">
                    About us
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
              Sign up
            </p>
            <p class="subtitle">
                조선민주주의인민공화국중앙은행
            </p>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="block">
            <div class="columns">
                <div class="column">
                </div>
                <div class="column">
                    <div class="container has-text-centered">
                        <p class="title">
                          Sign up with us comrade
                        </p>
                        <p class="subtitle">
                            Transfer your transactions with the state online!<br> Now with intranet support. 
                        </p>
                      </div>
                      <br>
                    <form action="attempt.php" method="POST">
                    <div class="field">
                        State Given ID:
                        <p class="control has-icons-left has-icons-right">
                          <input class="input" name="StateID" type="text" placeholder="StateID">
                          <span class="icon is-small is-left">
                            <i class="fas fa-person"></i>
                          </span>
                        </p>
                      </div>
                      <div class="field">
                        Set Password:
                        <p class="control has-icons-left">
                          <input class="input" name="password1" type="password" placeholder="Password">
                          <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                          </span>
                        </p>
                      </div>
                      <div class="field">
                        Repeat Password:
                        <p class="control has-icons-left">
                          <input class="input" name="password2" type="password">
                        </p>
                      </div>
                      <div class="field is-grouped is-grouped-centered">
                        <p class="control">
                            <input type="submit" value="SignUp" class="button is-success">
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