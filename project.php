<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Portfolio  |  Dexpan</title>
    <link rel="stylesheet" href="css/style.css">
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

            // If the template exists, include it
            if(file_exists("portfolio-items/$item.php")) {
                // 2. Include the corresponding template
                // Ex.: project.php?item=dexpan => portfolio-items/dexpan.php
                include("portfolio-items/$item.php");
            }
            // Otherwise, display a not found error
            else {
                include("portfolio-items/not-found.php");
            }
        ?>
    </div>
    <?php
        include('includes/portfolio-items.php');
        include('includes/footer.php');
        include("includes/scripts.php");
        include("includes/analyticstracking.php");
    ?>
</body>
</html>