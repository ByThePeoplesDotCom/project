<!DOCTYPE html>
<html lang='en'>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1', user-scalable=no'>
<link href='/css/bootstrap.min.css' rel='stylesheet'>
<script src="js/jquery-2.1.1.min.js"></script>
<script src='/js/bootstrap.min.js'></script>
</head>

<style>
.navbar-default {
    background-color: #58ACFA;
    border-color: #FFF;
}
h2{
    margin: 0;     
    color: #666;
    padding-top: 90px;
    font-size: 52px;
    font-family: "trebuchet ms", sans-serif;    
}
.item{
    background: #333;    
    text-align: center;
    height: 300px !important;
}
.carousel{
    margin-top: 20px;
}
.bs-example{
	margin: 20px;
}
.nav a, .navbar-brand{
	color: #fff!important;
	}
.row{
	margin-top:50px;
	}
html,
body {
  height: 100%;
  /* The html and body elements cannot have any padding or margin. */
}

/* Wrapper for page content to push down footer */
#wrap {
  min-height: 100%;
  height: auto !important;
  height: 100%;
  /* Negative indent footer by it's height */
  margin: 0 auto -60px;
}

/* Set the fixed height of the footer here */
#push,
#footer {
  height: 50px;
  
}
#footer {
  background-color: #f5f5f5;
   bottom: 0;
}

/* Lastly, apply responsive CSS fixes as necessary */
@media (max-width: 767px) {
  #footer {
    margin-left: -20px;
    margin-right: -20px;
    padding-left: 20px;
    padding-right: 20px;
  }
}	


      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
      }

      code {
        font-size: 80%;
      }


</style>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
   	<div class="navbar-header">
      	<a class="navbar-brand" href="/"><img src="/img/btp.png"></a>
     	</div>
     	<div class="navbar-collapse collapse">
       	<ul class="nav navbar-nav navbar-right">
         	<li><a href="/about"><strong>about</strong></a></li>
        	 	<li><a href="/users/create"><strong>sign up</strong></a></li>
         	<li><a href="/blog"><strong>blog</strong></a></li>
       	</ul>
     	</div><!--/.nav-collapse -->
	</div><!--/.container -->
</nav>

       @yield('content')
       
    </body>
</html>
