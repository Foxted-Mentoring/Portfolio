<!--
Author: Priscilla Then, Feb. 2015
-->

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Contact  |  Priscilla Then</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: new google.maps.LatLng(49.2845419, -123.1245691),
                zoom: 13,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
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
                <p>I'm located in downtown Vancouver's West End. Though I'm currently accepting only small freelance projects, I'm always open to new and exciting opportunities. If you like what you see and want to chat, give me a shout!</p>
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
            <!--
            FORM
            -->
            <form id="employer-form" method="post" action="http://bcitcomp.ca/1850/comp1850_homework05.php">
                <section>
                    <h2>Email Me</h2>
                    <fieldset id="company">
                        <legend>Company & Contact Info</legend>
                        <ul class="radio-btn">
                            <li>
                                <label for="firstname">First Name:</label>
                                <input type="text" name="firstname" id="firstname" alt="first name" cols="20" rows="1">
                            </li>
                            <li>
                                <label for="lastname">Last Name:</label>
                                <input type="text" name="lastname" id="lastname" alt="last name" cols="20" rows="1">
                            </li>
                            <li>
                                <label for="lastame">Title:</label>
                                <input type="text" name="title" id="title" alt="title" cols="20" rows="1">
                            </li>
                            <li>
                                <label for="company">Company:</label>
                                <input type="text" name="company" id="company" alt="company name organization" maxlength="50">
                            </li>
                            <li>
                                <label for="phone">Phone:</label>
                                <input type="text" name="phone" id="phone" alt="company phone" maxlength="11">
                            </li>
                            <li>
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" alt="email address" maxlength="30">
                            </li>

                        </ul>
                    </fieldset>

                    <fieldset id="position">
                        <legend>Position</legend>
                        Looking to fill the position of:<br />
                        <ul class="radio-btn">
                            <li>
                                <input type="radio" name="position" id="graphic-designer" class="checkbox" value="graphic-designer"><label for="graphic-designer">Graphic Designer</label>
                            </li>
                            <li>
                                <input type="radio" name="position" id="web-designer" class="checkbox" value="web-designer"><label for="web-designer">Web Designer</label>
                            </li>
                            <li>
                                <input type="radio" name="position" id="ui-designer" class="checkbox" value="ui-designer"><label for="ui-designer">UI Designer</label>
                            </li>
                            <li>
                                <input type="radio" name="position" id="ux-designer" class="checkbox" value="ux-designer"><label for="ux-designer">UX Designer</label>
                            </li>
                        </ul>
                    </fieldset>
                    <textarea name="comments" id="comments" alt="additional comments" cols="48" rows="12" placeholder="Additional Comments"></textarea>

                    <button type="submit">Submit</button>

                </form>
            </section>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>

</body>
</html>