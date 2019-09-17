<!DOCTYPE html>
<html>
<body>

<div id="demo">
<h2>The XMLHttpRequest Object</h2>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>

<script>
<?php
  $myFile = fopen("myText.txt", "w") or die("Couldn't open file!");
  $txt = "jack Fratto was here\n";
  fwrite($myFile, $txt);
  $txt = "New line here entered\n";
  fwrite($myFile, $txt);
  fclose($myFile);
?>
</script>

</body>
</html>
