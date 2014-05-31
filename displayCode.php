<?php 
  //$code_str = file_get_contents("http://localhost/UNIT_05/E20-U05A-XXXX/template.php");
  $code_src_str = file_get_contents("http://localhost/UNIT_05/E20-U05A-XXXX/home.phps");
  
  $code_src_str = str_replace('<?php', '<script>', $code_src_str);
  $code_src_str = str_replace('?>', '</script>', $code_src_str);
  echo $code_src_str;
  /*$code_blocks;
  $code_lines;
  preg_match('/((?:^|(?:\<\?php)).*(?:(?:\?>)|$))/m',$code_str, $code_blocks);
  //echo $code_blocks[0].$code_blocks[2];
  preg_match('/([^\r\n]*)/m', implode('\n', $code_blocks), $code_lines);
  
 

  for($i = 0; $i < count($code_lines); $i++)
  {
     $code_src_str = str_replace($code_lines[$i], highlight_string($code_lines[$i], true), $code_src_str);
  }*/
  
?>
