<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/wp-content/themes/rootcase/index/style.css">
    <link rel="stylesheet" href="store.css">
    <link rel="shortcut icon" href="/wp-content/themes/rootcase/Pictures/icon.png" type="image/png">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>RootCase - Store</title>
  </head>
  <body>
    <!--Nav bar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-inverse">
        <a class="navbar-brand" href="/wp-content/themes/rootcase/index/index.php">
            <img id="logo" src="/wp-content/themes/rootcase/Pictures/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/wp-content/themes/rootcase/index/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/wp-content/themes/rootcase/index/feature/feature.html">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/wp-content/themes/rootcase/index/store/store.php">Store</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/wp-content/themes/rootcase/index/contact/contact.php">Contact</a>
            </li> 
            <li class="nav-item active">
                <a class="nav-link" href="cart.html">Cart</a>
            </li> 
          </ul>
        </div>
    </nav>

    <!--Landing page-->
    <div class="store text-center">
        <img class="store" src="/wp-content/themes/rootcase/Pictures/storepic.png" class="img-fluid" alt="Responsive image">
    </div>
    <hr width="50%">

    <!--Checkout form-->
    <body class="bg-light">

        <div class="container">
    
            <!--Cart Status-->
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>
            </div>

            <!--Form-->
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                            Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                            <div class="invalid-feedback">
                            Valid last name is required.
                            </div>
                        </div>
                    </div>
    
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>
    
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
    
                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>
    
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" id="country" required>
                            <option value="">Choose...</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Choose...</option>
                            <option>California</option>
                        </select>
                        <div class="invalid-feedback">
                           Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                </div>

                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                </div>
                <hr class="mb-4">
    
                <h4 class="mb-3">Payment</h4>
    
                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="credit">Credit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="debit">Debit card</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cc-name">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                            Name on card is required
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="cc-number">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                        <div class="invalid-feedback">
                            Credit card number is required
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                        <div class="invalid-feedback">
                            Expiration date required
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-expiration">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                        <div class="invalid-feedback">
                            Security code required
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
              </form>
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

        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- Load React. -->
    <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>


    <!--JS-->
    <script src="store.js"></script>
    <script src="/wp-content/themes/rootcase/index/index.js"></script>
  </body>
</html>