<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/magic-bootstrap-min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        
    </head>
    <body>
    
<!-- Row 1: Navigation -->
    <div class ="row">
<nav class="navbar-default navbar-fixed-top" role="navigation">
  <a class="navbar-brand" href="#" style="font-size: 20px; font-weight:bold;">ArcheAge Economy</a>
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>    
  </div>
  <div class= "navbar-collapse collapse">
  
    <ul class="nav navbar-nav">
        <li><a href="#" id="topLinks"><span class="glyphicon glyphicon-stats col-sm-12 hidden-xs" id="topLinkGlyph"></span>Market Statistics</a></li>
        <li><a href="#about" id="topLinks"><span class="glyphicon glyphicon-transfer col-sm-12 hidden-xs"id="topLinkGlyph"></span>Trade Routes</a></li>
        <li><a href="#" id="topLinks"><span class="glyphicon glyphicon-info-sign col-sm-12 hidden-xs"id="topLinkGlyph"></span>Research Center</a></li>
        <li class="visible-xs"><a href="#about" id="topLinks">Logga in</a></li>
    </ul>
    
  
     <button type="submit" class="btn btn-primary navbar-right hidden-xs" id="loginButton" data-toggle="modal" data-target="#myModal">Log in</button>
    
  </div>
</nav>
</div>



<!-- Row 2: Carousel -->
   
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/StockholmFlygfoto.jpg" alt="...">
          <div class="carousel-caption">
            <h4>Dayily updated statistics from the auction house in all ArcheAge servers</h>
            <button type="submit" class="btn btn-success btn-lg hidden-xs">Market Statistics</button>
          </div>
        </div>
        <div class="item">
          <img src="images/StockholmFlygfoto.jpg" alt="...">
          <div class="carousel-caption">
            <h4>Optimize your trade by calculating profitability of all available trade runs</h4>
            <button type="submit" class="btn btn-success btn-lg hidden-xs">Trade Route Calculator</button>
          </div>
        </div>
        <div class="item">
          <img src="images/StockholmFlygfoto.jpg" alt="...">
          <div class="carousel-caption">
            <h4>Read interesting articles with research about the important aspects of the economy</h4>
            <button type="submit" class="btn btn-success btn-lg hidden-xs">Get some knowledge</button>
          </div>
        </div>
        

      </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
    
    
    
    
    
    
    
    
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
