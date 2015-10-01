<?php
    if(!empty($_POST))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = 'priscillathen@gmail.com';

        $headers = "From: $name <$email>\r\n";

        if(!empty($name) && !empty($email) && !empty($message)) {
            $headers = "From: $name <$email>\r\n";
            @mail($to, 'Contact from my portfolio', $message, $headers);
            $headers = 'From: Priscilla Then <priscillathen@gmail.com>'."\r\n";
            @mail($email, 'Your message to priscilla', $message, $headers);

            $_SESSION['feedback'] = "Your message has been sent!";
        }
    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Contact  |  Priscilla Then</title>
    <link rel="stylesheet" href="css/style.css">
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB-WGnVqoJiqV5Xd9WWj9bfK8jI30LwEY&callback=initialize"></script>
    <script>
        function initialize() {
            // Create map
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: new google.maps.LatLng(49.2845419, -123.1245691),
                zoom: 13,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);

            // Create map marker
            var image = './images/map-pin.png';
            var marker = new google.maps.Marker({
                position: {lat: 49.2832949, lng: -123.122801617},
                map: map,
                icon: image
            });
        }
    </script>
</head>

<body class="bg-dark">

    <?php
        $page = "contact";
        include('includes/vertical-signature.php');
        include('includes/header.php');
    ?>

    <div id="wrapper">
        <div class="container clearfix">
            <div id="map-canvas"></div>
            <section id="contact">
                <h1>Contact Me</h1>
                <p>I'm located in downtown Vancouver's West End, and am open to full-time or contract opportunities. If you like what you see and want to chat, don't hesitate to give me a shout!</p>
                <ul id="contact-info">
                    <li>
                        <a href="mailto:priscillathen@gmail.com"><i class="fa fa-envelope"></i>priscillathen<i class="fa fa-at"></i>gmail.com</a>
                    </li>
                    <li>
                        <a href="tel:16047716506"><i class="fa fa-mobile-phone"></i>604.771.6506</a>
                    </li>
                    <li>
                        <a href="http://linkedin.com/in/priscillathen/en" target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i>LinkedIn</a>
                    </li>
                    <li>
                        <a href="http://twitter.com/priscillathen" target="_blank" title="Twitter"><i class="fa fa-twitter"></i>Twitter</a>
                    </li>
                    <li>
                        <a href="http://www.facebook.com/priscilla.biju" target="_blank" title="Facebook"><i class="fa fa-facebook"></i>Facebook</a>
                    </li>
                </ul>
            </section>
            <form id="employer-form" method="POST">
                <fieldset id="company">
                    <legend>
                        <h2>Email Me</h2>
                    </legend>
                    <?php if(isset($_SESSION['feedback'])):?>
                        <p><?php echo $_SESSION['feedback'];?></p>
                    <?php unset($_SESSION['feedback']); endif;?>
                    <ul class="radio-btn">
                        <li>
                            <label for="name">Name:</label>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </li>
                        <li>
                            <label for="email">Email:</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </li>
                        <li>
                            <label for="message">Message:</label>
                            <textarea name="message" placeholder="Write your message here" required></textarea>
                        </li>
                        <li>
                            <button type="submit">Submit</button>
                        </li>
                    </ul>
                </fieldset>
            </form>
        </div>
    </div>

    <?php
        include('includes/footer.php');
        include("includes/scripts.php");
        include("includes/analyticstracking.php");
    ?>

</body>
</html>