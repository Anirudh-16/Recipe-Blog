<?php
$iars1 = filter_input(INPUT_POST, 'iars1');
$host = "localhost";
$dbusername = "anirudh";
$dbpassword = "Anirudh16.";
$dbname = "software";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO review_section (itaDish1)
values ('$iars1')";
if ($conn->query($sql)){
    header("Location: \sw1_d\successr.html");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>