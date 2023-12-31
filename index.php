<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Tracking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Stock Track</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a>
            </li>
        </ul>
    </div>
</nav>

<div class="header text-center">
    <h1>Stock Tracks</h1>
    <p>Your one-stop destination for all things stock tracking</p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#contactModal">Contact Us</a>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Remove your worries</h2>
            <p>Keep track of all your stock in one place without the need for multiple pieces of software.</p>
            <br>
            <br>
            <img src="stock.jpg" alt="Stock">
        </div>
        <div class="col-md-4">
            <h2>Keep your staff and customers updated</h2>
            <p>Keep track of where your stock changes hands from employees to delivery drivers to their final destination.</p>
            
        </div>
        <div class="col-md-4">
            <h2>Keep only products that work</h2>
            <p>Show all your leading products with our automatically updating stock calculator.</p> 
        </div>
    </div>
</div>


<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactUsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>For inquiries, please contact us using the following information:</p>
                <p>Phone: <a href="tel:+1234567890">+1 (123) 456-7890</a></p>
                <p>Email: <a href="mailto:info@example.com">info@stocktrack.com</a></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Login form here -->
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value = "Log In">
                <button type="button" class="btn btn-info" id="showSignupForm">Switch to Sign Up</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Sign Up Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Sign-up form here -->
                <form action="signup.php" method ="POST">
                    <div class="form-group">
                        <label for="newUsername">Username</label>
                        <input type="text" class="form-control" name="newUsername" placeholder="Choose a username">
                    </div>
                    <div class="form-group">
                        <label for = "newPassword">Password</label>
                        <input type="password" class="form-control" name="newPassword" placeholder="Create a password">
                    </div>
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value = "Sign Up">
                <button type="button" class="btn btn-info" id="showLoginForm">Switch to Login</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Show the Sign Up modal when clicking "Switch to Sign Up"
        $('#showSignupForm').click(function() {
            $('#loginModal').modal('hide');
            $('#signupModal').modal('show');
        });

        // Show the Login modal when clicking "Switch to Login"
        $('#showLoginForm').click(function() {
            $('#signupModal').modal('hide');
            $('#loginModal').modal('show');
        });
    });
</script>
</body>
</html>
