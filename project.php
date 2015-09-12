<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Portfolio  |  Dexpan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php
        $page = "project";
        include('includes/vertical-signature.php');
        include('includes/header.php');
    ?>

    <div class="container full-width item-page clearfix">
        <?php
            // 1. Fetch the variable in the URL
            $item = $_GET['item'];

            if(file_exists("portfolio-items/$item.php")) {
                // 2. Include the corresponding template
                include("portfolio-items/$item.php");
                // Ex.: project.php?item=dexpan => portfolio-items/dexpan.php
                // Ex.: project.php?item=fafia
            }
            else {
                include("portfolio-items/not-found.php");
            }
        ?>
    </div>

    <div class="container">
        <?php include('includes/portfolio-items.php'); ?>
    </div>

    <?php include('includes/footer.php'); ?>

</body>
</html>