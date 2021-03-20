<?php
session_start();

$servername = "localhost";
$username = "sauravahuja";
$password = "sauravahuja";
$dbname = "inv_mgmt";
$port = "8111";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if ($_POST) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "select name,role,password from login where email_id = '".$username."'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                if($_POST["password"] == $row["password"]){
                    echo "Login Successfull";
                    $name = $row["name"];
                    $role = $row["role"];
                    $_SESSION["name"] = $name;
                    $_SESSION["role"] = $role;
                    header("Location: http://localhost:8000/app/dashboard.php");
                }
                else{
                    echo "Login Failure";
                }
            }
        }
    }
    if($_GET){
        $username = $_GET["name"];
        $password = $_GET["password"];
        $email = $_GET["email"];
        $role = $_GET["role"];
        // echo($username . $password . $email . $role );
        $sql = "insert into login (name,email_id,password,role) values('".$username."','".$email."','".$password."','".$role."');";
        // die($sql);
        $result = mysqli_query($conn, $sql);
        $_SESSION["name"] = $username;
        $_SESSION["role"] = $role;
        header("Location: http://localhost:8000/app/dashboard.php");
    }
}
