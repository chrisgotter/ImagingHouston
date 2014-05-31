<?php   
  define('DEFAULT_ERROR_PATTERN', '* %s contains invalid data: %s');
  /**
   * @author Chris
   * 
   * @abstract Wrapper class for an input element.
   */
  class Input
  {
    
    /**
     * Input's Id.
     * 
     * @var string
     */
    public $id = '';
    
    /**
     * The value read from the input.
     *
     * @var string
     */
    public $value = '';    
    
    /**
     * Whether or not this is a required field.
     *
     * @var bool
     */
    
    public $required = false;
    /**
     * Name of input (human readable not how it is accessed by the server).
     * 
     * @var string
     */
    public $name = '';

    /**
     * The regular expression string against which input is validated.
     * 
     * @var string
     */
    public $expVal = '/^.*$/';
    
    /**
     * The format string representing the pattern in which errors will be 
     * formed.
     *
     * @var string
     */
    public $error_pattern;
    
    /**
     * 
     * @param string $id Input's Id.
     * @param string $value The value read from the input.
     * @param bool $required Whether or not this is a required field.
     * @param string $expVal The regular expression string against which input 
     *           is validated.
     * @param string $name Name of input (human readable not how it is accessed 
     *           by the server).
     * @param string $error_pattern The Exception message for formatting errors.
     *           
     * @throws InvalidArgumentException if $id is null
     */
    public function __construct(
        $id, $value='', $required=false, $expVal='/^.*$/', $name='$id', 
        $error_pattern=DEFAULT_ERROR_PATTERN)
    {
      
      if($id === null || strlen($id) === 0)
      {
        throw new InvalidArgumentException('$id must not be null.');
      }
      else
      {
        $this->id=$id;
      }
      
      $this->required = $required === null ? false : $required;
      //echo "<script>alert('$value');</script>";
      $this->value = $value === null ? '' : $value;
      
      $this->name = $name === '$id' || $name === null ? $id : $name;

      $this->expVal= $expVal === null ? '/^.*$/' : $expVal;
      
      $this->error_pattern=$error_pattern === null ? DEFAULT_ERROR_PATTERN : $error_pattern;
      
      
    }
    
    /**
     * Test the input field's value.
     * 
     * @throws Exception if value is invalid.
     */
    public function validate()
    {
      
      if((($this->value === null || strlen($this->value) === 0) && $this->required) || 
          !preg_match_all($this->expVal, $this->value))
      {
        throw $this->getError();
      }
    }
    
    /**
     * Generates an Exception object using the $error_pattern format string
     * 
     * @param string $error_pattern format string for errors in this field's input
     * @return Exception
     */
    private function getError()
    {
      
      if($this->value === null || strlen($this->value) === 0 && $this->required)
      {
        $this->error_pattern = '* field required';
        //$error_pattern = sprintf($error_pattern,$this->name, $this->value);
        
      }
      return new Exception(sprintf($this->error_pattern,$this->name, $this->value));

    }
  }
?>