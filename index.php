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

    <?php
        $page = "index";
        include('includes/vertical-signature.php');
        include('includes/header.php');
        include('includes/portfolio-items.php');
        include('includes/footer.php');
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