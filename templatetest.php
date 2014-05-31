<?php 
  $code_str = file_get_contents("http://cis2.oc.ctc.edu/class/mw256.spring2014/christopherottersen/CIS%20256/UNIT_05/E20-U05A-XXXX/template.phps");
  $code_src_str = file_get_contents("view-source:http://cis2.oc.ctc.edu/class/mw256.spring2014/christopherottersen/CIS%20256/UNIT_05/E20-U05A-XXXX/template.phps");
  $code_blocks;
  $code_lines;
  preg_match('/((?:^|(?:\<\?php)).*(?:(?:\?>)|$))/m',$code_str, $code_blocks);
  preg_match('/([^\r\n]*)/m', implode('\n', $code_blocks), $code_lines);
  
 

  for($i = 0; $i < count($code_lines); $i++)
  {
     $code_src_str = str_replace($code_lines[$i], highlight_string($code_lines[$i], true), $code_src_str);
  }
  echo $code_src_str;
?>
