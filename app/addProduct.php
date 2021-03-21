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
            $productName = $_POST["name"];
            $category = $_POST["category"];
            $buying = $_POST["buying"];
            $selling = $_POST["selling"];
            $company = $_POST["company"];
            $model = $_POST["model"];
            $agent = $_POST["agent"];
            $quantity = $_POST["quantity"];

            $sql = "insert into products (category_type,product_name,agent_name,model_no,quantity,company_name,product_rate,buying_date,selling_date) values('".$category."','".$productName."','".$agent."','".$model."','".$quantity."','".$company."','".$buying."','".$buying."','".$selling."');";
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