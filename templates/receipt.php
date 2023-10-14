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
    <title>Receipt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <script src="../static/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <style>
        /* table{
            width:100%;
            border-collapse: collapse;
        }
        td,th{
            border:1px solid gray;
            padding:2px;
        } */
    </style>
</head>
<body>
    <div id="invoice">
<!-- <nav class="navbar navbar-expand-lg bg-danger border-bottom border-body" data-bs-theme="dark">
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
</nav> -->
    <h1 style="text-align:center;margin-top:30px;font-size:36px;">Invoice</h1> <br>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <table class="table table-bordered" style="border:2px solid lightgray;">
                <thead style="border:2px solid lightgray;text-align:center;font-size:18px;">
                    <tr style="border:1px solid lightgray;">
                        <th style="border:1px solid lightgray;">ID</th>
                        <th style="border:1px solid lightgray;">Name</th>
                        <th style="border:1px solid lightgray;">Address</th>
                        <th style="border:1px solid lightgray;">City</th>
                        <th style="border:1px solid lightgray;">Orders</th>
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
                                    <td><?php echo $row['addr']; ?></td>
                                    <td><?php echo $row['ccity']; ?></td>
                                    <td>
                                    <table class="table table-bordered" style="border:2px solid lightgray;">
                <thead style="border:2px solid lightgray;text-align:center;font-size:18px;">
                    <tr>
                        <th style="border:1px solid lightgray;">Product</th>
                        <th style="border:1px solid lightgray;">Price</th>
                        <th style="border:1px solid lightgray;">Quantity</th>
                        <th style="border:1px solid lightgray;">Total</th>
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
                        <td style="border:1px solid lightgray;"><?php echo $row1['pname'] ;?></td>
                        <td style="border:1px solid lightgray;"><?php echo $row1['pprice'];?><input type="hidden" class="iprice" value="<?php echo $row1['pprice'];?>"></td>
                        <td style="border:1px solid lightgray;">
                        <form action="receipt.php" method="POST">
                      <input class="iquantity" style="width:13px;outline:none;border:none;" onchange="subTotal()" type="text" name="" value="<?php echo $row1['quantity'];?>"> <br> <br>
                      </form></td>
                        <td  style="border:1px solid lightgray;" class="itotal"></td>
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
                <tr>
                    <th colspan="4" style="text-align:right;font-size:18px;padding:8px;border:1px solid lightgray;">Sub Total</th>
                    <th style="text-align:right;font-size:18px;border:1px solid lightgray;" id="stotal"></th>
                </tr>
                <tr>
                    <th colspan="4" style="text-align:right;font-size:18px;padding:8px;border:1px solid lightgray;">GST (5%)</th>
                    <th style="text-align:right;font-size:18px;border:1px solid lightgray;" id="mygst"></th>
                </tr>
                <tr>
                    <th colspan="4" style="text-align:right;font-size:18px;padding:8px;border:1px solid lightgray;">Grand Total</th>
                    <th style="text-align:right;font-size:18px;border:1px solid lightgray;" id="gtotal"></th>
                </tr>
            </table>
        </div>
    </div>
    </div>
            <input type="button" class="btn btn-danger" id="download" required value="Download PDF" style="float:right;margin-right:110px;">
    <script>
      var st = 0;
      var gst_val=0;
      var gst=0;
      var gt = 0;
      var iprice = document.getElementsByClassName('iprice');
      var iquantity = document.getElementsByClassName('iquantity');
      var itotal = document.getElementsByClassName('itotal');
      var stotal =document.getElementById('stotal');
      var mygst = document.getElementById('mygst');
      var gtotal =document.getElementById('gtotal');
      //var gtotal1 =document.getElementById('gtotal1');
      function subTotal()
      {
        st =0;
        gst=0;
        gst_val=0;
        gt= 0;
        for(i=0;i<iprice.length;i++)
        {
          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
          st = parseInt(st + (iprice[i].value)*(iquantity[i].value));
          gst_val = parseInt((st*5)/100);
          gst = parseInt(st + (st*5)/100);
          extgt = gst;
        }
        stotal.innerText = st;
        mygst.innerText = gst_val;
        gtotal.innerText = gst;
        // gtotal1.innerText =extgt;
      }
    subTotal();
    </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
                integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
                crossorigin="anonymous"></script>
                
</body>

</html>