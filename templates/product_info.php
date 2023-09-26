<?php
$host = 'localhost';
$username ='root';
$password = '';
$dbname = 'product_details';

$con = mysqli_connect($host,$username,$password,$dbname);

$id="";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
$sql_query="SELECT * from product WHERE pid = $id";
$myresult=$con->query($sql_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Information</title>
    <link rel="stylesheet" href="../static/pstatic.css">
    <!-- Bootstrap Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <!--FontAwesome CDN-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
  <div class="mynavbar">
    <nav>
        <a href="../templates/home.php" class="alink1"><img class="logo" src="../static/images/22baf73169f8401fb664a518b53c35aa-Lets Clean - Logo-01.png"></a>
            <input type="text" placeholder="Search by product name" id="find" onkeyup="search()" class="inp_text1">
        <ul>
        <a href="../templates/cart.php"><li class="myli"><i class="fa-solid fa-cart-plus icon" style="position: relative;top:5px;font-size: 23px;color:green;" ></i>  
          <span class="span1" id="badge" style="  position: relative; width:10px;height:50px;top:-26px;right:27%;background: green;color: white; border-radius: 50%;padding:2px 6px;font-size: 14px;">0</span>
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
    </div>
    <?php
     if($myresult->num_rows >0)
     {
        while($row = $myresult->fetch_assoc())
        {
      ?>
    <div class="section">
    <div class="column">
        <img src="../static/images/<?php echo $row['imgupload'];?>" alt="Avatar" class="homeImg">
        </div>
        <div class="column">
            <h3 class="h3one"><?php echo $row['pname'];?></h3>
            <p class="p1"><?php echo $row['pcategory'];?></p>
            <span class="heading">4.0</span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star notchecked"></span>
            <hr style="margin-left:200px;width:300px;margin-bottom:-40px;">
            <h4 name="price">&#8377;<?php echo $row['pprice'];?><span class="myspan"> (-10%)</spa></h4>
            <h5>About this item</h5>
            <ul>
                <li><?php echo $row['d1'];?></li>
                <li><?php echo $row['d2'];?></li>
                <li><?php echo $row['d3'];?></li>
                <li><?php echo $row['d4'];?></li>
            </ul>
        </div>
        <div class="column">
          <div class="card">
        <h3 class="h3two">&#8377;<?php echo $row['pprice'];?></h3>
        <p class="p2">In stock</p>
        <p class="p3">Free delivery available.</p>
        <p class="p4">Estimated delivery between 2-3 <br>days.</p> 
        <hr>
        <p class="p5">Sold by Product Recyclers Private  <br> Ltd.</p>
        <button class="add" id="cartb" data-id="<?php echo $row['pid'];?>">Add to Cart</button> 
        <?php
     }
 }
      ?>
        <a href="../templates/login.php"><button class="buyb">Buy Now</button></a> 
          </div>
          </div>
        </div>
        </div><br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <div>
        <footer>
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
      var product_id=document.getElementsByClassName('add');
      for(var i=0;i<product_id.length;i++){
          product_id[i].addEventListener("click",function(event){
              var target=event.target;
              var id =target.getAttribute("data-id");
              var xml = new XMLHttpRequest();
              xml.onreadystatechange=function(){
                  if(this.readyState==4 && this.status==200){
                      var data = JSON.parse(this.responseText);
                      target.innerHTML= data.in_cart;
                      document.getElementById('badge').innerHTML = data.num_cart + 1;
                  }
              }
              xml.open("GET","connection.php?id=" + id,true);
              xml.send();
          })
      }
    </script>
    <!-- Bootstrap Js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>