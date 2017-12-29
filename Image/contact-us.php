<?php include("header.html"); ?>
<style>
      #map_canvas {
        width: 450px;
        height: 220px;
      }
    </style>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(19.887817,75.36345),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<!-- end #header -->
<div id="page">
	<div id="content">
		<!--div class="post">
			<h1 class="title">Welcome to Aquaria!</h1>
			<div class="story">
				<p><strong>Aquaria</strong> is a free template from <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> released under a <a href="http://creativecommons.org/licenses/by/2.5/">Creative Commons Attribution 2.5 License</a>. The  photo is from <a href="http://www.pdphoto.org/">PDPhoto.org</a>. You're free to use it for both commercial or personal use. I only ask that you link back to my site in some way. <em><strong>Enjoy :)</strong></em></p>
			</div>
			<div class="meta">
				<p class="date">Posted on February 22, 2007 by Admin</p>
				<p class="file">Filed under <a href="#">Uncategorized</a> | <a href="#">Edit</a> | <a href="#">28 Comments</a></p>
			</div>
		</div-->
		<div class="post boxed">
			<h2 class="title">Contact-Us</h2>
			<div class="story">
				<p><strong></strong>Image Neon and Glow Signs are always happy to hear our customer, you can reach us at-.</p>

				<h3>Image Neon & Glow Signs</h3>
				<p>1253,N-6,Sai Nagar,<br>Opposite N-5 Shopping Center<br>CIDCO, Aurangabad-431 003,<br><br>
				<strong>Phone:</strong>(0240)-2488610,<br> <strong>Mobile:</strong> +91 9422201467<br><strong>Email:</strong>imageneonage@rediffmail.com
								</p>
<div id="">
<img alt='Image Neon & Glow Signs' src=' images/map.jpg' width='450px' height='220px'  border='0' />
</div>
			</div>
			<div class="meta">
			</div>
		</div>
	</div>
	<!-- end #content -->
	<?php include("leftmenu.html"); ?>
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #page -->
	<?php include("footer.html"); ?>
