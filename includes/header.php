<header class="clearfix">
    <a href="index.php"><img src="images/logo-visual-ux.png" title="Priscilla Then" alt="logo priscilla then"></a>
    <nav>
        <ul>
            <li <?php if($page == "index" || $page == "project"):?> class="active" <?php endif;?>>
                <a href="index.php">
                <i class="fa fa-paint-brush"></i>Portfolio</a>
            </li>
            <li <?php if($page == "about"):?> class="active" <?php endif;?>>
                <a href="about.php">
                <i class="fa fa-user"></i>About</a>
            </li>
            <li <?php if($page == "contact"):?> class="active" <?php endif;?>>
                <a href="contact.php">
                <i class="fa fa-envelope"></i>Contact</a>
            </li>
        </ul>
    </nav>
</header>