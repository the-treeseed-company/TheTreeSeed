<!DOCTYPE html>
    <html>
        <head>
            <title>Tree Seed</title>

            <!-- Defining the view port -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Javascript links -->
                <!-- The main Javascript file -->
                    <script type="text/javascript" src="Home Page.js"></script>

            <!-- CSS links -->
                <!-- The main CSS file -->
                    <link rel = "stylesheet" type = "text/css" href = "Home Page.css" />

                <!-- Font awesome icons -->
                    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

                <!-- Google api icons -->
                    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <!-- Boostrap links -->
                <!-- Latest compiled and minified CSS -->
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

                <!-- jQuery library -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

                <!-- Popper JS -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

                <!-- Latest compiled JavaScript -->
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            
            <!-- Page Spesific CSS -->
                <style>

                    /* styling for the background image of the page */
                    /*__________________________________________________________________________________________________________________________________________________________________________*/
                    .Background{
                        background-image: url("https://images.unsplash.com/photo-1515165616480-efd71925068f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80");
                        position: fixed; 
                        background-repeat:no-repeat;
                        background-size:cover;
                        width: 100%; 
                        height: 100%;
                    }
                    /*__________________________________________________________________________________________________________________________________________________________________________*/
                    
                    /*Changes the cursor to a pointer when you hover over objects*/
                    /*__________________________________________________________________________________________________________________________________________________________________________*/
                    .ChangePointer:hover{
                        cursor: pointer;
                    }
                    /*__________________________________________________________________________________________________________________________________________________________________________*/
                </style>

            <!-- Before rendering: Javascript -->
                <script>

                </script>
        </head>
        <body>
            <div class="container-fluid" style="padding-left:0px;padding-right:0px;">
                <nav class="navbar navbar-expand-sm" style="border-top:3px solid black;border-bottom:3px solid black">
                    <!-- Brand/logo -->
                    <a class="navbar-brand" href="#">
                        <img src="https://cdn.shopify.com/s/files/1/1438/7872/products/topic-tree-cover_grande.jpg?v=1477857286" alt="logo" style="width:40px;">
                    </a>

                    <!-- right side links -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link ChangePointer" data-toggle="modal" data-target="#ModalSignIn">
                                <i class="fas fa-sign-in-alt" style="font-size:100%;color:black;"></i>
                                <font style="color:black;">Sign in</font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ChangePointer" data-toggle="modal" data-target="#ModalSignUp">
                                <i class="fas fa-user-plus" style="font-size:100%;color:black;"></i>
                                <font style="color:black;">Sign up</font>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!--<div id="background">-->
                    <!--<img src="https://media.gettyimages.com/photos/media-and-magazine-news-stand-picture-id458286111?s=2048x2048" alt="Please check your internet connection!">-->
                    <!--<img src="https://images.unsplash.com/photo-1516179257071-71a54dbb4853?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Please check your internet connection!">-->
                    <!--<img src="https://images.unsplash.com/photo-1515165616480-efd71925068f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="Please check your internet connection!">-->
                <!--</div>-->
                <div class="Background">
                dsad
                </div>

                <!-- Modals -->
                    <!-- Sign up modal -->
                        <div class="modal" id="ModalSignUp">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                    <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" style="border:1px solid black">xs</div>
                                                <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9" style="border:1px solid black">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="border:1px solid black">
                                                            <b><font style="font-size:140%;">Get started with a free account</font></b>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="border:1px solid black">
                                                        </div>
                                                        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8" style="border:1px solid black">
                                                            <font style="font-size:85%;">Join the world wide conversation</font>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="border:1px solid black">
                                                            <div style="line-height:80%;">
                                                                <font style="font-size:65%">By having a TreeSeed account, you can engage in conversations about all your most desired topics</font>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="border:1px solid black">
                                                            <form action="/action_page.php" class="needs-validation" novalidate>
                                                                <div class="form-group">
                                                                    <label for="uname">Email:</label>
                                                                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                                                                    <div class="valid-feedback">Valid.</div>
                                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pwd">Password:</label>
                                                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                                                                    <div class="valid-feedback">Valid.</div>
                                                                    <div class="invalid-feedback">Please fill out this field.</div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5" style="border:1px solid black;">
                                                                        <button type="submit" class="btn btn-primary">Get Started</button>
                                                                    </div>
                                                                    <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7" style="border:1px solid black;padding-left:0;padding-right:0;">
                                                                       <font style="font-size:60%;">by clicking the button you agree to TheeSeed's</font> <br> 
                                                                        <a class="ChangePointer" data-toggle="modal" data-target="#ModalTerms"><b><font style="font-size:80%;">Anti-spam policy & Terms of use</font></b></a>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                
                                </div>
                            </div>
                        </div>

                    <!-- Sign in modal -->
                        <div class="modal" id="ModalSignIn">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                    <!-- Modal body -->
                                        <div class="modal-body">
                                            Modal body..
                                        </div>
                                
                                </div>
                            </div>
                        </div>

                        <!-- Anti-spam & Terms of use modal -->
                        <div class="modal" id="ModalTerms" style="height:70%;overflow-y:hidden;">
                            <div class="modal-dialog" style="height:100%;">
                                <div class="modal-content" style="height:100%;">
                                
                                    <!-- Modal Header -->
                                        <div class="modal-header" style="height:12%;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                    <!-- Modal body -->
                                        <div class="modal-body" style="height:88%;padding-top:0 !important;">
                                            <div class="row" style="height:100%;">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background-color:purple;width:100%;height:100%;overflow-y:auto !important;">
                                                                       
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
            </div>

            <!-- After redering: Javascript -->
                <script>

                </script>
        </body>
    </html>