<!DOCTYPE HTML>
<html>
<body>

<?php
  $myfile = fopen("newfile.txt", "w") or die ("Couldn't open file for some stupid reason");
  $txt = "Jack wuz here";
  fwrite($myfile, $txt);
  fclose("myfile.txt");
?>
 
</body>
</html>
