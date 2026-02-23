<!DOCTYPE html>
<html>
<head></head>
<body>
<form method="POST">
 <label>Enter String:</label>
 <input type="text" name="orgTxt">
 <input type="submit" name="submit" value="Reverse">
</form>
<?php
 if(isset($_POST['submit'])){
  $orgTxt = $_POST['orgTxt'];
  $rev = strrev($orgTxt);

  echo "<h2>Original string: $orgTxt</h2>";
 echo "<h2>Reverse string: $rev</h2>";
 }
?>
</body>
</html>