<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Spacepal</title>
       
        <link href="css/bootstrap.min.1.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <script src="js/init.js"></script>
    </head>
    
    <body>
    <div class="container-fluid">
<!-- Row 1: Navigation -->

        <div class ="row">
            <nav class="navbar-default navbar-fixed-top" role="navigation">
                  <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Spacepal" style="width:150px;height:38px;border:0"></a>
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>    
                  </div>
                  <div class= "navbar-collapse collapse">
                  
                    <ul class="nav navbar-nav">
                        <li><a href="" data-toggle="modal" data-target="#new_user" id="topLinks">bli medlem</a></li>
                        <li><a href="pages/instructions.php" id="topLinks">logga in</a></li>
                        <li><a href="pages/about.php" id="topLinks"></span>om Spacepal</a></li>
                        <li class="visible-xs"><a href="#about" id="topLinks">Logga in</a></li>
                        <button type="submit" class="btn btn-primary navbar-right hidden-xs" id="loginButton" data-toggle="modal" data-target="#login">Logga in</button>
                
                    </ul>
    
              </div>
               
            </nav>
    
        
        </div>
        
        <!-- Row 2: Signup Sheet  Move to php file to include later...-->
    
    
                    <div class="modal fade" id="login" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Logga in</h4>
                          </div>
                          
                          <div class="modal-body">
                            
                               <form action="login.php" method="post">
                                <p>E-mail:
                                   <input type="text" class="form-control" name="email" value=""/>
                                </p>
                                <p>Lösenord:
                               <input type="text" name="password" class="form-control" value=""/>
                               </p>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Avbryt</button>
                                <input type="submit" name="submit" class="btn btn-default" value="Logga in"/>
                               </form>
                            
                          </div>
                          

                    </div>
                  </div>
                </div>
                
                
                
                
                <!-- Row 2: Signup Sheet  Move to php file to include later...-->
    
    
                    <div class="modal fade" id="new_user" tabindex="-2" role="dialog" aria-labelledby="newUserLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="newUserLabel">Skapa Konto</h4>
                          </div>
                          
                          <div class="modal-body">
                            
                               <form action="create_user.php" method="post">
                                
                                
                                              
                               <p>Förnamn:
                               <input type="text" class="form-control" name="first_name" value=""/>
                               </p>
                                <p>Efternamn:
                               <input type="text" class="form-control" name="last_name" value=""/>
                               </p>
                                <p>E-mail:
                                   <input type="text" class="form-control" name="email" value=""/>
                                </p>
                                <p>Lösenord:
                               <input type="text" name="password" class="form-control" value=""/>
                               </p>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Avbryt</button>
                                <input type="submit" name="submit" class="btn btn-default" value="Skapa Konto"/>
                               </form>
                            
                          </div>
                          

                    </div>
                  </div>
                </div>        
        
        
    <div class ="row">
       <div id="searchResults" data-speed="6" data-type="background">
       <h1>Sökresultat</h1>   
       <?php echo navigation($current_user, $current_ad); ?>
       
       </div>
    
    </div>
        
        
        
        
        
    </div>   
      <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
