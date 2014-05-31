<?php $placeholders = start();?>
<!--
  Web Development III
  UNIT 05A/C

  Imaging Houston - template.php
  Author: Chris Ottersen
  Date:   05/13/14 

  Filename:         template.php
  Supporting files: scripts/
                      script.js 
                      include:
                        translateArray.php
                        def_arr.php
                        loc_arr.php
                        style.css
                    http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js
                    style/style.css
                    
    This program is a template for pages in the Imaging Houston website. This
  site is what we have been working on in CIS 160. To maintain order within the
  site, I implemented a model similar to that found in ASP.NET called the 
  'masterpage'. This allows a set of related pages to define only what is 
  unique to them, while site wide formatting is defined in the master or 
  template page. This greatly improves scalability.
  
  A/C- 
    @see contact.php
    

-->
<!DOCTYPE html>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="en-us">

    <link href="style/style.css" rel="stylesheet" type="text/css" >
    <link rel="shortcut icon" href="images/imgaginghouston.ico"/>
    
    <?php include 'scripts/translateArray.php'; ?>
    <?php include 'scripts/def_arr.php'; ?>
    <?php include 'scripts/loc_arr.php'; ?>
    
    <script 
    src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" 
    type="text/javascript"></script>
    <script src="scripts/script.js" type="text/javascript"></script>

    <title>
      <?php $placeholders['cp_title']();?>
    </title>
    <meta name="description" 
    content="Imaging in Houston has the premier radiologists in the Houston 
            and Woodlands areas at our open MRI and x-ray clinic. Call today 
            to book your appointment!">
    <?php $placeholders['cp_head']();?>

  </head>
  <body>
    <section class="full">
      <header>
        <a href="homePage.php"><img id="logo" src="images/imgaginghouston.png" width="330" height="225" 
          alt="Open MRI Clinic, Radiologist &amp; Xrays, Houston"/></a>
        <br />
        <nav id="main_nav">
          <ul>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Locations/Contact</a></li>
            <li><a href="glossary.php">Glossary</a></li>
            <li><a href="homePage.php">Home</a></li>
          </ul>
        </nav>
      </header>
      
      <hgroup>
        <h1>
          <?php $placeholders['cp_heading']();?>

        </h1>
        <h2 id="tagLine">
        &nbsp;
          <?php $placeholders['cp_tagLine']();?>

        </h2>
      </hgroup>
      <hr />
      <section id="asides">
        <aside id="products">
          <h3>Products &amp; Services</h3>
          <p>
            Please click any of the listed items for a description of the 
            service.
          </p>
          <ul>
            <li><a class="mri">MRI</a></li>
            <li><a class="radiologist">Radiologist</a></li> 
            <li><a class="open">Open MRI</a></li>
            <li><a class="xray">X-rays</a></li>
            <li><a class="locations"> MRI clinic</a></li>
            <li><a class="diog_img">Diagnostic Imaging</a></li>
            <li><a class="ct">CT scan</a></li>
            <li><a class="closed">Closed MRI</a></li>
            <li><a class="ultrasound">Ultrasound</a></li>
            <li><a class="med_img">Medical Imaging</a></li>
          </ul>
        </aside>

        <aside>
          <h3>Articles</h3>
          <p>
            Please click here for <a href="#">MRI and Xray</a> articles for the 
            Houston Area!
          </p>
        </aside> 
        <?php $placeholders['cp_asides']();?>

      </section>
      <section id="content">
        <?php $placeholders['cp_articles']();?>

      </section>
    </section>
    <footer>
      <label for="femail">Email:</label> 
      <a id="femail" href="mailto:imaginginhouston@email.com">imaginginhouston@email.com</a>
      <label for="fphone">Phone:</label> 
      <span id="fphone">555-555-1212</span>
    </footer>

  </body>
</html>

