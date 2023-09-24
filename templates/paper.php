<?php
require_once 'connection.php';

$sql="SELECT * from product WHERE pcategory='Paper' ";
$all_product=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper Products</title>
    <link rel="stylesheet" href="../static/category.css">
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
<main>
<h2 class="text-center" style="font-family:'Poppins';">Paper Products</h2>
  <?php
  while($row = mysqli_fetch_assoc($all_product)){ 
  ?>
  <div class="card">
      <div class="image">
      <a href="product_info?id=<?php echo $row['pid'];?>"><img src="../static/images/<?php echo $row['imgupload'];?>"></a>
      </div>
      <div class="caption">
          <p class="product_cat" style="font-size: 16px;color: rgba(0, 0, 0, 0.750);"><?php echo $row['pcategory'];?></p>
          <h5 class="product_name" style="font-weight:bold;font-size: 21px;margin-top:-2px;"><?php echo $row['pname'];?> (&#8377;<?php echo $row['pprice'];?>)</h5>
      </div>
      <button class="add"  id="cartb" data-id="<?php echo $row['pid'];?>">Add to Cart</button>
  </div>
  <?php
  }
  ?> 
</main>
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
      function search(){
        let filter = document.getElementById('find').value.toUpperCase();
        let item = document.querySelectorAll('.card');
        let l = document.getElementsByTagName('h5');
        for(var i = 0;i<=l.length;i++){
          let a=item[i].getElementsByTagName('h5')[0];
          let value=a.innerHTML || a.innerText || a.textContent;
          if(value.toUpperCase().indexOf(filter)>-1){
            item[i].style.display="";
          }
          else{
            item[i].style.display="none" ;
          }
        }
      }
    </script>
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
</body>
</html>