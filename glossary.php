<?php include 'template.php'; ?> 
<!--
  Web Development III
  UNIT 05A/C

  Imaging Houston - glossary.php
  Author: Chris Ottersen
  Date:   05/13/14 

  Filename:         glossary.php
  Supporting files: template.php *
                    
    Glossary Page for imaging Houston. Contains an index of words which site
    users may find confusing
  
  A/C- 
    @see contact.php
    

-->

<?php function start(){$placeholders = array();?>

<?php $placeholders['cp_head'] = function(){?>
  
<?php }?>

<?php $placeholders['cp_title'] = function(){?>
  Glossary
<?php }?>

<?php $placeholders['cp_heading'] = function(){?>
  Glossary
<?php }?>

<?php $placeholders['cp_tagLine'] = function(){?>

<?php }?>

<?php $placeholders['cp_asides'] = function(){?>
  
<?php }?>

<?php $placeholders['cp_articles'] = function(){?>
  
  <h2>Definitions</h2>
  <p>
    Please click click on the name of any words or phrases in this area
    to see a description.
  </p>
  <dl>
    <dt id="mri">MRI</dt>
    <dd></dd>
    <dt id="open">Open MRI</dt>
    <dd></dd>
    <dt id="closed">Closed MRI</dt>
    <dd></dd>
    <dt id="ct">CT scan</dt>
    <dd></dd>
    <dt id="xray">X-rays</dt>
    <dd></dd>
    <dt id="ultrasound">Ultrasound</dt>
    <dd></dd>
    <dt id="radiologist">Radiologist</dt>
    <dd></dd>
    <dt id="diog_img">Diagnostic Imaging</dt>
    <dd></dd>
    <dt id="med_img">Medical Imaging</dt>
    <dd></dd>
  </dl>
<?php }?>

<?php return $placeholders;}?>
