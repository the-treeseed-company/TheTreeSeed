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
                        /*top: -20.5%; 
                        left: -50%; */
                        width: 100%; 
                        height: 100%;
                    }
                    /*__________________________________________________________________________________________________________________________________________________________________________*/
                    
                    /*Changes the curosor when you hover over the Sign in and Sign up text*/
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
                                            Modal body..
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
            </div>

            <!-- After redering: Javascript -->
                <script>

                </script>
        </body>
    </html>