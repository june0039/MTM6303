<footer id="colophon" class="site-footer">
		<div class="inside">

            <div id="leftLogo">
                <i class="icon-algonquin ac-logo-inverted"></i>
            </div>
          
            <div id="logoRight">
                                            </div>
            
		    <div id="schools">

				<address>
					<strong>Ottawa</strong><br>
					1385 Woodroffe Avenue<br>
					Ottawa, Ontario K2G 1V8<br>
					<a href="tel:6137274723">613-727-4723</a>
				</address>

				<address>
					<strong>Pembroke</strong><br>
					1 College Way<br>
					Pembroke, Ontario K8A 0C8<br>
					<a href="tel:6137354700">613-735-4700</a>
				</address>

				<address>
					<strong>Perth</strong><br>
					7 Craig Street<br>
					Perth, Ontario K7H 1X7<br>
					<a href="tel:6132672859">613-267-2859</a>
				</address>

			</div>

			<ul class="copyright horizontalList">
				<li>©<?php echo date('Y'); ?> Algonquin College of Applied Arts and Technology</li>
                <li><a href="/acmarketing/website-feedback/" class="leftEdgeOfList">Website Feedback </a>&nbsp;&nbsp;</li>
               <li>&nbsp;&nbsp; <a href="/policies/privacy/">Privacy Statement</a></li>
			</ul>
		</div>
	</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
  <!-- Body Tag End -->
</html> 

<?php
// set the default timezone to use.
date_default_timezone_set('UTC');


// Prints something like: Monday
echo date("l") . "<br>";

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A') . "<br>";;

// Prints: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)) . "<br>";;

/* use the constants in the format parameter */
// prints something like: Wed, 25 Sep 2013 15:28:57 -0700
echo date(DATE_RFC2822) . "<br>";;

// prints something like: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000) ) . "<br>";;


unset($_SESSION["current_page"]);
unset($_SESSION["page_title"]);

?>