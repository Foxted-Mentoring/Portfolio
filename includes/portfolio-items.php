<div id="portfolio-items" class="container">
    <?php if($page == "project") :?>
        <hr>
        <h2>Portfolio</h2>
    <?php else: ?>
        <h1>Portfolio</h1>
    <?php endif;?>
    <ul>
        <li>
            <a href="project.php?item=nwseatcovers" title="NW Seatcovers" class="color-change">
                <img src="images/b-w/nw.jpg" alt="NW project thumbnail">
                <h2>NW Seatcovers</h2>
                <p>Branding, e-Commerce Website</p>
            </a>
        </li>
        <li>
            <a href="project.php?item=fafia" title="FAFIA" class="color-change">
                <img src="images/b-w/fafia.jpg" alt="FAFIA project thumbnail">
                <h2>FAFIA</h2>
                <p>Branding, Website Redesign</p>
            </a>
        </li>
        <li>
            <a href="project.php?item=dexpan" title="Dexpan Canada" class="color-change">
                <img src="images/b-w/dexpan.jpg" alt="Dexpan project thumbnail">
                <h2>Dexpan Canada</h2>
                <p>Branding, e-Commerce Website</p>
            </a>
        </li>
        <li>
            <a href="project.php?item=norsk" title="Norsk Interior Design" class="color-change">
                <img src="images/b-w/norsk.jpg" alt="Norsk Interior Design thumbnail">
                <h2>Norsk Interior Design</h2>
                <p>Branding, Website Redesign</p>
            </a>
        </li>
        <li>
            <a href="project.php?item=eurostile" title="Eurostile" class="color-change">
                <img src="images/b-w/eurostile.jpg" alt="Eurostile booklet thumbnail">
                <h2>Eurostile</h2>
                <p>Booklet Design, Copywriting</p>
            </a>
        </li>
        <li>
            <a href="project.php?item=vivre-en-ville" title="Vivre en Ville" class="color-change">
                <img src="images/b-w/vivre.jpg" alt="Vivre en Ville thumbnail">
                <h2>Vivre en Ville</h2>
                <p>Logo, Stationery</p>
            </a>
        </li>
    </ul>
</div>

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