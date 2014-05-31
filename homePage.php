<?php include 'template.php'; ?> 
<!--
  Web Development III
  UNIT 05A/C

  Imaging Houston - home.php
  Author: Chris Ottersen
  Date:   05/13/14 

  Filename:         home.php
  Supporting files: template.php *
                    
    Home Page for imaging Houston. Contains basic info about the organization.
  
  A/C- 
    @see contact.php
    

-->
<?php function start(){$placeholders = array();?>

<?php $placeholders['cp_head'] = function(){?>
  
<?php }?>

<?php $placeholders['cp_title'] = function(){?>
  Imaging In Houston
<?php }?>

<?php $placeholders['cp_heading'] = function(){?>
  Imaging In Houston
<?php }?>

<?php $placeholders['cp_tagLine'] = function(){?>
  We've Got Your Back, Whether or Not You're on It
<?php }?>

<?php $placeholders['cp_asides'] = function(){?>
  
<?php }?>

<?php $placeholders['cp_articles'] = function(){?>
  <!--  -->
  <article>
    <h2>Imaging in Houston</h2>
    <img class="img_embed" style="float:right;" alt="imaging pic" src="images/imaging.jpg"/>
   
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
  
  
  <hr />
  <article>
    <h2>Patient Centered Care</h2>
    <img class="img_embed" style="float:left;" alt="imaging pic" src="images/healthcare_prof.jpg"/>
    <p>
      The goal of the Imaging in Houston staff is to provide patients the 
      best possible quality care using the latest technology in 
      <a class="diog_img">diagnostic imaging</a>.

      A highly trained staff and <a class="radiologist">radiologists</a> 
      will provide you with a range of diagnostic and health services, 
      including: <a class="open">Open MRI</a>, 
      <a class="closed">Closed MRI</a>, <a class="ct">CT scan</a>, 
      <a class="xray">X-rays</a>, <a class="ultrasound">Ultrasound</a>, 
      As well as a number of other services at select locations.
    </p>
  </article>
  <hr />
  <article>
    <h2>Established In the Community</h2>
    <img class="img_embed" style="float:right;" alt="imaging pic" src="images/PhysicianConsult.jpg"/>
    <p>
      Imaging in Houston is a newly designed concept built around five 
      existing diagnostic imaging centers throughout the Houston area:
      <a class="hous_mri">MRI, Houston</a>, 
      <a class="hous_omri">Open MRI Clinic, Houston</a>, 
      <a class="hous_rad">Radiologist, Houston</a>, 
      <a class="hous_xray">Xrays, Houston</a>, 
      <a class="wood_mri">MRI, The Woodlands</a>. These locations have 
      served Houstonians for more than 10 years. 
    </p>

    <p>
      Imaging in Houston's multiple locations allows the 
      <a class="locations"> MRI clinic</a> to provide the flexibility 
      needed to match patients and providers with a location near them and 
      an appointment time that is suitable to their needs.
    </p>
      
    <p>
      The diagnostic imaging centers don't just help patients; they help 
      physicians. Imaging in Houston understands that providers have a 
      choice where to send their patients for diagnostic imaging. The 
      center wants to partner with doctors to develop an action plan for 
      their patients' success. Imaging in Houston cares about the 
      well-being of patients and wants to assist doctors in their 
      efforts.
    </p>
  </article>
<?php }?>

<?php return $placeholders;}?>
