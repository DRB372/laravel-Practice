<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./fb.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="{{ URL::to('css/FB.css')}}"> 
    </head>
    <body>
        <div class="header">
            <h1 class="logo">Facebook</h1>
            <div class="login-info">
                <div class="login-email">
                    <h6 class="login-text">Email or Phone</h6>
                    <input type="text" name="text">
               </div>
                 <div>
                    <h6 class="login-text">Password</h6>
                    <input type="password" name="password">
                    
                </div>
                <div>
                    <button type="button" id="login-button">login</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-s-6 left-column">
                <h5>Facebook helps you connect and share with the people in your life.</h5>
                <img src="{{ asset('images/fb.jpg') }}
" alt="fb.jpg">
            </div>

            <div class="right-column">
                <h2>Create an account</h2>
                <h5>Its free and always be.</h5>
                <div class="register-name">
                    <input type="text" name="fname" placeholder="First Name">
                    <input type="text" name="lname" placeholder="Last Name">
                </div>
                <div class="r-email">
                    <input type="text" name="email" placeholder="Mobile No or email address" size="46">
                </div>
                <div class="r-password">
                    <input type="password" name="password" placeholder="New Password" size="46">
                </div>
                <div class="r-password">
                    <input type="password" name="password" placeholder="Verify new Password" size="46">
                </div>
                <div class="r-birthday">
                    <h5>Birthday</h5>
                    <div>
                        <input type="date" name="birthday">
                    </div>
                </div>
                <div class="gender">
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                </div>
                <div class="signup-button">
                    <button type="button" id="signup-button">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>This is only for my practice work to study php framework and all content I copied Facebook © 2018</p>
        </div>
    </body>
</html>