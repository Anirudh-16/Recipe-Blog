<?php
$iars2 = filter_input(INPUT_POST, 'iars2');
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
$sql = "INSERT INTO review_section (itaDish2)
values ('$iars2')";
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