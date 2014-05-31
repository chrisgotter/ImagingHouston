<?php include 'template.php'; ?> 
<!--
  Web Development III
  UNIT 05A/C

  Imaging Houston - about.php
  Author: Chris Ottersen
  Date:   05/13/14 

  Filename:         about.php
  Supporting files: template.php *
                        
    About Page for Imaging Houston. Contains a token ammount of info about the
    organization. 

-->

<?php function start(){$placeholders = array();?>

<?php $placeholders['cp_head'] = function(){?>
  
<?php }?>

<?php $placeholders['cp_title'] = function(){?>
  About Us
<?php }?>

<?php $placeholders['cp_heading'] = function(){?>
  About Us
<?php }?>

<?php $placeholders['cp_tagLine'] = function(){?>

<?php }?>

<?php $placeholders['cp_asides'] = function(){?>
  
<?php }?>

<?php $placeholders['cp_articles'] = function(){?>
  <!-- 
    This is literally copied and pasted from the home page because
    I needed something here.
  -->
  <article>
    <h2>Imaging in Houston</h2>
    <p>
      Imaging in Houston, a group of premier 
      <a class="diog_img">diagnostic imaging</a> centers, provides the 
      highest standards of service and a patient-centered approach, which
      has already helped thousands in the Houston area. 
    </p>
    <p>
      At Imaging in Houston, board-certified 
      <a class="radiologist">radiologists</a> and their teams help 
      facilitate the needs of physicians and healthcare providers, and 
      provide every patient with the best possible degree of care.
    </p> 
  </article>
<?php }?>

<?php return $placeholders;}?>