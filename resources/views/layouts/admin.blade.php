<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Smart Store Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="../js/jquery.min.js"></script>
<script src="../js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="header_top">
			<div class="logo">
				<a href="index.html"><img src="../images/logo.png" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
				    </form>
			    </div>
	    
			<div class="top-right links" id="login">
            @auth
                <form method="post" action="{{ route('logout')}}">
                	@csrf
                	<a href="{{ url('/home') }}">Home</a>
                	
                	<button type="submit">LogOut</button>
                </form>
				<br>
            @else
			<br>     
            @endauth
        </div>
		   
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
	<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="/home">HOME</a></li>

			<li><a href="{{ route('products.index') }}">Products</a>			
				<ul class="sub-menu list-unstyled sub-menu2">
				  <div class="navg-drop-main">
						<div class="nav-drop nav-top-brand"> 
							<li><a href="">Info Product</a></li>
							
						</div>								
					</div>
				</ul>
			</li>		
			<li><a href="faq.html">Categories</a>
				<ul class="sub-menu list-unstyled sub-menu2">
				  <div class="navg-drop-main">
					<div class="nav-drop"> 
						<li><a href="{{ route('categories.index')}}">Categories</a></li>
						<li><a href="products.html">Producers</a></li>
						
		
			</li>
					</div>
					<div class="clear"> </div>
				 </div>
			  </ul>
			</li>
			<li><a href="about.html">About</a></li>
			<li><a href="#">Delivery</a></li>
			<li><a href="faq.html">Faqs</a></li>
			<li><a href="contact.html">CONTACT</a></li>
			<div class="clear"> </div>
		</ul>
		</nav> 
		<script src="../js/menu.js" type="text/javascript"></script>
		</div>

		

 <div class="main">
    <div class="content">
    	
    	@yield('content')

    </div>
 </div>
</div>
   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Customer Service</a></li>
						<li><a href="#"><span>Advanced Search</span></a></li>
						<li><a href="#">Orders and Returns</a></li>
						<li><a href="#"><span>Contact Us</span></a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="faq.html">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="contact.html"><span>Site Map</span></a></li>
						<li><a href="preview-2.html"><span>Search Terms</span></a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="contact.html">Sign In</a></li>
							<li><a href="index.html">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="faq.html">Help</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact</h4>
						<ul>
							<li><span>+91-123-456789</span></li>
							<li><span>+00-123-000000</span></li>
						</ul>
						<div class="social-icons">
							<h4>Follow Us</h4>
					   		  <ul>
							      <li class="facebook"><a href="#" target="_blank"> </a></li>
							      <li class="twitter"><a href="#" target="_blank"> </a></li>
							      <li class="googleplus"><a href="#" target="_blank"> </a></li>
							      <li class="contact"><a href="#" target="_blank"> </a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			<div class="copy_right">
				<p>&copy; 2013 Smart Store. All Rights Reserved | Design by <a href="http://w3layouts.com">W3Layouts</a> </p>
		   </div>
     </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="../css/flexslider.css" rel='stylesheet' type='text/css' />
							  <script defer src="../js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
</body>
</html>

