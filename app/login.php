<?php
    
    $servername = "localhost";
    $username = "sneha";
    $password = "sneha";
    $dbname = "invt_mgmt";
    // $port = "8111";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($_POST) {
        // echo($_POST['name']);
        
        $username = $_POST['username'];
        $password = $_POST["password"];
        // echo($name."  ".$emailid);
        $sql = "select password from login where email_id='".$username."'";
        // die($sql);
                    $result = $conn->query($sql);
            die($result);
        
        // if ($result) {
        //     // output data of each row
        //     while ($row = $result->fetch_assoc()) {
        //         echo $row;
        //     }
        // }
    }  
    ?>
