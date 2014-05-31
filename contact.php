<?php include 'template.php'; ?> 
<!--
  Web Development III
  UNIT 05A/C

  Imaging Houston - contact.php
  Author: Chris Ottersen
  Date:   05/13/14 

  Filename:         contact.php
  Supporting files: template.php *
                    scripts/
                      include:
                        validateInput.php
                        
                        
    Contact Page for Imaging Houston. Contains a list of the addresses of the
    different clinics in the organization as well as a form for submitting an
    email. No email is submitted, but this is capable of validating input on 
    the server using the validateInput script.
  
  A- 
    This page uses the 3 scripts included from template.php + 
    validateInput.php, which calls on another still.
  C-
    In addition to the name and address fields, fields have been included for
    email address, subject, and body. No age input was included because I 
    figured that I had enough and could not really think of a way to 
    incorperate it.

-->

<?php function start(){$placeholders = array();?>

<?php $placeholders['cp_head'] = function(){?>
  
<?php }?>

<?php $placeholders['cp_title'] = function(){?>
  Locations/Contact
<?php }?>

<?php $placeholders['cp_heading'] = function(){?>
  Locations/Contact
<?php }?>

<?php $placeholders['cp_tagLine'] = function(){?>

<?php }?>

<?php $placeholders['cp_asides'] = function(){?>
  
<?php }?>

<?php $placeholders['cp_articles'] = function(){?>
  <fieldset>
    <legend id="locations">Locations</legend>
    <p>
      Please click on the name of any of our 5 locations to see an
      address.
    </p>
    <dl>
      <dt id="hous_mri">MRI, Houston</dt>
      <dd></dd>
      <dt id="hous_omri">Open MRI Clinic, Houston</dt>
      <dd></dd>
      <dt id="hous_rad">Radiologist, Houston</dt>
      <dd></dd>
      <dt id="hous_xray">Xrays, Houston</dt>
      <dd></dd>
      <dt id="wood_mri">MRI, The Woodlands</dt>
      <dd></dd>
    </dl>
  </fieldset>
  
    
  <form id="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate="novalidate"> 
    
    <?php include 'scripts/validateInput.php'; ?>
    
    <fieldset id="summary"  style="display:<?php if($errorFound) echo 'none'; else echo 'auto'; ?>;" >
      <legend>Submission Successful!</legend>
      <input type="button" onclick="restoreDisplay();" value="OK"/>
    </fieldset>
    <fieldset id="message" style="display:<?php if(!$errorFound) echo 'none'; else echo 'auto'; ?>;">
      
      

      <legend>Give us some feedback (Whatever you want to say): </legend>
      
      <label for="name">Please provide your Name: </label>
      <!-- required="required" -->
      <input type="text" id="name" name="name" value="<?php echo $inputs['name']->value; ?>"/>
      <label for="name" type="error"><?php echo $outputs['name']; ?></label>

      <fieldset id="emailFields">
        <label for="emailAddr">Please provide your e-mail address: </label>
        <input type="email" id="emailAddr" name="emailAddr" required="required" value="<?php echo $inputs['emailAddr']->value;?> "/>
        <label for="emailAddr" type="error"><?php echo $outputs['emailAddr']; ?></label>
  
        <label for="emailSub">Message Subject: </label>
        <input type="text" id="emailSub" name="emailSub" required="required" value="<?php echo $inputs['emailSub']->value; ?>" />
        <label for="emailSub" type="error"><?php echo $outputs['emailSub']; ?></label>
        
      </fieldset>
      <fieldset id="emailFields">
        <label for="address">Street Address: </label>
        <input type="text" id="address" name="address" value="<?php echo $inputs['address']->value; ?>" />
        <label for="address" type="error"><?php echo $outputs['address']; ?></label>
  
        <label for="city">City: </label>
        <input type="text" id="city" name="city" value="<?php echo $inputs['city']->value; ?>" />
        <label for="city" type="error"><?php echo $outputs['city']; ?></label>
  
        <label for="state">State: </label>
        <input type="text" id="state" name="state" value="<?php echo $inputs['state']->value; ?>" />
        <label for="state" type="error"><?php echo $outputs['state']; ?></label>
        
        <label for="zip">Zip Code: </label>
        <input type="text" id="zip" name="zip" value="<?php echo $inputs['zip']->value; ?>" />
        <label for="zip" type="error"><?php echo $outputs['zip']; ?></label>
        
      </fieldset>
      <input type="submit" />
      <input type="reset" onclick="document.getElementById('form').method='GET'; submit();"/>
      
      <hr />
      
      <label for="emailText">Enter Message: </label>
      <label for="emailText" type="error"><?php echo $outputs['emailText']; ?></label>
      <textarea id="emailText" name="emailText" rows="20" cols="60" required="required"><?php echo $inputs['emailText']->value; ?></textarea>
      
    </fieldset>
    
  </form>
<?php }?>

<?php return $placeholders;}?>