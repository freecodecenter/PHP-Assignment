<?php
$text="The quick brown fox jumps over the lazy dog";
function text1($inputtext)
{
 $lowtext=strtolower($inputtext);
 $new=str_replace("brown","red",$lowtext);
  echo $new;
}
text1($text);