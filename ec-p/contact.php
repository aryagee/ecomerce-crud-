<?php
 include ("connect.php");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>contact</title>
</head>

<body>
    <section id="header">
        <a href=""><img src="img/pulse.png" class="logo" alt=""></a>
        <div class="navop">
            <ul class="pages">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a class="active" href="">Contact</a></li>




            </ul>
        </div>

    </section>


    <section class="shopmsg aboutmsg">
        <h2>Contact Us</h2>
        <p>Leave a message or Follow on social</p>
    </section>

    <section id="contactus">
        <div class="contactdet">
            <p>Contact Us</p>
            <h2>Visits Us Physicaly or Conatct us </h2>
            <h4>Office Located</h4>
            <div class="cbox"><i class="fal fa-map"></i>
                <p>7 street main road near Al Fateh Plaza Faisalabad</p>
            </div>
            <div class="cbox"><i class="far fa-envelope"></i>
                <p>abcdef@gmail.com</p>
            </div>
            <div class="cbox"><i class="fas fa-phone"></i>
                <p>+92765765487</p>
            </div>
            <div class="cbox"><i class="far fa-clock"></i>
                <p>Monday to Saturday:8:00am to 10pm</p>
            </div>
        </div>
        <div class="contactloc">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217898.30125661078!2d72.92449001480519!3d31.42346604232468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392242a895a55ca9%3A0xdec58f88932671c6!2sFaisalabad%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1723278688300!5m2!1sen!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="contactform">
        <h1>Leave Your Message</h1>
        <form action="" method="post">
            <input type="text" name="fname" required placeholder="Name">
            <input type="email" name="mail" required placeholder="Email">
            <textarea name="inquiry" id="texts" required placeholder="Your Inquiry"></textarea>
            <input style="background-color:#088178;  width: 100px; padding: 10px 30px; color: white; border: none; border-radius: 5px;" type="submit" name="dsubmit" value="submit">
        </form>

        <?php
    if(isset($_POST["dsubmit"])){
      $f_name=$_POST["fname"];
      $e_mail=$_POST["mail"];
      $conact=$_POST["inquiry"];

      $query="INSERT INTO detail(name,email,purpose) VALUES('$f_name','$e_mail','$conact')";

      $data=mysqli_query($con,$query);
      if ($data) {
echo "<br>";
      echo "submited successfuly! we will reach you shortly.Thank you for patients";
      }
      else {
        echo "error";
      }
    }

     ?>
    </section>







    <footer>
        <div id="main">
            <div class="company">
                <img src="img/pulse.png" alt="">
                <h4>Contact</h4>
                <p><b>Address:</b> 654 street 2 main road Texas, USA</p>
                <p><b>Phone:</b> (+1)202 555 0118</p>
                <h4>Follow Us</h4>
                <div class="social">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
            </div>
            <div class="about">
                <h4>About</h4>
                <p>About Us</p>
                <p>Delivery Information</p>
                <p>Privacy Policy</p>
                <p>Terms & Condition</p>
                <p>Contact Us</p>
            </div>
            <div class="account about">
                <h4>My Account</h4>
                <p>Sign in</p>
                <p>View Cart</p>
                <p>My Wishlist</p>
                <p>Track My Order</p>
                <p>help</p>
            </div>

            <div class="payment about">
                <h4>About Payment</h4>
                <p>Secured Payment Gateways</p>
                <div class="gateway">
                    <i class="fa-brands fa-cc-visa"></i>
                    <i class="fa-brands fa-cc-mastercard"></i>
                    <img src="img/pay/payoneer.png" alt="">
                    <i class="fa-brands fa-cc-paypal"></i>
                    <i class="fa-brands fa-bitcoin"></i>

                </div>
            </div>

        </div>
        <div class="copyright">
            <p>©pulse 2018 Shopping Website International</p>
        </div>
    </footer>





    <script src="dynamics.js"></script>
</body>

</html>
