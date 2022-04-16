<?php
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$rname = filter_input(INPUT_POST, 'rname');
$ings = filter_input(INPUT_POST, 'ings');
$procedures = filter_input(INPUT_POST, 'procedures');
if (!empty($username) || !empty($email) || !empty($phone) || !empty($rname) || !empty($ings) || !empty($procedure))
{
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
$sql = "INSERT INTO submitted_recipes (username, email, phone, recipe_name, ingredients, procedures)
values ('$username','$email','$phone','$rname','$ings','$procedures')";
if ($conn->query($sql)){
    header("Location: \sw1_d\syrsuccess.html");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
?>