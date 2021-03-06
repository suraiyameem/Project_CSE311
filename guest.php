<?php
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome to Hotel Seabreeze</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="style.css">
    
</head>	

	<body>
        <div>
      
		<div id="maindiv">
			<div id="topPanel">
                <a href="guest.php">
                 <img id="logo" src= "logo.png" width="300px" height="96px" alt="Photo Unavailable">   
                </a>
            
            <div id="buttons">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Facilities</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="guest_login.html">Log out</a></li>
                </ul>
            </div>
        </div>

<div id="cards">
    <div class="heading">
        <h1>Our Rooms and Suites</h1><br>
    </div>
        <div class="container">
            <div class="row slider">
                <!---Deluxe king--->
                <div class="col-md-12">
                    <div class="details">
                        <h2>Deluxe King</h2><br><br><br>
                        <a href="#">Check out the Room</a>
                    </div>
                </div>
                <!---Deluxe twin--->
                <div class="col-md-12">
                    <div class="details">
                        <h2>Deluxe Twin</h2><br><br><br>
                        <a href="#">Check out the Room</a>
                    </div>   
                </div>

                <!---premium king--->
                <div class="col-md-12">
                    <div class="details">
                        <h2>Premium King</h2><br><br><br>
                        <a href="#">Check out the Room</a>
                    </div>
                </div>


                <!---Presidential Suite-->
                <div class="col-md-12">
                    <div class="details">
                        <h2>Presidential Suite</h2><br> 
                        <a href="#">Check out the Room</a>
                    </div>
                </div>


                <!---Royal Suite-->
                <div class="col-md-12">
                    <div class="details">
                        <h2>Royal Suite</h2><br><br><br>
                        <a href="#">Check out the Room</a>
                    </div>
                </div>

                <!--Honeymoon Suite-->
                <div class="col-md-12">
                    <div class="details">
                        <h2>Honeymoon Suite</h2><br>
                        <a href="#">Check out the Room</a>
                    </div>
                </div>
            </div>
        </div>
        </div>


<!--description-->
        <div id="description_div">
            <div id="description">
                <h1>Welcome to<br>Hotel Seabreeze</h1><br>
            <p>
                A few steps away from the longest sea beach of<br> 
                the world, Hotel Seabreeze is in a great location for enjoying<br> 
                the rural areas of Coxs Bazar. The 81 modern rooms and suites<br> 
                at our hotel include high-speed Wi-Fi as well as complimentary<br> 
                tea and coffee facilities. Along with a spacious lobby and<br> 
                a stunning outdoor swimming pool, our hotel provides daily <br>breakfast buffet that<br>
                sets you up for a successful day of business meetings or sightseeing.<br>
            </p>
            </div>

<!--image slides-->
        <div class="img-area">
                <div class="img-slide">

                    <div class="single-img1">
                        <img src="images/room1.jpg" alt="Photo Unavailable">
                    </div>  

                    <div class="single-img2">
                        <img src="images/lobby.jpg" alt="Photo Unavailable">
                    </div>

                    <div class="single-img3">
                        <img src="images/balconyview.jpg" alt="Photo Unavailable">
                    </div>

                    <div class="single-img4">
                        <img src="images/swimmingpool.jpg" alt="Photo Unavailable">
                    </div>

                    <div class="single-img5">
                        <img src="images/beach.jpg" alt="Photo Unavailable">
                    </div>

                </div>
            </div>
        <div id="bottomPanel">
            <img id="bottomlogo" src="logo.png">
            <h2>123 Avenue, NorthSouth City, Dhaka</h2>
            <p class="info">Contact: +8801712345678<br><br>All rights reserved</p>  
            
            
        </div>


<!--main div ending-->
</div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="text/javascript">


        $('.slider').slick({
            loop:true,
            margin:10,
  nav:true,
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: '<span class="priv_arrow"><i class="fas fa-angle-left"></i></span>' ,
  nextArrow: '<span class="next_arrow"><i class="fas fa-angle-right"></i></span>' ,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
    </script>
     
     </div>
		</body>
        </html>