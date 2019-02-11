<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/website/style.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="shortcut icon" href="/img/icon.png" type="image/png">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>RootCase - Contact Us</title>
  </head>
  <body>
    <!--Nav bar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-inverse">
        <a class="navbar-brand" href="/website/index.php">
            <img id="logo" src="/img/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/website/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/website/feature/feature.html">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/website/store/store.php">Store</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/website/contact/contact.php">Contact</a>
            </li> 
          </ul>
        </div>
    </nav>

    <!--Landing page-->
    <div class="jumbotron background fade bg-secondary">
        <div class="text-center jumboText">
            <h1 id="header-spacing"><span id="header-animation" class="display-4"></span></h1>
            <hr class="my-4">
            <p>We would love to hear back from the community!</p>        
        </div>
      </div>
    <hr width="50%" class="hideElement">

    <!--Contact Form-->
    <div class="container">
        <h1 class="text-center">Get in touch!</h1>
        
        <!--Incomplete form-->
        <div id="error"></div>

        <!--Form-->
        <form method="post" action="mail.php">
            <!-- Success message -->
            <div class="row">
                <div class="col-12">
                    <div class="contact__msg" style="display: none">
                        <p>Your message was sent successfully.</p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your response here." required></textarea>
            </div>
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LfaeI0UAAAAAJuga-XY18yBwGfY2jLSMAKpqvOj"></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <hr width="50%">

    <!--Sign Up/Login-->
    <div id="contact" class="text-center fade-right">
        <div class="d-flex justify-content-between">
            <div class="p-1"></div>
            <div class="p-1">
                <h1 class="pad">Don't have an account? Sign up today!</h1>
                <a href="/wp-content/themes/rootcase/register/register.php">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Sign Up</button>
                </a>
                <br><br>
                <a href="/wp-content/themes/rootcase/session/login.php">
                    Already have an account? Log In.
                </a>
            </div>
            <div class="p-1"></div>
        </div>
    </div>
 
    <!--Footer-->
    <div id="footer" class="text-center bg-light">
        <p class="footText">
            <h5><b>RootCase</b></h5>
            Junior Achievement CIBC
            <br>101 College Street, Toronto, ON, M5G 1L7
        </p>

        <div class="d-flex justify-content-between">
            <div class="p-1"></div>
            <div class="p-1">
                <a href="https://www.instagram.com/root.case/" class="center-block fa fa-instagram"></a>
                <a href="#" class="center-block fa fa-google"></a>
                <a href="#" class="center-block fa fa-youtube"></a>
            </div>
            <div class="p-1"></div>
        </div>  
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- Load React. -->
    <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

    <!-- Load Typed.js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>

    <!--JS-->
    <script src="contact.js"></script>
    <script src="/website/index.js"></script>
  </body>
</html>