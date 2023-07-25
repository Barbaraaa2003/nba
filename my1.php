<?php
$db=mysqli_connect("localhost", "root","", "epl");

$sql="SELECT name, email, message FROM feedback";
$result=mysqli_query($db, $sql);

while ($line=mysqli_fetch_row($result)) {
echo "<li><b>name:</b>".$line[0]."<br>";
echo "<b>email:</b>".$line[1]."<br>";
echo "<b>message:</b>".$line[2]."<br></li>";
}
?>
