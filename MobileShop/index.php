<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Mart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Navbar.css">
    <link rel="stylesheet" href="slider.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <?php
    include "config.php";
    
        if (isset($_POST['submit'])) {
            $Name = $_POST['Name'];
            $email = $_POST['email'];
            $Number = $_POST['Number'];
            $message = $_POST['message'];
            $sql = "INSERT INTO `users`(`Name`, `email`, `Number`,`message`)
            VALUES ('$Name','$email','$Number','$message')";
            $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "New record created successfully.";
        }else{
            echo "Error:". $sql . "<br>". $conn->error;
        }
        $conn->close();
        }
?>

</head>
<body>
    <header class="header">
        <nav>
            <ul class="sidebar">
                <li onclick="hideSidebar(event)"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" fill="white"/>
                  </svg>
                  </a></li>
                <li><a href="#home">Home</a></li>
                <li><a href="#Products">Products</a></li>
                <li><a href="#about">About</a></li> 
                <li><a href="#Contact">Contact</a></li>
            </ul>
            
            <ul> 
                <li class="AppleMart"><img src="imges/am.png"></li>
                <li class="hideOnMobile"><a href="#home">Home</a></li>
                <li class="hideOnMobile"><a href="#Products">Products</a></li>
                <li class="hideOnMobile"><a href="#about">About</a></li>  
                <li class="hideOnMobile"><a href="#Contact">Contact</a></li> 
                <li class="menu-button" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="26">
                    <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" fill="white"/>
                  </svg>
                  </a>
                </li>
            </ul>
            
        </nav>
    </header>
    
    <script>
        let savedScrollPosition = 0;

        function showSidebar(){
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'flex';
            setTimeout(() => {
            // Restore the scroll position
            window.scrollTo(0, savedScrollPosition);
        }, 0); 
        }

        function hideSidebar(event){
            event.preventDefault();
            savedScrollPosition = window.scrollY;
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'none';
            savedScrollPosition = window.scrollY;
        }
    </script>


    <h2 class="welcome">Welcome to <span>Apple Mart</span></h2>
    <section class="home" id="home">
            <!--image slider start-->
        <div class="slider">
            <div class="slides">
                
            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!--radio buttons end-->
            <!--slide images start-->
            <div class="slide first">
                <img src="imges/img1.png" alt="">
            </div>
            <div class="slide">
                <img src="imges/img2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="imges/img3.jpg" alt="">
            </div>
            
            <!--slide images end-->
            <!--automatic navigation start-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                
            </div>
            <!--automatic navigation end-->
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            
            </div>
            <!--manual navigation end-->
        </div>
        <!--image slider end-->
    
        <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if(counter > 3){
                    counter = 1;
                }
            }, 5000);
        </script>
    </section>

    
    <section class="Products" id="Products"> 
        <h2 class="our">Our<span>Products</span></h2>
        <div class="mobile-container">
            <div class="mobiles">
                <img src="imges/mobiles.jpg" height="100px" >
            
                <div class="mobile-text">
                    <h3>iPhones</h3>
                    <p>Best iPhones<br>ever...!</p>
                    <a href="iPhones/products.php" class="cta-button">Shop Now</a>
                </div>
            </div>
            <div class="accesories">
                <img src="imges/acc/accessories.jpeg" height="100px" width="100%">
            
                <div class="mobile-text">
                    <h3>Accessories</h3>
                    <p>Genuine Products<br>to buy...!</p>
                    <a href="Accessories/products.php" class="cta-button">Shop Now</a>
                </div>
            </div>
            <div class="earphones">
                <img src="imges/acc/AirPods.png" height="100px">
            
                <div class="mobile-text">
                    <h3>Earphones</h3>
                    <p>Apple Sounds are<br>here...!</p>
                    <a href="Earphones/products.php" class="cta-button">Shop Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <h2 class="about-text">About<span>Us</span></h2>
        <p>
            Welcome to <b>Apple Mart</b>, your ultimate destination for cutting-edge iPhones and 
            unparalleled technology!<br> At Apple Mart, we pride ourselves on delivering an exceptional shopping experience that goes beyond just selling iPhones;<br> 
            we aim to redefine the way you connect, communicate, and express yourself through the latest Apple devices.<br>
            We are doing the best iPhone selling over the past 5 years.
        </p>
        <br>
        <div class="social">
            <h4>Follow us On Social-Media: </h4>
            <a href="#"><i class='bx bxl-facebook-circle' style='color:#273482' ></i></a>
            <a href="#"><i class='bx bxl-instagram' style='color:#f14ec0'></i></a>
            <a href="#"><i class='bx bxl-twitter' style='color:#31e6f3'></i></a>
        </div>


    </section>

    <section class="contact" id="Contact">
        <div class="contact-form">
            <h2>Contact<span>Us</span></h2>
            <form method="POST" action="" name="contact-me">
                <input type="text" name="Name" placeholder="Enter your Name" required>
                <input type="email" name="email" placeholder="Enter your Email" required>
                <input type="text" name="Number" placeholder="Enter Your Number" required>
                <textarea  name="message" id="" cols="40" rows="10" placeholder="Enter you problem"></textarea>
                <input type="submit" value="submit" class="send" id="submit" name="submit">
            </form>
        </div>
    </section>

    <div class="last-text">
        <p> Developed By Malith Dodangoda © 2024<br>
            Location : "Apple Mart",No17,1st floor,Liberty Plaza,Colombo.
            <br>
            Contact : +94776386633
        </p>
    </div>

    <button id="scrollToTopBtn" onclick="scrollToTop()"> ↑</button>
    <script>

            /**Scroll up to home button */
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
            }

            // Show the button when scrolling down
            window.onscroll = function() {
            showScrollButton();
            };

            function showScrollButton() {
            var scrollToTopBtn = document.getElementById('scrollToTopBtn');
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopBtn.style.display = 'block';
            } else {
                scrollToTopBtn.style.display = 'none';
            }
            }
        
    </script>
    

</body>
</html>