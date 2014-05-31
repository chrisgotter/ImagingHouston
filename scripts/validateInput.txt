<?php
  // define variables and set to empty values
  define('IS_POST', $_SERVER["REQUEST_METHOD"] === "POST");

  include 'Input.php';
  include 'stateArray.php';
  
  /**
   * A relational array holding Input objects representing the inputs from the 
   * posting form.
   *
   * @var Input[8]
   */
  $inputs = array();
  
  $inputs['name']=
    new Input('name',      '', false, '/^[a-zA-Z ]*$/', 'Name');
  $inputs['emailAddr']=
    new Input('emailAddr', '', true , '/([\w\-]+\@[\w\-]+\.[\w\-]+)/', 'Email Address');
  $inputs['emailSub']=
    new Input('emailSub',  '', true, '/^[a-zA-Z ]*$/', 'Email Subject');
  $inputs['emailText']=
    new Input('emailText', '', true , '/^[a-zA-Z ]*$/', 'Email Text');
  $inputs['address']=
    new Input('address',   '', false, '/^[a-zA-Z0-9 ]*$/', 'Street Address');
  $inputs['city']=
    new Input('city',      '', false, '/^[a-zA-Z0-9 ]*$/', 'City');
  $inputs['state']=
    new Input('state',     '', false, $state_regex, 'State');
  $inputs['zip']=
    new Input('zip',       '', false, '/^(?:\d{5}(?:-\d{4}))?$/', 'Zip Code');
  
  /**
   * A relational array holding the error messages for each Input object.
   *
   * @var string[8]
   */
  $outputs = array();
  
  /**
   * Determine whether or not input is erronious.
   *
   * @var bool
   */
  $errorFound = false;
  foreach($inputs as $key=>$value)
  {
    try
    {
      if(IS_POST)
      {
        $inputs[$key]->value=$_POST[$key];
        
        $value->validate();
        $outputs[$key] = '';
      }
      else
      {
        $outputs[$key] = $value->required ? '*' : '';
        $errorFound = true;
      }
    }
    catch (Exception $e)
    {
      $outputs[$key] = $e->getMessage();
      $errorFound = true;
    }
  }
?>
