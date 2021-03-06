<!DOCTYPE html>
<html lang='en'>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1', user-scalable=no'>
<link href='/css/bootstrap.min.css' rel='stylesheet'>
<script src="/js/jquery-2.1.1.min.js"></script>
<script src='/js/bootstrap.min.js'></script>
</head>

<style>

.navbar-default {
    background-color: #444;
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

.navbar .nav > li > a{
  text-shadow: #333 0.8em 0.8em 0.8em;
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

}	
#wrapper {
  padding-left: 250px;
  transition: all 0.4s ease 0s;
}

#sidebar-wrapper {
  margin-left: -250px;
  margin-top: -30px;
  left: 250px;
  width: 250px;
  background: #999;
  position: fixed;
  height: 100%;
  overflow-y: auto;
  z-index: 1000;
  transition: all 0.4s ease 0s;
}

#page-content-wrapper {
  width: 100%;
}

.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  list-style: none;
  margin-left: 10px;
  margin-top: 10px;
  padding: 0;
}

.pols {
	background: #fff;
	box-shadow: 10px 10px 5px #888888;
	border: 2px solid;
    border-radius: 25px;
    padding: 10px;
    width: 200px;
    text-align: center;
	}

@media (max-width:767px) {

    #wrapper {
      padding-left: 0;
    }

    #sidebar-wrapper {
      left: 0;
    }

    #wrapper.active {
      position: relative;
      left: 250px;
    }

    #wrapper.active #sidebar-wrapper {
      left: 250px;
      width: 250px;
      transition: all 0.4s ease 0s;
    }

}
</style>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
   	<div class="navbar-header">
      	<a class="navbar-brand" href="/"><div id="test"><p style="font-size:35px; color:white; position: absolute; left:10px"><strong>bythepeoples</strong></p></div></a>
     	</div>
     	<div class="navbar-collapse collapse">
       	<ul class="nav navbar-nav navbar-right" style="position:absolute; right:50px;">
       			<li><a href="{{ URL::route('users.show') }}"><strong><div id="test">profile</div></strong></a></li>
        	 	<li><a href="/users/create" ><strong><div id="test">sign up</div></strong></a></li>
        	 	<li><a href="/login"><strong>login</strong></a></li>
         	<li><a href="{{URL::to('signout')}}"><strong>sign out</strong></a></li>
       	</ul>
     	</div><!--/.nav-collapse -->
	</div><!--/.container -->
</nav>

       @yield('content')
       
    </body>
</html>
