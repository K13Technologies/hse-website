<!doctype html>
<html class="no-js" lang="en">
  <?php include 'header.php'; ?>
  <body>

  <?php include 'nav.php'; ?>

  <section id="header" class="contact_header">

  </section>

  <section style="padding: 3em 2em;">
  <div class="row">
    <div class="large-12 columns">
        <h2>Contact Us</h2>
        <form id="unitsubmit" name="unitsubmit">
        <input type="text" placeholder="First Name *" id="first_name" name="first_name"></input>
        <input type="text" placeholder="Last Name *" id="last_name" name="last_name"></input>
        <input type="text" placeholder="Email Address *" id="email" name="email"></input>
        <input type="text" placeholder="Phone Number" id="phone" name="phone"></input>
        <input type="text" placeholder="Company *" id="company" name="company"></input>
        <select name="Primary Interest">
            <option value="" selected id="interest_default" name="interest_default">What is your primary interest?</option>
            <option value="Consulting Services" name="interest_consulting" id="interest_consulting">Consulting Services</option>
            <option value="Safety Software Integration" name="interest_software_integration" id="interest_software_integration">Safety Software Integration</option>
            <option value="White Knight And Data Scavenger Integration" name="interest_data_integration" id="interest_data_integration">White Knight &amp; Data Scavenger Integration</option>
            <option value="General" name="interest_general" id="interest_general">General</option>
        </select>
        <textarea placeholder="Your question" id="question" name="question" maxlength="1000" cols="25" rows="6"></textarea>
        <a href="#" class="button round" id="contact_submit">Submit</a>
        <div id="contact_response"></div>
        </form>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
        <h3>Mail</h3>
        <p>White Knight Safety Solutions Inc <br>734-7th Avenue SW. #540<br>Calgary, AB T2P 3P8</p>
    </div>
    <div class="large-6 columns">
        <h3>Phone</h3>
        <p style="text-align:center;">(403) 477-2318</p>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:100%;"><div id="gmap_canvas" style="height:500px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}#maps{width:100%;font-size:10px;font-family:arial;text-align:right;}</style></div><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><script type="text/javascript">jQuery(document).ready(function(){jQuery('.gmap').hide();jQuery("#maps span").click(function() {var $this = $(this);$this.next("div").fadeToggle();$('.gmap').not($this.next("div")).fadeOut();});});</script><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(51.047006,-114.07829809999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.047006, -114.07829809999998)});infowindow = new google.maps.InfoWindow({content:"<b> White Knight Safety Solutions Inc</b><br/>734-7th Avenue SW. #540<br/> Calgary, Alberta" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script><div id="maps"><span>Google Maps © 2014</span><div class="gmap">supported by <a href="http://www.sparbalu.com">sparbalu</a></div></div>
    </div>
  </div>
  </section>
  
  <?php include 'footer.php' ?>

  </body>
</html>
