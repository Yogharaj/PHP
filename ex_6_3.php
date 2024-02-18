<?php
if(isset($_GET['submit']))
{
   $x=$_GET['Name'];
   $y=$_GET['Age'];
   if(strlen($x)==0 or strlen($y)==0)
   {
       echo "All fields are required";
   }
}
?>
<form action="ex_6_3.php" method="get">
  Name:<input type="text" name="Name"><br><br>
  Age:<input type="text" name="Age"><br><br>
  <input type="submit" name="submit" value="SUBMIT">
</form>