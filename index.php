<!--
Author: Priscilla Then, Feb. 2015
The Portfolio Page is the "index" page.

Note to Jeff: Due to time constraints, only Portfolio Items 1, 3, and 5 are clickable. (The remaining items will be added in future.)
-->

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Portfolio  |  Priscilla Then</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

    <?php include('includes/vertical-signature.php'); ?>

    <?php
        $page = "index";
        include('includes/header.php');
    ?>

    <div id="portfolio-items" class="container">
        <h1>Portfolio</h1>
        <ul>
            <li>
                <a href="portfolio-items/fafia.php" title="FAFIA" class="color-change">
                    <img src="images/b-w/fafia.jpg" alt="FAFIA project thumbnail">
                    <h2>FAFIA</h2>
                    <p>Branding, Website Redesign</p>
                </a>
            </li>
            <li>
                <a href="portfolio-items/nwseatcovers.php" title="NW Seatcovers" class="color-change">
                    <img src="images/b-w/nw.jpg" alt="NW project thumbnail">
                    <h2>NW Seatcovers</h2>
                    <p>Web Banner, e-Flyer</p>
                </a>
            </li>
            <li>
                <a href="portfolio-items/dexpan.php" title="Dexpan Canada" class="color-change">
                    <img src="images/b-w/dexpan.jpg" alt="Dexpan project thumbnail">
                    <h2>Dexpan Canada</h2>
                    <p>Branding, e-Commerce Website</p>
                </a>
            </li>
            <li>
                <a href="portfolio-items/eurostile.php" title="Eurostile" class="color-change">
                    <img src="images/b-w/eurostile.jpg" alt="Eurostile booklet thumbnail">
                    <h2>Eurostile</h2>
                    <p>Booklet Design, Copywrighting</p>
                </a>
            </li>
            <li>
                <a href="portfolio-items/vivre-en-ville.php" title="Vivre en Ville" class="color-change">
                    <img src="images/b-w/vivre.jpg" alt="Vivre en Ville thumbnail">
                    <h2>Vivre en Ville</h2>
                    <p>Logo, Stationery</p>
                </a>
            </li>
            <li>
                <a href="portfolio-items/norsk.php" title="Norsk Interior Design" class="color-change">
                    <img src="images/b-w/norsk.jpg" alt="Norsk Interior Design thumbnail">
                    <h2>Norsk Interior Design</h2>
                    <p>Branding, Website Redesign</p>
                </a>
            </li>
        </ul>
    </div>

    <?php include('includes/footer.php'); ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        // When the page is ready, execute the function
        $(document).ready(function(){

            $('.color-change').hover(function(){
                // When the user goes IN of the color change box

                // Select the image inside the a tag
                var image = $(this).find('img');

                // Select the source of the image (Ex. : images/b-w/image.png)
                var imageSource = image.attr('src');

                // Transform the b-w by color
                imageSource = imageSource.replace('b-w', 'color');

                // Replace the image source by the new one
                image.attr('src', imageSource);
            }, function(){
                // When the user goes IN of the color change box

                // Select the image inside the a tag
                var image = $(this).find('img');

                // Select the source of the image (Ex. : images/color/image.png)
                var imageSource = image.attr('src');

                // Transform the color by b-w
                imageSource = imageSource.replace('color', 'b-w');

                // Replace the image source by the new one
                image.attr('src', imageSource);
            });

        });
    </script>
</body>
</html>