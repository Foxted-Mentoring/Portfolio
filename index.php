<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Portfolio  |  Priscilla Then</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        $page = "index";
        include('includes/vertical-signature.php');
        include('includes/header.php');
        include('includes/portfolio-items.php');
        include('includes/footer.php');
        include_once("includes/analyticstracking.php");
    ?>

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