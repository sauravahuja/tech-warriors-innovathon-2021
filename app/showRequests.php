<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/style/dashboard.css">
  <link rel="stylesheet" href="../assets/style/helper-class.css">
  <link rel="stylesheet" href="../assets/style/button.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
</head>

<body>
  <section id="new-request">
    <div class="content-box-md">
      <div class="container">
        <table class="table table-bordered" id="editableTable">
          <thead>
            <tr>
              <th>ID</th>
              <th>Product Name</th>
              <th>Category Type</th>
              <th>Company Name</th>
              <th>Quantity</th>
              <th>Agent Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              $servername = "localhost";
              $username = "sauravahuja";
              $password = "sauravahuja";
              $dbname = "inv_mgmt";
              $port = "8111";

              $conn = new mysqli($servername, $username, $password, $dbname, $port);
              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              } else {
                $sql = "select id,product_name,category_type,company_name,quantity,agent_name from requested_product";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while ($row = mysqli_fetch_assoc($result)) {
              ?>
                    <td data-field="ID"><?php echo $row['id'] ?></td>
                    <td data-field="Name"><?php echo $row['product_name'] ?></td>
                    <td data-field="Date of Purchase"><?php echo $row['category_type'] ?></td>
                    <td data-field="Buying Data"><?php echo $row['company_name'] ?></td>
                    <td data-field="Selling Date"><?php echo $row['quantity'] ?></td>
                    <td data-field="Company Name"><?php echo $row['agent_name'] ?></td>
                    <td>
                      <a class="btn-box" title="Edit">
                        <i class="fa fa-check"></i>
                      </a>

                      <a class="btn-box" title="Delete">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
            </tr>
      <?php
                  }
                }
              }
      ?>
          </tbody>
        </table>
        <div class="m-t-50 text-center">
          <a href="./dashboard.php" class="btn-box">Back To Home</a>
        </div>
      </div>
    </div>

  </section>
</body>

</html>