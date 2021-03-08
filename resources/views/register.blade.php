<!Doctype html>
<html>
    <head>
         <!-- Title -->
         <title>Print Craft</title>
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">

        
    </head>
    <body>
        <div class="container-fluid">
            <div class="scetion-title text-center">
                <h2>Register</h2>
                <p>
                    It is a long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout.
                </p>
            </div>
            <div class="col-sm-8 contact-wrap-form" style="margin-left:200px;">
                <form action="/register/user" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control" required data-error="Please enter your password">
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-lg btn-primary" value="Register">
                    </div>
                    <div class="text-center">
                        <p>
                            If you have already registered ? <a href="/login">login</a>
                        </p>
                    </div>
                </form>
            </div>
            
        </div>
    </body>
</html>