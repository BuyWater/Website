<!DOCTYPE html>
<html>
<body>

<div id="demo">
<h2>The XMLHttpRequest Object</h2>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>
  
<?php
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = "jack Fratto was here\n";
  fwrite($myfile, $txt);
  $txt = "New line here entered\n";
  fwrite($myfile, $txt);
  fclose($myfile);
?>

</body>
</html>
