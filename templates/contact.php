<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
  $myname1 = $_POST['myname1'];
  $email1 = $_POST['email1'];
  $phone1 = $_POST['phone1'];
  $msg1 = $_POST['msg1'];

  $host = 'localhost';
  $username ='root';
  $password = '';
  $dbname = 'contact_detail';

  $conn = new mysqli($host, $username, $password, $dbname);

  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO contact_form(myname1,email1,phone1,msg1) VALUES('$myname1','$email1','$phone1','$msg1')";
  if ($conn->query($sql) === TRUE) 
  {
    $response = "Data inserted successfully!";
  } 
  else 
  {
    $response = "Error: " . $sql . "<br>" . $conn->error;
  }

// Close the database connection
$conn->close();

// Send the response back to the JavaScript
echo json_encode($response);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../static/contact.css">
    <!-- Bootstrap Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <!--FontAwesome CDN-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <div>
      <section class="contact_us">
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1">
              <div class="contact_inner">
                <div class="row">
                  <div class="col-md-10">
                    <div class="contact_form_inner">
                      <div class="contact_field">
                        <h3 style="font-style: italic;">Contact Us</h3>
                        <p style="font-size:large;font-style: italic;">Feel Free to contact us any time. We will get back to you soon!</p>
                        <form method="POST" action="contact.php" id="myForm">
                          <input type="text" class="form-control form-group" name="myname1" placeholder="Name" required>
                          <input type="text" class="form-control form-group" name="email1" placeholder="Email" required>
                          <input type="tel" class="form-control form-group" name="phone1" placeholder="Phone Number" required>
                          <textarea class="form-control form-group" name="msg1" placeholder="Message" required></textarea>
                          <button type="submit" class="contact_form_submit" onclick="send()" name="Submit">Submit</button>
                          <button type="reset"class="contact_form_submit">Reset</button>
                        </form>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="right_contact_social_icon d-flex align-items-end">
                        <div class="social_item_inner d-flex">
                          <a href="https://www.facebook.com/login/"><i class="fab fa-facebook"></i></a>
                          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="contact_info_sec">
                  <h2>Contact Info</h2>
                  <div class="d-flex info_single align-items-center">
                    <i class="fas fa-headset"></i>
                    <h6>+91 8009 054294</h6>
                  </div>
                  <div class="d-flex info_single align-items-center">
                    <i class="fas fa-envelope-open-text"></i>
                    <h6>info@let'sclean.com</h6>
                  </div>
                  <div class="d-flex info_single align-items-center">
                    <i class="fas fa-map-marked-alt"></i>
                    <h6>500+ active users and 25+ service cities across India.</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const myForm = document.getElementById("myForm");

            myForm.addEventListener("submit", function (e) {
                e.preventDefault(); // Prevent the form from actually submitting

                // Serialize form data
                const formData = new FormData(myForm);

                // Submit form data to the server
                fetch("http://localhost/Sem5Project/templates/contact.php", {
                    method: "POST",
                    body: formData,
                })
                    .then((response) => response.json())
                    .then((data) => {
                        // Show SweetAlert based on the response from the server
                        Swal.fire({
                            icon: "success",
                            title: "Form submitted successfully!",
                            text: data,
                        });
                    })
                    .catch((error) => {
                        Swal.fire({
                            icon: "success",
                            title: "Form submitted successfully!",
                            text: "Thank you for contacting us",
                        }).then(() => {
                        // Clear the form after successful submission
                        myForm.reset();
                    });
                        console.error("Error:", error);
                    })
            });
        });
    </script>
  
    <!-- Bootstrap Js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>