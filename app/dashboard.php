<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- important meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Title -->
  <title>Inoovathon</title>

  <!-- Basic SEO -->
  <meta name="description" content="Porfolio of an IT engineering student named as Saurav Ahuja. Studies in Thadomal Shahani Engineering College. Expertise in Web Development with project management and UI/UX designing.">
  <meta name="keywords" content="Portfolio, UI, UX, Mobile App, Web Design, Web Development, Responsive website, Creative website, Video, Creative Content, Engineering, IT, Skills, Project,">


  <!-- Favicon -->
  <link rel="shortcut icon" href="../assets/images/favicon.png">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/style/helper-class.css">
  <link rel="stylesheet" href="../assets/style/button.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/style/dashboard.css">
</head>

<body>
  <!-- Content Strats From Here -->
  <section id="dashboard">
    <section id="side-panel">
      <div class="personal-information">
        <h1 class="greeting">Hello, <?= $_SESSION['name'] ?></h1>
        <p class="role p-t-10">Role: <?= $_SESSION['role'] ?></p>
        <p class="general-description p-t-10">Inventory Management System</p>
        <p class="l-dash m-t-20"></p>
      </div>
      <div class="side-contents">
        <div class="section-products flexed">
          <p class="section-name text-capitalize">Products</p>
          <div class="text-right">
            <i id="product-click" class="fa fa-angle-down text-right"></i>
          </div>
        </div>
        <div id="product-content" class="inactive">
          <?php
          if ($_SESSION['role'] == "Admin" || $_SESSION['role'] == "admin") {
          ?>
            <p class="p-10" id="add-product">Add New</p>
          <?php
          }
          ?>
          <p class="p-10" id="product-view">View All</p>
        </div>
        <br>
        <div class="section-company flexed">
          <p class="section-name text-capitalize">Company</p>
          <div class="text-right">
            <i id="company-click" class="fa fa-angle-down text-right"></i>
          </div>
        </div>
        <div id="company-content" class="inactive">
          <?php
          if ($_SESSION['role'] == "Admin" || $_SESSION['role'] == "admin") {
          ?>
            <p class="p-10" id="add-company">Add New</p>
          <?php
          }
          ?>
          <p class="p-10" id="company-view">View All</p>
        </div>
        <br>
        <div class="section-category flexed">
          <p class="section-name text-capitalize">Category</p>
          <div class="text-right">
            <i id="category-click" class="fa fa-angle-down text-right"></i>
          </div>
        </div>
        <div id="category-content" class="inactive">
          <?php
          if ($_SESSION['role'] == "Admin" || $_SESSION['role'] == "admin") {
          ?>
            <p class="p-10" id="add-category">Add New</p>
          <?php
          }
          ?>
          <p class="p-10" id="category-view">View All</p>
        </div>
        <br>
        <?php
        if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'Admin') {
        ?>
          <div class="section-sales flexed">
            <p id="view-sales" class="section-name text-capitalize">Sales</p>
            <div class="text-right">
              <i id="" class="fa fa-angle-right text-right"></i>
            </div>
          </div>
          <br>
        <?php
        }
        ?>
        <div class="m-t-30">
          <?php
          if ($_SESSION['role'] == 'agent' || $_SESSION['role'] == 'Agent') {
          ?>
            <a href="./newRequest.html" class="btn-box-general">New Req</a>
          <?php
          }
          ?>
          <?php
          if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'Admin') {
          ?>
            <a href="./showRequests.php" class="btn-box-general">Show Req</a>
          <?php
          }
          ?>
        </div>
        <!-- <div class="section-request flexed">
          <a href="./newRequest.html" id="add-request" class="section-name text-capitalize">Request Product</a>
          <div class="text-right">
            <i  class="fa fa-angle-right text-right"></i>
          </div>
        </div>
        <br>
lass="section-request flexed">
          <p id="view-requested" class="section-name text-capitalize">Requested Products</p>
          <div class="text-right">
            <i  class="fa fa-angle-right text-right"></i>
          </div>
        </div> -->

        <div id="logout">
          <a class="btn-box-light" href="../app/login.html">Logout</a>
        </div>
      </div>
    </section>

    <section id="first-dashboard-panel">
      <img src="../assets/images/dashboard/Mesa de trabajo 1.png" alt="">
    </section>

    <section id="all-product-panel">
      <div class="table-container">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-bordered" id="editableTable">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Product Name</th>
                  <th>Category Type</th>
                  <th>Buying Data</th>
                  <th>Quantity</th>
                  <th>Company Name</th>
                  <th>Model No</th>
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
                    if ($_SESSION['role'] == "Admin" || $_SESSION['role'] == "admin") {
                      $sql = "select id,product_name,category_type,buying_date,quantity,company_name,model_no from products";
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                          <td data-field="ID"><?php echo $row['id'] ?></td>
                          <td data-field="Name"><?php echo $row['product_name'] ?></td>
                          <td data-field="Date of Purchase"><?php echo $row['category_type'] ?></td>
                          <td data-field="Buying Data"><?php echo $row['buying_date'] ?></td>
                          <td data-field="Selling Date"><?php echo $row['quantity'] ?></td>
                          <td data-field="Company Name"><?php echo $row['company_name'] ?></td>
                          <td data-field="Model No"><?php echo $row['model_no'] ?></td>
                          <td>
                            <a class="btn-box" title="Edit">
                              <i class="fa fa-pencil"></i>
                            </a>

                            <a class="btn-box" title="Delete">
                              <i class="fa fa-trash"></i>
                            </a>
                          </td>
                </tr>
              <?php
                        }
                      }
                    } else {
                      $sql = "select id,product_name,category_type,buying_date,selling_date,company_name,model_no from products where agent_name='" . $_SESSION['name'] . "'";
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <td data-field="ID"><?php echo $row['id'] ?></td>
                <td data-field="Name"><?php echo $row['product_name'] ?></td>
                <td data-field="Date of Purchase"><?php echo $row['category_type'] ?></td>
                <td data-field="Buying Data"><?php echo $row['buying_date'] ?></td>
                <td data-field="Selling Date"><?php echo $row['selling_date'] ?></td>
                <td data-field="Company Name"><?php echo $row['company_name'] ?></td>
                <td data-field="Model No"><?php echo $row['model_no'] ?></td>
                <td>
                  <a class="btn-box" title="Edit">
                    <i class="fa fa-pencil"></i>
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
                  }
        ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <section id="add-product-panel">

      <form action="./addProduct.php" class="mainWrap" method="POST">
        <h1 class="p-b-20">Add a New Product</h1>
        <label for="">Product Name</label>
        <br>
        <input placeholder="Product Name" type="text" name="name" />
        <br>
        <label for="">Category Type</label>
        <br>
        <input placeholder="Category Type" type="text" name="category" />
        <br>
        <label for="">Buying Date</label>
        <br>
        <input placeholder="Buying Date" type="text" name="buying" />
        <br>
        <label for="">Selling Date</label>
        <br>
        <input placeholder="Selling Date" type="text" name="selling" />
        <br>
        <label for="">Company Name</label>
        <br>
        <input placeholder="Company Name" type="text" name="company" />
        <br>
        <label for="">Model No</label>
        <br>
        <input placeholder="Model No" type="text" name="model" />
        <br>
        <label for="">Agent Name</label>
        <br>
        <input placeholder="Agent Name" type="text" name="agent" />
        <br>
        <label for="">Quantities</label>
        <br>
        <input placeholder="Quantitites" type="text" name="quantity" />
        <br>
        <button type="submit" class="btn-box">Add Product</button>
      </form>
    </section>

    <section id="all-company-panel">
      <div class="table-container">
        <div class="row">
          <div class="">
            <table class="table table-bordered" id="editableTable">
              <h1 class="p-40">View All Companies</h1>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Company Name</th>
                  <th>Location</th>
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
                    if ($_SESSION['role'] == "Admin" || $_SESSION['role'] == "admin") {
                      $sql = "select id,company_name,location from product_compnay";
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                          <td data-field="ID"><?php echo $row['id'] ?></td>
                          <td data-field="Date of Purchase"><?php echo $row['company_name'] ?></td>
                          <td data-field="Buying Data"><?php echo $row['location'] ?></td>
                          <td>
                            <a class="btn-box" title="Edit">
                              <i class="fa fa-pencil"></i>
                            </a>

                            <a class="btn-box" title="Delete">
                              <i class="fa fa-trash"></i>
                            </a>
                          </td>
                </tr>
              <?php
                        }
                      }
                    } else {
                      $sql = "select id,company_name,location from product_compnay where agent_name='" . $_SESSION['name'] . "'";
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <td data-field="ID"><?php echo $row['id'] ?></td>
                <td data-field="Date of Purchase"><?php echo $row['company_name'] ?></td>
                <td data-field="Buying Data"><?php echo $row['location'] ?></td>
                <td>
                  <a class="btn-box" title="Edit">
                    <i class="fa fa-pencil"></i>
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
                  }
        ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <section id="add-company-panel">

      <div class="content-box-md">
        <form action="./addCompany.php" class="mainWrap" method="POST">
          <h1 class="p-b-20">Add a New Company</h1>
          <label for="">Company Name</label>
          <br>
          <input placeholder="Company Name" type="text" name="company_name" />
          <br>
          <label for="">Location</label>
          <br>
          <input placeholder="Location" type="text" name="location" />
          <br>
          <label for="">Agent Name</label>
          <br>
          <input placeholder="Agent Name" type="text" name="agent_name" />
          <br>
          <button type="submit" class="btn-box">Add Company</button>
        </form>
      </div>
    </section>

    <section id="all-category-panel">
      <div class="table-container">
        <div class="row">
          <div class="">
            <table class="table table-bordered" id="editableTable">
              <h1 class="p-40">View All Category</h1>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Category Type</th>
                  <th>Category Description</th>
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
                    if ($_SESSION['role'] == "Admin" || $_SESSION['role'] == "admin") {
                      $sql = "select id,category_type,category_description from category";
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                          <td data-field="ID"><?php echo $row['id'] ?></td>
                          <td data-field=""><?php echo $row['category_type'] ?></td>
                          <td data-field="Buying Data"><?php echo $row['category_description'] ?></td>
                          <td>
                            <a class="btn-box" title="Edit">
                              <i class="fa fa-pencil"></i>
                            </a>

                            <a class="btn-box" title="Delete">
                              <i class="fa fa-trash"></i>
                            </a>
                          </td>
                </tr>
              <?php
                        }
                      }
                    } else {
                      $sql = "select id,category_type,category_description from category where agent_name='" . $_SESSION['name'] . "'";
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <td data-field="ID"><?php echo $row['id'] ?></td>
                <td data-field="Date of Purchase"><?php echo $row['category_type'] ?></td>
                <td data-field="Buying Data"><?php echo $row['category_description'] ?></td>
                <td>
                  <a class="btn-box" title="Edit">
                    <i class="fa fa-pencil"></i>
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
                  }
        ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <section id="add-category-panel">

      <div class="content-box-md">
        <form action="./addCategory.php" class="mainWrap" method="POST">
          <h1 class="p-b-20">Add a New Category</h1>
          <label for="">Category Type</label>
          <br>
          <input placeholder="Category Type" type="text" name="category_type" />
          <br>
          <label for="">Category Description</label>
          <br>
          <input placeholder="Category Description" type="text" name="category_description" />
          <br>
          <label for="">Agent Name</label>
          <br>
          <input placeholder="Agent Name" type="text" name="agent_name" />
          <br>
          <button type="submit" class="btn-box">Add Category</button>
        </form>
      </div>
    </section>
    <?php
    if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'Admin') {
    ?>
      <section id="sales">
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
          $sql = "select quantity,product_rate,agent_name from products";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            $sauravTotal = 0;
            $manavSTotal = 0;
            $manavDTotal = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              // echo $row['agent_name'] . " ". $row['product_rate'] * $row['quantity']."<br>";
              if ($row['agent_name'] == "Saurav Ahuja") {

                $sauravTotal = $sauravTotal + ($row['product_rate'] * $row['quantity']);
              }
              if ($row['agent_name'] == "Manav Shah") {

                $manavSTotal = $manavSTotal + ($row['product_rate'] * $row['quantity']);
              }
              if ($row['agent_name'] == "Sneha Birodkar") {

                $manavDTotal = $manavDTotal + ($row['product_rate'] * $row['quantity']);
              }
            }
            // echo $sauravTotal."<br>";
            // echo $manavSTotal."<br>";
            // echo $manavDTotal."<br>";
          }
        }
        ?>
        <?php
        $dataPoints = array(
          array("label" => "Saurav Ahuja", "y" => $sauravTotal),
          array("label" => "Manav Shah", "y" => $manavSTotal),
          array("label" => "Sneha Birodkar", "y" => $manavDTotal)
        )

        ?>
        <script>
          window.onload = function() {


            var chart = new CanvasJS.Chart("chartContainer", {
              animationEnabled: true,
              title: {
                text: "Sales"
              },
              subtitles: [{
                text: "march 2021"
              }],
              data: [{
                type: "pie",
                yValueFormatString: "#,##0.00\"%\"",
                indexLabel: "{label} ({y})",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
              }]
            });
            chart.render();

          }
        </script>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      </section>
    <?php
    }
    ?>
    <script src="../assets/script/jquery/jquery.min.js"></script>

    <!-- Custom JS -->
    <script src="../assets/script/dashboard.js"></script>
</body>

</html>