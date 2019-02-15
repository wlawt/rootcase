<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/website/style.css">
    <link rel="shortcut icon" href="/img/icon.png" type="image/png">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="~/Scripts/handlebars-v2.0.0.js"></script>
    

    <title>RootCase</title>
  </head>
  <body>
    <!--Modal-->      
    <div class="modal hide fade" id="newsletter" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Subscribe to our monthly newsletter!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Full Name:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Email Address:</label>
                        <textarea class="form-control" id="email-name"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Subscribe!</button>
                </div>
            </div>
        </div>
    </div>

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
            <li class="nav-item active">
              <a class="nav-link" href="/website/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/website/feature/feature.html">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Store</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/website/contact/contact.html">Contact</a>
            </li> 
          </ul>
       
        </div>
    </nav>

    <!--Landing page
    <div class="jumbotron background fade">
        <div class="text-left jumboText">
            <h2 id="header-spacing" class="display-4">The case that doesn't pollute our space.</h2>
            <p class="lead">Thinking how to give back this new year?</p>
            <p class="my-4">Help the environment with a RootCase!</p>           
            <a class="btn btn-primary btn-lg" href="/wp-content/themes/rootcase/registration/register.php" target="_blank" role="button"><span class="display-5">Get Started</span></a>
        </div>
      </div>
      -->
        <div class="jumbotron jumbotron-fluid background fade">
            <div class="container">
                <h2 id="header-spacing" class="display-4">RootCase</h2>
                <p class="lead">The case that doesn't pollute our space.</p>          
                <a class="btn btn-primary btn-lg" href="/website/feature/feature.html" target="_blank" role="button"><span class="display-5">Get Started</span></a>
            </div>
        </div>
    <hr width="50%" class="hideElement">

    <!--Info-->
    <div class="container">
        <div id="info1" class="fade">
            <div class="card">
                <div class="media">
                    <div class="media-body">
                        <div id="para1" class="text-left">
                            <h4 class="card-title"><b>Help reduce your carbon footprint today!</b></h4>
                            <p class="card-text paragraph">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
                                sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                            </p>
                        </div>
                    </div>
                    <div class="media-right">
                        <img class="picture" src="/img/recycle.png">
                    </div>
                </div>
            </div>
        </div>
    
        <div id="info2" class="hideElement">
            <div class="card">
                <div class="media">
                    <div class="media-left">
                        <img id="leftImg" class="picture" src="/img/ecofriendly.png">
                    </div>
                    <div class="media-body">
                        <div id="para2" class="text-right">
                            <h4><b>Made completely from eco-friendly resources</b></h4>
                            <p class="card-text paragraph">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
                                sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="info1" class="hideElement">
            <div class="card">
                <div class="media">
                    <div class="media-body">
                        <div id="para3" class="text-left">
                            <h4 class="card-title"><b>In partnership with Charity101</b></h4>
                            <p class="card-text paragraph">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
                                sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                            </p>
                        </div>
                    </div>
                    <div class="media-right">
                        <img class="picture" src="/img/charity.png"> 
                    </div>
                </div>
            </div>
        </div>

        <!--Contact-->
        <hr width="75%">
        <div id="contact" class="text-center fade-right">
            <div class="d-flex justify-content-between">
                <div class="p-1"></div>
                <div class="p-1">
                    <h1>Got questions?</h1>
                    <p class="paragraph">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque <br>laudantium, 
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae <br>vitae dicta 
                        sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit
                    </p>
                    <a href="/website/contact/contact.php">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" >Contact Us</button>
                    </a>
                </div>
                <div class="p-1"></div>
            </div>
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


    <!--JS-->
    <script src="/website/index.js"></script>
  </body>
</html>