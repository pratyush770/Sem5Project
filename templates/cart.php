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
    <title>Cart</title>
    <link rel="stylesheet" href="../static/cart.css">

    <!-- Bootstrap Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <!--FontAwesome CDN-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
     <style>
      .dark h1{
  color:#f1f2f6;
}
.dark p{
  color:#f1f2f6;
}
.dark hr{
  color:#f1f2f6;
}
.dark h3{
  color:#f1f2f6;
}
.dark .amount{
  color:#f1f2f6;
}
     </style>
</head>
<body onload="subTotal()">
  <div class="mynavbar">
    <nav>
        <a href="../templates/home.php" class="alink1"><img class="logo" src="../static/images/22baf73169f8401fb664a518b53c35aa-Lets Clean - Logo-01.png"></a>
            <input type="text" placeholder="Search by product name" id="find" onkeyup="search()" class="inp_text1">
        <ul>
          <a href="../templates/cart.php"><li class="myli"><i class="fa-solid fa-cart-plus icon" style="position: relative;top:5px;font-size: 23px;" ></i>  
          <span class="span1" id="badge" style="  position: relative; width:10px;height:50px;top:-26px;right:27%;background: green;color: white; border-radius: 50%;padding:2px 6px;font-size: 14px;"><?php echo mysqli_num_rows($all_cart);?></span>
          <span class="span2" style="position: relative;font-size: 20px;right:22px;top:2px;">Cart</li></a> 
          <div class="toggle"></div>
        </ul>
    </nav>
    <header  style="height:62px;">
      <ul>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="active"><i class="fa-solid fa-basket-shopping"></i>
              Shop by Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../templates/ewaste.php">E-Waste</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../templates/plastic.php">Plastic Waste</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../templates/paper.php">Paper</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../templates/cloth.php">Clothes</a></li>
            </ul>
            <a href="../templates/subscription.php" class="alink"><li class="active"><i class="fa-solid fa-sack-dollar"></i> Subscription </li> </a>
            <a href="../templates/about.php" class="alink"><li class="active"><i class="fa-solid fa-circle-info"></i> About Us</li></a>
          <a href="../templates/contact.php" class="alink"><li class="active"><i class="fa-solid fa-phone"></i> Contact Us</li></a>
          <a href="../templates/feedback.php" class="alink"><li class="active"><i class="fa-solid fa-clipboard"></i> Feedback</li> </a>
      </ul>
  </header>
    </div><br><br><br><br><br><br><br><br>
    
    </h4><h1 style="margin-top:10px;margin-bottom: 20px;font-family:sans-serif;font-size: 34px;text-align: center;">Your Cart</h1>
    <!-- <h4 id="gtotal1"> </h4> -->
    <p class="para" style="text-align: center;font-family: arial;font-size:23px;font-family:sans-serif;">
              Added items will be displayed here
</p>
            <hr style="width:72%;margin-left:215px; margin-bottom:30px;">
             <?php
      while($row_cart = mysqli_fetch_assoc($all_cart)){ 
         $sql = "SELECT * FROM product WHERE pid=".$row_cart['pid'];
          $all_product=$con->query($sql);
          while($row = mysqli_fetch_assoc($all_product)){
      ?>
            <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card" id="mycard">
            <div class="card-body">
              <table class="table table-bordered table-lg">
                <thead>
                  <tr style="font-size: 19px;text-align:center;">
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="font-size: 18px;text-align:center;">
                    <td><img src="../static/images/<?php echo $row['imgupload'];?>" style="height:150px;width:200px;"alt=""></td>
                    <td><?php echo $row['pname'];?></td>
                    <td><?php echo $row['pprice'];?><input type="hidden" class="iprice" value="<?php echo $row['pprice'];?>"></td>
                    <td>
                      <form action="cart.php" method="POST">
                      <!-- <input class="text-center iquantity" onchange="subTotal()" type="number" name="quantity" value="<?php //echo $row['quantity'];?>" min=1 max=5> <br> <br> -->
                      <input class="text-center iquantity" onchange="subTotal(this);updateQuantity(this);" type="number" name="quantity" value="<?php echo $row['quantity'];?>" min="1" max="5" data-id="<?php echo $row['pid'];?>"><br><br>

                      </form>
                    <button class="remove btn btn-secondary" data-id="<?php echo $row['pid'];?>">Remove from Cart</button>
                    <td class="itotal"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
        <?php
     }
 }
      ?>
      <br>
      <div class="amount"> 
    <h4 style="float:right;margin-right:330px;position:relative;top:-30px;">Sub Total : </h4> 
    <h4 style="float:right;margin-right:-137px;position:relative;top:-30px;">₹</h4> 
    <h4 style ="float:right;margin-right:-195px;position:relative;top:-30px;" id = "stotal"></h4>
    <h5 style ="float:right;margin-right:-113px;position:relative;top:10px;">GST (5%) :</h5>
    <h5 style ="float:right;margin-right:-160px;position:relative;top:10px;">₹</h5>   
    <h5 style ="float:right;margin-right:-195px;position:relative;top:10px;" id="mygst"></h5> 
    <hr style="position:relative;width:245px;top:45px;left:1040px;" color="black" size=4> 
    <h4 style="float:right;margin-right:-113px;position:relative;top:35px;">Grand Total : </h4> 
    <h4 style="float:right;margin-right:-162px;position:relative;top:35px;">₹</h4> 
    <h4 style ="float:right;margin-right:-220px;position:relative;top:35px;" id = "gtotal"></h4>
    <hr style="position:relative;width:245px;top:72px;left:1040px;" color="black" size=4>
      </div> 
    <form action="cart.php" method="POST">
    <button class="btn btn-danger" style="position:relative;float:right;top:70px;right:-90px;"name="Clear_Items">Clear Cart</button>
    </form>
    <form action="login.php" method="POST">
    <input type="submit" name="Buy" value="Proceed to buy"class="btn btn-primary" style="position:relative;float:right;top:70px;right:-330px;">
    </form>
        <footer style="margin-top:158.5px;"> 
            <div class="container">
              <div class="footer-content">
               <div class="footer-column1">
                 <h4 style="text-transform: uppercase; color:yellow">About Us</h4>
                 <p style="margin-top: 15px;">We are passionate about making a positive impact on the environment. Our mission is to collect and responsibly recycle electronic waste e-waste, paper, and clothes to promote sustainability. </p>
               </div>
               <div class="footer-column">
                 <h4 style="text-transform: uppercase; color:yellow">&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Quick links</h4>
                 <ul style="margin-top: 15px;">
                  <a href="../templates/subscription.php" class="quick"><li> &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Subscription</li></a>
                  <a href="../templates/about.php" class="quick"><li> &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;About Us</li></a>
                  <a href="../templates/contact.php" class="quick"><li> &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Contact Us</li></a>
                  <a href="../templates/feedback.php" class="quick"><li> &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Feedback</li></a>
                   </li>
                 </ul>
               </div>
                <div class="footer-column">
                  <h4 style="text-transform: uppercase;color:yellow">&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Contact Us</h4>
                  <p style="margin-top: 15px;">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Email: let'sclean@gmail.com</p>
                  <p>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; Phone : 982-456-7890</p>
                  <p>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Address: 593 Ganesh Peth, &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Near Balaji Mandir,Pune-42.</p>
                </div>
                <div class="footer-column">
                  <h4 style="text-transform: uppercase;color:yellow">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Follow Us</h4>
                  <ul class="social-icons">
                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<li><a href="https://www.whatsapp.com/" class="fab fa-whatsapp"></a></li>
                    <li><a href="https://twitter.com/" class="fab fa-twitter"></a></li>
                    <li><a href="https://www.instagram.com/" class="fab fa-instagram"></a></li>
                    <li><a href="https://www.linkedin.com/feed/" class="fab fa-linkedin-in"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-bottom">
             <hr size="2" color="#fff">
              <p style="color: #fff;">&copy; 2023 Let's Clean. All rights reserved.</p>
            </div>
          </footer>      
    </div>
    <script>
      const body = document.querySelector('body');
      toggle = document.querySelector('.toggle');
    
      let getMode = localStorage.getItem('mode');
      if(getMode && getMode === 'dark'){
          body.classList.toggle('dark');
          toggle.classList.toggle('active');
    
      }
    
      toggle.addEventListener('click',() =>{
          body.classList.toggle('dark');
    
          if(!body.classList.contains('dark')){
              return localStorage.setItem('mode','light');
          }
          localStorage.setItem('mode','dark')
      })
      toggle.addEventListener('click',() => toggle.classList.toggle('active'));
    </script>
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
      function subTotal(inputField)
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
      }
      
      function updateQuantity(inputField) {
    const productId = inputField.getAttribute('data-id');
    const newQuantity = inputField.value;

    // Send an AJAX request to update the quantity in the database
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response if needed
            console.log(xhr.responseText);
        }
    };
    xhr.open('POST', 'update_quantity.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(`product_id=${productId}&quantity=${newQuantity}`);
}

    </script>
    <script>
        var remove=document.getElementsByClassName('remove');
        for(var i=0;i<remove.length;i++){
            remove[i].addEventListener("click",function(event){
                var target=event.target;
                var cart_id =target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange=function(){
                    if(this.readyState==4 && this.status==200){
                        target.innerHTML= this.responseText;
                        target.style.opacity = .5;
                        setTimeout(function() {
                        window.location.reload();
                        }, 300);
                    }
                }
                xml.open("GET","connection.php?cart_id=" + cart_id,true);
                xml.send();
            })
        }
    </script>

    <!-- Bootstrap Js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>