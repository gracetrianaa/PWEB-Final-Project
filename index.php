<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date)
    VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message[] = 'Reservation made successfully!';
    }else{
        $message[] = 'Reservation failed';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNO Reserve</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <!-- link to css-->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- header section -->
    <header class="header fixed-top">
        <div class="container">
            <div class="align-items-center justify-content-between" style="display: flex; flex-wrap: wrap">
                <a href="Home" class="logo">
                    <img src="images/unoreserve.svg">
                </a>
                <nav class="nav">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#experience">Experience</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#contact">Contact</a>
                </nav>

                <a href="#Contact" class="link-btn">Make Reservation</a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
   
    </header> 
    <!-- header section ends -->

    <!-- home section -->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content">
                    <h3>Serve you the Realness and Luxury of Coffee</h3>
                    <p>Warm Greetings, <b>Coffee Aficionados!</b></p>
                    <p>We choose and offer you our unequaled Coffee Beans from our own <b>FARM</b>. Make a <b>RESERVATION</b> now to taste a <b>LUXURY</b> in a Cup of Coffee.</p>
                    <a href="#Contact" class="link-btn">Make Reservation</a>
                </div>
            </div>
        </div>
    </section>
    <!-- home section ends -->

    <!-- about section -->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="images/about_img.png" id="page-image" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>About Us</span>
                    <h3>#1 Coffee Beans Farm, Roastery, and UNO Reserve</h3>
                    <p>UNO Reserve was established in 2000. Since then, we have been steadily producing TOP-GRADE numerous kinds of Coffee Beans to export accross the world and became the number UNO for our high-quality beans.
                        Not only being Coffee Beans Producer, we also offer experience to you, Coffee Aficionados, to learn about Coffee Beans through our farm & roastery. On top of the experience, you can enjoy the Coffee Beans at our luxurious
                        UNO Reserve made and served by our Certified Coffee Master Barista.</p>
                    <a href="#Contact" class="link-btn">Make Reservation</a>
                 </div>
            </div>
        </div>
    </section>
    <!-- about section ends -->

    <!-- experience section -->
    <section class="experience" id="experience">
        <h1 class="heading">Our Experience Package</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/icon-1.svg" alt="">
                <h3>Buy the Best Coffee Beans</h3>
                <p>Come to UNO Reserve to buy our High-Quality Beans that you can't find in other farm. We give you BEST DEALS!</p>
            </div>

            <div class="box">
                <img src="images/icon-2.svg" alt="">
                <h3>Coffee Farm Tour</h3>
                <p>We will take you to have a tour at our 1000 hectare coffee farm. You get to meet Lulu, Lala, and Lili, our adorable luwaks. Also, you're welcomed to taste every kind of beans we have. </p>
            </div>

            <div class="box">
                <img src="images/icon-3.svg" alt="">
                <h3>See UNO Reserve Roastery</h3>
                <p>Are you curious how the coffee beans are processed? Let's take a look at the process to sort the best beans and produce premium coffee grounds at UNO Reserve Roastery. </p>
            </div>

            <div class="box">
                <img src="images/icon-4.svg" alt="">
                <h3>Enjoy UNO Reserve UNO Reserve</h3>
                <p>Taste our artisan coffee which will be made by Our Certified Master Barista from 100% premium quality beans. Enjoy the uniqueness each beans bring, we guarantee you'll never forget the luxurious savor. Our Coffee Menu changes every season!</p>
            </div>

            <div class="box">
                <img src="images/icon-5.svg" alt="">
                <h3>Learn How to Make Coffee</h3>
                <p>Not enough being a coffee enjoyer? You can try a-day-course or even take a professional course at UNO Reserve. You will learn from Our World Champion Master Barista with reasonable price.</p>
            </div>

            <div class="box">
                <img src="images/icon-6.svg" alt="">
                <h3>Group Package at UNO Reserve</h3>
                <p>With a group consists of minimum 10 person, you can get the whole experience (Farm Tour, Roastery, UNO Reserve, Learn How to Make Coffee) with only Rp700.000/pax!</p>
            </div>

        </div>
    </section>
    <!-- experience section ends -->

    <!-- Farm, Roastery, UNO Reserve section -->
    <section class="spaces">
        <h1 class="heading">UNO Reserve SPACE</h1>

        <div class="box-container container">
            <div class="box">
                <img src="images/farm.svg" alt="">
                <h3>UNO Reserve Coffee Farm</h3>
                <p>Our pride, 1000 ha coffee farm, with more than 10 varieties of beans</p>
            </div>

            <div class="box">
                <img src="images/roastery.svg" alt="">
                <h3>UNO Reserve Roastery</h3>
                <p>Place to produce our highest-quality beans</p>
            </div>

            <div class="box">
                <img src="images/slow-bar.svg" alt="">
                <h3>UNO Reserve UNO Reserve</h3>
                <p>Our Sanctuary for you to luxuriate in</p>
            </div>

        </div>
    </section>

    <!-- Farm, Roastery, UNO Reserve section ends -->

    <section class="reviews" id="reviews">

        <h1 class="heading"> Coffee Aficionados </h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/Foto1.png" alt="">
                <p>UNO Reserve provides a unique, tranquil experience with a calm atmosphere and well-crafted drink selection. Despite slow service, it fosters intimacy and is perfect for a leisurely evening amid daily hustle.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Emily Anderson</h3>
                <span>Coffee Aficionados</span>
            </div>

            <div class="box">
                <img src="images/Foto2.png" alt="">
                <p>Slow Bar is a serene haven with a carefully curated drink menu and minimalist decor. Despite deliberate service, it fosters connections and offers a tranquil escape from the daily hustle—an ideal spot for a laid-back evening with friends or a loved one.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Sophia Johnson</h3>
                <span>Coffee Aficionados</span>
            </div>

            <div class="box">
                <img src="images/Foto3.png" alt="">
                <p>Rostery Coffee impresses with its rich, aromatic blends and meticulous roasting process. The cozy ambiance adds to the overall experience, making it a must-visit for coffee enthusiasts seeking a delightful cup in a welcoming setting.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Olivia Williams</h3>
                <span>Coffee Aficionados</span>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">

        <h1 class="heading">make Reservation</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="reservationForm">
            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<p class="message">' .$message. '</p>';
                    }
                }
            ?>
            <span>your name :</span>
            <input type="text" name="name" placeholder="Enter your name" class="box" required>
            <span>your email :</span>
            <input type="email" name="email" placeholder="Enter your email" class="box" required>
            <span>your phone number :</span>
            <input type="phone number" name="phone number" placeholder="Enter your phone number" class="box" required>
            <span>Reservation date :</span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" value="make Reservation" name="submit" class="link-btn">
        </form>

        <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Check if the URL contains a success status
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');

            if (status === 'Reservation made successfully!') {
                // Highlight the success message
                const successMessage = document.getElementById('successMessage');
                if (successMessage) {
                    successMessage.classList.add('highlight');
                }
            }
        });
        </script>

    </section>

    <section class="footer">
    <div class="box-container container">
    <div class="box">
        <i class="fas fa-phone"></i>
        <h3>phone number</h3>
        <p>+62851-1233-5955</p>
    </div>

    <div class="box">
        <i class="fas fa-map-marker-alt"></i>
        <h3>our address</h3>
        <p>Surabaya, Indonesia - 60111</p>
    </div>

    <div class="box">
        <i class="fas fa-clock"></i>
        <h3>open hours</h3>
        <p>09:00am to 17:00pm</p>
    </div>

    <div class="box">
        <i class="fas fa-envelope"></i>
        <h3>email address</h3>
        <p>unoreserve@gmail.com</p>
    </div>
    </div>

    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>UNO Reserve</span>  </div>
    
    <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
    </script>

   </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" rel="stylesheet"></script>
    <script src="js/script.js"></script>

</body>
</html>