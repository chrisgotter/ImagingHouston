<?php
/**
 * toJSArray is used to translate the location or definition arrays defined
 * elsewhere in php into JavaScript. The wierd indenting is required to make
 * JavaScript render well on the client.
 */
function toJSArray($arrayName, $array)
{
  echo '
    <script type="text/javascript">
      ';
  echo 'var ' . $arrayName . ' = 
      [';
  $com = '';
    foreach($array as $key=>$value)
    {
      if($com === '+')
      {
        echo ',';
      }
      echo " 
        [
          \"$key\",";
      $com = '';
      for($i = 0; $i < count($value); $i++)
      {
        echo $com . ' 
          "' . $value[$i] . '"';
        $com = '+';
      }
      
      echo '
        ]';
    }
  echo '
      ];

    </script>
';
}
?>