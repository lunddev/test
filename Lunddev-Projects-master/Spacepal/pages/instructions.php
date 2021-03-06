<!DOCTYPE html>
<html>
    <head>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Instructions</title>
       
        <link href="../css/bootstrap.min.1.css" rel="stylesheet">
        <link href="../css/custom.css" rel="stylesheet">
        <script src="../js/init.js"></script>
    </head>
    
    
<body>
<div class="container-fluid">
<!-- Row 1: Navigation -->

    <div class ="row">
<nav class="navbar-default navbar-fixed-top" role="navigation">
  <a class="navbar-brand" href="../index.php"><img src="../images/logo.png" alt="Spacepal" style="width:150px;height:38px;border:0"></a>
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>    
  </div>
  <div class= "navbar-collapse collapse">
  
    <ul class="nav navbar-nav">
        <li><a href="search.php" id="topLinks"><span class="glyphicon glyphicon-search col-sm-12 hidden-xs" id="topLinkGlyph"></span>Sök förråd</a></li>
        <li><a href="instructions.php" id="topLinks"><span class="glyphicon glyphicon-question-sign col-sm-12 hidden-xs"id="topLinkGlyph"></span>Hur funkar det?</a></li>
        <li><a href="about.php" id="topLinks"><span class="glyphicon glyphicon-home col-sm-12 hidden-xs"id="topLinkGlyph"></span>Om Oss</a></li>
        <li><a href="terms.php" id="topLinks"><span class="glyphicon glyphicon-info-sign col-sm-12 hidden-xs"id="topLinkGlyph"></span>Vilkor</a></li>
        <li class="visible-xs"><a href="#about" id="topLinks">Logga in</a></li>
    </ul>
    
  
     <button type="submit" class="btn btn-primary navbar-right hidden-xs" id="loginButton" data-toggle="modal" data-target="#myModal">Logga in</button>






    
  </div>
   
</nav>

    
</div>
    
    
<!-- Row 2: Signup Sheet  Move to php file to include later...-->
    
    
                    <div class="modal fade" id="myModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Logga in</h4>
                          </div>
                          
                          <div class="modal-body">
                            <form role="form">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Användarnamn/E-Mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Användarnamn">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Lösenord</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Lösenord">
                              </div>
                              <div class="form-group">

                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Kom ihåg mig
                                </label>
                              </div>
                              </div>
                            </form>
                          </div>
                          
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Avbryt</button>
                            <button type="button" class="btn btn-primary">Logga in</button>
                          </div>
                    </div>
                  </div>
                </div>
    


    
    <div class ="row">
       <div id="informationSection">
           <div id="informationHeadline">
              <h1>Såhär fungerar Spacepal</h1>
           <h4>Se filmen nedan...</h4>

           </div>
  
              <div id="informationContainer">
              
                  
      
                <div class="col-lg-6 col-md-6 col-sm-12"> 
                        <div class="informationBox">
                            <div class="information">
                            <h3>Någon vill hyra ut ledigt utrymme (t.ex. på vinden eller i garaget)<h3>
                            <span class="glyphicon glyphicon-bullhorn" style="font-size:50px; color:blue; margin-top:-15px;"></span></br>
                            <p>Lägg upp ditt utrymme gratis på Spacepal. Ange information inklusive pris och ladda upp en bild
                          <p>
                            </div>  
                        </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12"> 
                        <div class="informationBox">
                            <div class="information">
                            <h3>Någon vill hyra ledigt utrymme (t.ex. ett utrymme för förvaring av vindsurfingprylar)<h3>
                            <span class="glyphicon glyphicon-search" style="font-size:50px; color:green; margin-top:-15px;"></span></br>
                            <p>Ange ditt postnummer och hitta ledigt utrymme i din närhet

                            <p>
                            </div>  
                        </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12"> 
                        <div class="informationBox">
                            <div class="information">
                            <h3>Kommunicera<h3>
                            <span class="glyphicon glyphicon-transfer" style="font-size:50px; color:orange; margin-top:-15px;"></span></br>
                            <p>Ställ eventuella frågor. Inga kontaktdetaljer utbyts förrän bokningen är gjord
                            <p>
                            </div>  
                        </div>
                </div>
                  
                <div class="col-lg-4 col-md-4 col-sm-12"> 
                        <div class="informationBox">
                            <div class="information">
                            <h3>Boka<h3>
                            <span class="glyphicon glyphicon-transfer" style="font-size:50px; color:orange; margin-top:-15px;"></span></br>
                            <p>Hyraren har hittat ett lagom stort förråd i närheten och uthyraren en hyrare med bra rejtings och parterna vill ingå ett hyresavtal med varandra. Uthyraren har 48h på sig att acceptera en hyresförfrågan. Betalning sker säkert via Spacepal för båda parters trygghet och bekvämlighet
                            <p>
                            </div>  
                        </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12"> 
                        <div class="informationBox">
                            <div class="information">
                            <h3>Förvara<h3>
                            <span class="glyphicon glyphicon-transfer" style="font-size:50px; color:orange; margin-top:-15px;"></span></br>
                            <p>Förvara prylarna under den avtalade tiden, eller längre! Efter hyresperioden betygsätter uthyrare och hyrare varandra<p>
                            </div>  
                        </div>
                </div>

                    </div>
       
       </div>
    
    </div>
 
 
 

 
    
    
    <!-- Row 3: Footer-->
 
 
 <div class="row">
        <div id="footSection">
   
                <div class="col-lg-4"> 
                        <div class="informationBox">
                            <div class="information">
                            <h3>Footer1<h3>
                            <p>länkar

                            <p>
                            </div>  
                        </div>
                </div>
                
                <div class="col-lg-4 visible-lg"> 
                        <div class="informationBox">
                            <div class="information">
                            <h3>Footer 2<h3>
                            <p>länkar

                            <p>
                            </div>  
                        </div>
                </div>
                  
                <div class="col-lg-4 visible-lg"> 
                        <div class="informationBox">
                            <div class="information">
                            <h3>Footer 3<h3>
                            <p>länkar

                            <p>
                            </div>  
                        </div>
                </div>
        
        
        
        
        
    
       </div>
 </div>
 
 
 </div>
 
 
<!-- Javascript -->
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    </body>
        
</html>
