<!doctype html>
<html class="no-js" lang="en">
  <?php include 'header.php'; ?>
  <body>

  <?php include 'nav.php'; ?>

  <section id="header" class="consulting_header">

  </section>

  <section style="padding: 3em 2em;">
  <div class="row">
    <div class="large-12 columns">
      <h2>Consulting Services</h2>
    </div>
</div>
  <div class="row">
    <div class="large-6 columns">
        <h3>Contact Us</h3>
        <form>
        <input type="text" placeholder="First Name *" id="first_name" name="first_name"></input>
        <input type="text" placeholder="Last Name *" id="last_name" name="last_name"></input>
        <input type="text" placeholder="Email Address *" id="email" name="email"></input>
        <input type="text" placeholder="Phone Number" id="phone" name="phone"></input>
        <input type="text" placeholder="Company *" id="company" name="company"></input>
        <select name="Primary Interest">
            <option value="" selected id="interest_default" name="interest_default">What is your primary interest?</option>
            <option value="Consulting Services" name="interest_consulting" id="interest_consulting">Consulting Services</option>
            <option value="Safety Software Integration" name="interest_software_integration" id="interest_software_integration">Safety Software Integration</option>
            <option value="White Knight And Data Scavenger Integration" name="interest_data_integration" id="interest_data_integration">White Knight & Data Scavenger Integration</option>
            <option value="General" name="interest_general" id="interest_general">General</option>
        </select>
        <textarea placeholder="Your question" id="question" name="question" maxlength="1000" cols="25" rows="6"></textarea>
        <a href="#" class="button round" id="contact_submit">Submit</a>
        <div id="contact_response"></div>
        </form>
    </div>
    <div class="large-6 columns">
        <h3>Already a customer of Data Scavenger?</h3>
        <h4>Contact us for integration of our safety software with a Data Scavenger product.</h4>
        <a href="http://ds.datascavenger.com/?page_id=402"><img src="img/logo_dsops.jpg"></a>
        <p>dsOPS allows your company to track actual revenue, in real time.</p>
        <p>Track work orders, field tickets, personnel time, equipment location, and job documentation all in one system.</p>
        <p>Manage staff access, track file usage, and audit projects all in one place.</p>
        <p>dsOPS works as information hub for field operators, relaying essential job-site information from the office to the job-site.</p>
        <a href="dsOPS.pdf" class="button round">Download the dsOPS brocure now!</a>
        <p style="text-align:center;">Or visit their website at <a target="_blank" href="http://www.datascavenger.com">www.datascavenger.com</a></p>
        
    </div>
  </div>
  </section>
  
  <?php include 'footer.php' ?>

  </body>
</html>
