<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../static/about.css">
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
    <img class="myImg" src="../static/images/CNL-garbage-3col.jpg" align="left" alt="">
    <p class="para">Welcome to <strong>Let's Clean </strong>, your one-stop destination for embracing a greener lifestyle. Our platform is dedicated to making a positive impact on the environment through effective waste collection and recycling practices. We firmly believe that every individual, company, and community has a crucial role to play in shaping a sustainable future.
      Our mission is to make waste recycling easy and accessible for everyone. </p>
      <center><h2>About Us</h2></center>
      <hr class="parahr">
          <p class="para1"><!--Our waste collection service covers four primary categories: clothes, plastic, e-waste, and paper. Customers can choose from three flexible subscription packages that align with their recycling needs and environmental goals.
            
            In our Basic Package, customers can responsibly dispose of clothes and plastic waste. This subscription is perfect for individuals who want to start their eco-friendly journey by contributing to clothing and plastic recycling efforts.
            
            For those seeking to further reduce their environmental impact, our Premium Package includes the collection of clothes, plastic, and e-waste. Electronic waste, often improperly discarded, poses significant environmental hazards. With this package, customers can rest assured that their old electronics will be safely recycled, diverting them from landfills.
            
            Our Ultimate Package is designed for eco-conscious individuals and businesses aiming to make a comprehensive environmental impact. This package collects clothes, plastic, e-waste, and paper waste. Paper recycling is essential for conserving trees and reducing deforestation, making this package an ideal choice for those who are passionate about protecting natural resources.
            
            To get started, customers can easily sign up for their preferred subscription through our user-friendly website. Once subscribed, we provide regular waste collection services based on the selected package, ensuring a seamless experience for our environmentally conscious community. <br> <br> -->
            
            At Let's Clean, we prioritize responsible and sustainable waste management. Our team is well-trained in waste handling and recycling best practices, ensuring that collected materials are processed ethically and efficiently.
            
            We take pride in our transparent approach to waste management. Customers can track their recycling progress, witnessing the tangible impact of their contributions to a cleaner environment.
            
            Community engagement is at the heart of our service. We actively collaborate with local communities, educational institutions, and businesses to raise awareness about waste management and the importance of recycling.
            
            Our aim is not just to collect waste but also to educate and inspire change. Through informative content and interactive workshops, we empower our customers to embrace sustainable practices in their daily lives.
            
            By joining let's clean, individuals and businesses become valuable partners in a global effort to combat waste pollution and environmental degradation. Together, we can build a <strong>brighter future</strong> for generations to come.
            </p>
  </main> <br>     
    </div>
    <div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <div class="collection-container">
          <div class="collection-card">
            <center> <p style="color: #7bb661;"class="fa-solid fa-shirt fa-3x " ></p></center> 
            <div class="item">
              <h4 style="margin-left: 113px;">Cloth</h4></div>
              <p class="para2"> Please donate clean and wearable clothes for those in need.  "We collect clothes through our website and donate them to those in need, making a positive impact on the community."</p>
          </div>
        
          <div class="collection-card">
            <center> <p style="color: #7bb661;"class="fa-solid fa-scroll fa-3x " ></p></center>
            <div class="item">
              <h4 style="margin-left: 112px;">Paper</h4></div>
              <p> Recycle your paper waste to help protect the environment.  "Through our paper collection initiative, we collect used paper and recycle it, contributing to a greener and more sustainable environment."</p>
          </div>
        
          <div class="collection-card">
            <center> <p style="color: #7bb661;"class="fa-solid fa-biohazard fa-3x " ></p></center>
            <div class="item">
              <h4 style="margin-left: 103px;">E-waste</h4></div>
              <p>We collect e-waste to ensure responsible recycling, safeguarding the environment from harmful electronic waste."Safely dispose of electronic waste at our designated collection points.</p>
          </div>
        
          <div class="collection-card">
            <center> <p style="color: #7bb661;"class="fa-solid fa-recycle fa-3x " ></p></center>
            <div class="item">
              <h4 style="margin-left: 115px;">Others</h4></div>
              <p>Dispose of other recyclable items responsibly. "We responsibly dispose of various recyclable items, contributing to a cleaner and eco-friendly future."</p>
          </div>
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