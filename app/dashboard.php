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
          <p class="p-10">Add New</p>
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
          <p class="p-10">Add New</p>
          <p class="p-10">View All</p>
        </div>
        <br>
        <div class="section-category flexed">
          <p class="section-name text-capitalize">Category</p>
          <div class="text-right">
            <i id="category-click" class="fa fa-angle-down text-right"></i>
          </div>
        </div>
        <div id="category-content" class="inactive">
          <p class="p-10">Add New</p>
          <p class="p-10">View All</p>
        </div>
        <br>
        <div class="section-sales flexed">
          <p class="section-name text-capitalize">Sales</p>
          <div class="text-right">
            <i id="" class="fa fa-angle-right text-right"></i>
          </div>
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
                  <th>Selling Date</th>
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
          ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

  </section>

  <script src="../assets/script/jquery/jquery.min.js"></script>

  <!-- Custom JS -->
  <script src="../assets/script/dashboard.js"></script>
</body>

</html>