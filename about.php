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
    <?php
        $page = "about";
        include_once("analyticstracking.php")
        include('includes/vertical-signature.php');
        include('includes/header.php');
    ?>

<div class="container">
        <div>
            <img src="images/headshot.png" class="right image-right" title="Me-Priscilla Then" alt="headshot Priscilla Then">
            <h1>About Me</h1>
            <p>If you’re looking for a designer who understands the importance of designing for the end-user through conducting research and satisfying business goals over just making things pretty, then you're in the right place. Although aesthetics are great for that "WOW!" factor and help to establish credibility and trust in your customers, a good-looking website alone isn’t worth much if the end user can’t find what they’re looking for, or easily complete a specific process.</p>
        </div>

        <!--<div id="work">-->
            <h2>Work</h2>
            <p>I recently completed a stint as the principal Visual + UX Designer for SCC Northwest, an automotive accessories manufacturing company in Vancouver, B.C. Not only was I responsible for revamping their corporate branding and marketing materials, but it also gave me a chance to work as a UX Designer on their e-commerce retail website.</p>
            <div id="education" class="clearfix">
                <img src="images/me-work-table.png" class="left image-left" alt="Priscilla working with pen tablet">
            <p>Before that, I worked as an independent designer for my own company, Biju Creative, for 3 years. It’s where I helped businesses from various industries to establish or revamp their visual branding, websites and social media. My experience running a business, learning about SEO, Google Analytics, trademark registration, business law, sales and marketing, contracts and negotiation, etc. has helped to make me a more valuable designer today. One of my greatest passions is helping other entrepreneurs to improve their businesses and increase sales through visual and website design, and I look forward to helping other companies do the same, but this time, just focus on my craft and doing what I was born to do -- design.</p>
        </div>
            <h2>Education</h2>
            <p>After completing a bachelor’s degree in cognitive psychology from the University of British Columbia, I later obtained a second bachelor’s degree in graphic and interaction design from Université Laval in Quebec City. </p>
            <p>Cognitive psychology is especially important in the field of UX / UI design; an understanding of how people perceive, process and retain information lends itself well to the field of user interface design and communication materials.</p>
            <img src="images/ethan-and-me.png" class="right image-right" title="Ethan Marcotte & Me" alt="headshot Ethan Marcotte & Priscilla">
            <p>Currently, I’m taking courses in the Applied Web Development program at BCIT part-time to improve my front-end development skills. However, the learning doesn't stop there. In August 2015, Vancouver held its first international-level seminar on web design & copywriting, the Design & Content Conference (<a href="http://www.designcontentconf.com" target="_blank">www.designcontentconf.com</a>). It was jam-packed with informative and inspiring talks by the web industry's best, sharing their knowledge and insights. It was also exciting to be surrounded by designers and content strategists who had travelled from around the world to attend the event.</p>
                <p>The conference started with a workshop on responsive design by the "Father of Responsive Design" himself, Ethan Marcotte, along with his business partner, Karen McGrane, the A Book Apart author of "Content Strategy for Mobile". Both speakers were exceptional, and I look forward to applying the new concepts and techniques that I learned to all my web design projects going forward. (Check back in a few weeks for my blog that will be discussing the highlights of the conference.)</p>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>

</body>
</html>