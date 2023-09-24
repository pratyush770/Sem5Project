<?php
require_once 'connection1.php';

$sql="SELECT * FROM subscription";
$all_sub=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
    <link rel="stylesheet" href="../static/subscription.css">
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
    <header>
      <ul>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="active"><i class="fa-solid fa-basket-shopping"></i>
              Shop by Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../templates/ewaste.php"><span class="drop_span1">E-Waste</span></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../templates/plastic.php"><span class="drop_span2">Plastic Waste</span></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../templates/paper.php"><span class="drop_span3">Paper</span></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../templates/cloth.php"><span class="drop_span4">Clothes</span></a></li>
            </ul>
            <a href="../templates/subscription.php" class="alink"><li class="active"><i class="fa-solid fa-sack-dollar"></i> Subscription </li> </a>
            <a href="../templates/about.php" class="alink"><li class="active1" id="about_us"><i class="fa-solid fa-circle-info"></i> About Us</li></a>
          <a href="../templates/contact.php" class="alink"><li class="active"><i class="fa-solid fa-phone"></i> Contact Us</li></a>
          <a href="../templates/feedback.php" class="alink"><li class="active"><i class="fa-solid fa-clipboard"></i> Feedback</li> </a>
      </ul>
  </header>
    </div>
    <h2 class="subhead">Our Subscription</h2>
    <div class="subscription-container">
    <?php
     while($row = mysqli_fetch_assoc($all_sub)){ 
  ?>
  <div class="subscription-card">
        <h2 class="head"><?php echo $row['plan'];?></h2>
        <hr>
          <h2 class="head1"> Number of buildings : <?php echo $row['wing'];?> wing</h2>
          <p> <i class="fa-solid fa-square-check icon"></i>&nbsp;&nbsp;Plastic Waste Collection</p>
          <p><i class="fa-solid fa-square-check icon"></i>&nbsp;&nbsp;Paper Waste Collection</p>
          <p><i class="fa-solid fa-square-check icon"></i>&nbsp;&nbsp;Cloth Waste Collection</p>
          <p><i class="fa-solid fa-square-check icon"></i>&nbsp;&nbsp;E-waste Collection</p>
        <p><strong>Price: &#8377;<?php echo $row['sprice'];?> </strong></p>
       <a href="subscription_form.php?id=<?php echo $row['id'];?>" style="text-decoration:none;"><button type="submit">Schedule Pickup</button></a>
        </form>
      </div>
      <?php
  }

  ?>
  </div>
    <div>
        <footer>
            <div class="container">
              <div class="footer-content">
               <div class="footer-column1">
                 <h4 style="text-transform: uppercase; color:yellow">About Us</h4>
                 <p style="margin-top: 15px;">We are passionate about making a positive impact on the environment. Our mission is to collect and responsibly recycle electronic waste e-waste, paper, and clothes to promote sustainability. </p>
               </div>
               <div class="footer-column">
                 <h4 style="text-transform: uppercase; color:yellow" class="quick_li">&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Quick links</h4>
                 <ul style="margin-top: 15px;">
                  <a href="../templates/subscription.php" class="quick"><li class="quick_li1"> &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Subscription</li></a>
                  <a href="../templates/about.php" class="quick"><li class="quick_li2"> &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;About Us</li></a>
                  <a href="../templates/contact.php" class="quick"><li class="quick_li3"> &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Contact Us</li></a>
                  <a href="../templates/feedback.php" class="quick"><li class="quick_li4"> &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Feedback</li></a>
                   </li>
                 </ul>
               </div>
                <div class="footer-column">
                  <h4 style="text-transform: uppercase;color:yellow" class="contact">&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Contact Us</h4>
                  <p style="margin-top: 15px;" class="contact_p1">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;Email: <span class="con_span1">let'sclean@gmail.com</span></p>
                  <p class="contact_p2">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; Phone : 982-456-7890</p>
                  <p class="contact_p3">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Address: 593 Ganesh <span class="con_span2"> Peth, </span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="con_span3">Near Balaji </span> <span class="con_span4">Mandir, Pune.</span></p>
                </div>
                <div class="footer-column">
                  <h4 style="text-transform: uppercase;color:yellow" class="follow">&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Follow Us</h4>
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
    <!-- Bootstrap Js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>