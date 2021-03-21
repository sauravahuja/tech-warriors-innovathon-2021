<?php
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
            $companyName = $_POST["company_name"];
            $location = $_POST["location"];
            $agent = $_POST["agent_name"];

            $sql = "insert into product_compnay (company_name,location,agent_name) values('".$companyName."','".$location."','".$agent."');";
            // die($sql);
            $result = mysqli_query($conn, $sql);
            
            ?>
            <!-- <script>
                document.getElementById("add-product-panel").style.display = "none";
                document.getElementById("all-product-panel").style.display = "block";
                
            </script> -->
            <?php
            header("Location: http://localhost:8000/app/dashboard.php");
            // if (mysqli_num_rows($result) > 0) {
            //     // output data of each row
            //     while ($row = mysqli_fetch_assoc($result)) {
            //         if($_POST["password"] == $row["password"]){
            //             echo "Login Successfull";
            //             $name = $row["name"];
            //             $role = $row["role"];
            //             $_SESSION["name"] = $name;
            //             $_SESSION["role"] = $role;
            //             header("Location: http://localhost:8000/app/dashboard.php");
            //         }
            //         else{
            //             echo "Login Failure";
            //         }
            //     }
            // }
        }
    }
?>