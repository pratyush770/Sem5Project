<?php
require_once 'connection.php';

$sql_cart="SELECT * from cart";
$all_cart=$con->query($sql_cart);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-danger border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse justify-content-center" style="font-size:20px;" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-link" aria-current="page" href="upload.php" style="margin-left:450px;">Upload</a>
        <a class="nav-link active" href="order_data.php">&nbsp;&nbsp;&nbsp;Order</a>
        <a class="nav-link" href="subscription_data.php">&nbsp;&nbsp;&nbsp;Subscription</a>
        <a class="nav-link" href="contact_data.php">&nbsp;&nbsp;&nbsp;Contact</a>  
        <a class="nav-link" href="feedback_data.php">&nbsp;&nbsp;&nbsp;Feedback</a>
        <a class="nav-link" href="admin.php" style="margin-left:320px;">Logout <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        <a class="nav-link" href="home.php" style="margin-left:10px;"><i class="fa-solid fa-house"></i></a>
      </div>
    </div>
  </div>
</nav>
    <h1 style="text-align:center;margin-top:50px;font-size:36px;">List of order data</h1> <br>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <table class="table table-bordered" style="border:2px solid lightgray;">
                <thead style="border:2px solid lightgray;text-align:center;font-size:18px;">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Orders</th>
                    </tr>
                </thead>
                <tbody style="border:2px solid lightgray;text-align:center;font-size:17px;">
                      <?php
                         $sql = "SELECT * FROM payment_details";
                          $all_product=$con->query($sql);
                          foreach ($all_product as $row)
                             
                                ?>
                                <tr>
                                    <td><?php echo $row['payment_id']; ?></td>
                                    <td><?php echo $row['fname']; ?></td>
                                    <td><?php echo $row['email2']; ?></td>
                                    <td><?php echo $row['addr']; ?></td>
                                    <td><?php echo $row['ccity']; ?></td>
                                    <td><?php echo $row['cstate']; ?></td>
                                    <td>
                                    <table class="table table-bordered table-hover" style="border:2px solid lightgray;">
                <thead style="border:2px solid lightgray;text-align:center;font-size:18px;">
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead> 
                <tbody>
                    <?php
                while($row_cart = mysqli_fetch_assoc($all_cart)){ 
                         $sql1 = "SELECT * FROM product WHERE pid=".$row_cart['pid'];
                          $all_product1=$con->query($sql1);
                          while($row1 = mysqli_fetch_assoc($all_product1)){
                            ?>
                    <tr>
                        <td><?php echo $row1['pname'] ;?></td>
                        <td><?php echo $row1['pprice'] ;?></td>
                        <td><?php echo $row1['quantity'] ;?></td>
                    <?php
                          }
                        }
                        ?>
                </tbody>
                                    </table>
                                    </td>
                                </tr>
                                <?php
                    ?>
                </tbody>
            </table>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
                integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
                crossorigin="anonymous"></script>
                
</body>

</html>