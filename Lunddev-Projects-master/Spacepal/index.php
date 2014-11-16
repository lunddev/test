<!DOCTYPE html>
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
        <li><a href="pages/search.php" id="topLinks">bli medlem</a></li>
        <li><a href="pages/instructions.php" id="topLinks">logga in</a></li>
        <li><a href="pages/about.php" id="topLinks"></span>om Spacepal</a></li>
        <li class="visible-xs"><a href="#about" id="topLinks">Logga in</a></li>
        <button type="submit" class="btn btn-primary navbar-right hidden-xs" id="loginButton" data-toggle="modal" data-target="#myModal">Skapa annon</button>

    </ul>
    
  






    
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
    

<!-- Row 2: Section 1 -->
    
    <div class ="row">
       <div id="searchSection" data-speed="6" data-type="background">
           <div id="searchFrame">
           <h1>Hyr utrymme i din närhet. Enklare, närmare, billigare</h1>
           <h3>Förråd/Lager - Parkering - Uppställning av båt/husvagn - Arbetsyta/Kontorsplats - Stallplats</h3>
           <h4>Använd sökfönstret och markera dina behov nedan så matchar vi dig med personer och företag i din närhet som har utrymme ledigt</h4>
               <div id="searchBox">
                         <div class="input-group">
                          <input type="text" class="form-control" id="searchForm" placeholder="Sök på Postnr, Adress eller Stad">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" id="searchButton" type="button">Sök</button>
                          </span>
                        </div>
               </div>
           </div>
       
       
       </div>
    
    </div>

    <!-- Row 3: Section 2 -->
    
    <div class ="row">
       <div id="informationSection">
           <div id="informationHeadline">
              <h1>Vad är Spacepal?</h1>

           <h4>Spacepal är en marknadsplats som för samman privatpersoner och företag som har ledigt utrymme att hyra ut eller är i behov av att hyra utrymme (t.ex. för sin bil, båt eller slalomskidor)</h4>

            </div>
  
              <div id="informationContainer">
              
                  
      
                <div class="col-lg-3 col-md-6 col-sm-6 hidden-xs"> 
                        <div class="informationBox">
                            <div class="information">
                            <h2>Enkelt<h2>
                              <p>Lägg upp eller hitta ledigt utrymme i din närhet med några klick

                          <p>
                            </div>  
                        </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6 hidden-xs"> 
                        <div class="informationBox">
                            <div class="information">
                            <h2>Smart<h2>
                            <p>Spara och tjäna pengar på utrymme och nyttja befintligt utrymme i samhället mer effektivt

                            <p>
                            </div>  
                        </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6 hidden-xs"> 
                        <div class="informationBox">
                            <div class="information">
                            <h2>Nära<h2>
                                <p>Spara tid och ge miljön en kram genom att minska avståndet till dina förvaringsplatser
                            <p>
                            </div>  
                        </div>
                </div>
                  
                <div class="col-lg-3 col-md-6 col-sm-6 hidden-xs"> 
                        <div class="informationBox">
                            <div class="information">
                            <h2>Säkert<h2>
                                  <p>Din ägodelar är försäkrade, betalning sker via Spacepal och alla användare är kontrollerade
                            <p>
                            </div>  
                        </div>
                </div>

                    </div>
       
       </div>
    
    </div>
 
 
 

 
    <!-- Row 3: Karta och hur du hyr ut-->
 
 
     <div class ="row">
       <div id="mapSection" data-speed="6" data-type="background">
       <div class="hidden-xs" id="mapInfoBoxPadding"></div>
       <div id="mapInfoBox">
       <h1>Hyr ut ditt tomma förråd</h1></br>
       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
       sed diam nonummy nibh euismod tincidunt ut laoreet dolore
       magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
       quis nostrud exerci tation ullamcorper suscipit lobortis nisl
       ut al ed diam nonummy nibh euismod tincidunt ut laoreet dolore
       magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
       quis nostrud exerci tation ullamcorper suscipit lobortis nisl
       ut al</p></br></br>
       
       <a class="bth btn-success btn-lg" href="pages/create.php">Lista Förråd</a>
   
       
       </div>

   </div>
    </div>
    
    
        <!-- Row 3: Success Stories-->
 
 
     <div class ="row">
       <div id="successSection">
           <h1>Vad säger våra användare?</h1>
       
            <div id="customerContainer">
              
                  
      
                <div class="col-lg-4 col-md-12 col-sm-12 hidden-xs"> 
                        <div class="customerBox">
                        <p>”Innan jag fick upp ögonen för Spacepal hade tanken inte slagit mig att jag kunde tjäna lätta pengar på allt mitt outnyttjade utrymme. Gästrummet har nu blivit ett förråd för en granne som har många hobbys och lite för mycket av allt” <p>
                        <h5>-Uthyrare</h5>
                        </div>
                </div>
                
                <div class="col-lg-4 col-md-12 col-sm-12 hidden-xs"> 
                        <div class="customerBox">
                        <p>”Som student har jag inte så mycket prylar och varje hundralapp gör skillnad. För mig är det därför perfekt att hyra ut mitt källarförråd istället för att använda det själv”
                        <p>
                        <h5>-Uthyrare</h5>
             
                        </div>
                </div>
                
                <div class="col-lg-4 col-md-12 col-sm-12 hidden-xs"> 
                        <div class="customerBox">
                         <p>”Jag hittade snabbt en parkeringsplats i ett garage i närheten tack vara Spacepal”<p>
                         <h5>-Hyrare</h5> 
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
    <script src="js/bootstrap.min.js"></script>
    </body>
        
</html>


