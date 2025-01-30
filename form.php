<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =   "database";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection walo". $conn->connect_error);
} else {
    echo "safi howa hadak";
}

//tableau code 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (fullname, email, password) 
            VALUES ('$name', '$email', '$password')";

            if($conn ->query($sql) === TRUE) {
                echo 'howa hadak awda ' . $name;
            } else {
                echo 'waaaaaaaalo makhdamach ' . $conn->error;
            }
}
?>
