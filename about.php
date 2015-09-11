<!--
Author: Priscilla Then, Feb. 23, 2015
-->

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>About Me  |  Priscilla Then</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
   <?php include('includes/vertical-signature.php'); ?>

   <?php
        $page = "about";
        include('includes/header.php');
   ?>

    <div class="container">
        <div>
            <img src="images/headshot.png" class="right image-right" title="Me-Priscilla Then"
                 alt="headshot Priscilla Then">
            <h1>About Me</h1>
            <p>If you’re looking for a designer who understands the importance of designing for the end-user through conducting research and satisfying business goals over pretty designs, then read on. Although aesthetics are great for that "WOW!" factor and help to establish credibility and trust in your customers, a good-looking website alone isn’t worth much if the end user can’t find what they’re looking for, or complete a process easily.</p>
        </div>

        <div id="work">
            <h2>Work</h2>
            <p>I recently completed a stint as the principal Visual + UX Designer for SCC Northwest, an automotive accessories manufacturing company in Vancouver, B.C. It gave me a chance to work as a UX Designer, revamping their corporate branding and e-commerce  retail website.</p>
            <p>Before that, I worked as an independent designer for my own company, Biju Creative, for 3 years. It’s where I helped businesses from various industries to establish or revamp their visual branding, websites and social media. My experience running a business, and helping other entrepreneurs to gain exposure and increase their sales through design was my passion, gave me a sense of running a business, and of what makes a business successful.</p>
        </div>

        <div id="education" class="clearfix">
            <img src="images/me-work-table.png" class="left image-left" alt="Priscilla working with pen tablet">
            <h2>Education</h2>
            <p>After completing a bachelor’s degree in cognitive psychology from the University of British Columbia, I later obtained a second bachelor’s degree in graphic and interaction design from Université Laval in Quebec City. </p>
            <p>Cognitive psychology is especially important in the field of UX / UI design; an understanding of how people perceive, process and retain information lends itself well to the field of user interface design and communication materials.</p>
            <p>Currently, I’m taking courses in the Applied Web Development program at BCIT to be able to do both sides of web development: design AND code!</p>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>

</body>
</html>