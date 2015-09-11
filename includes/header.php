<header class="clearfix">
    <?php if($page == "index" || $page == "about" || $page == "contact" ):?>
        <a href="index.php"><img src="images/logo.png" title="Priscilla Then" alt="logo priscilla then"></a>
    <?php else:?>
        <a href="../index.php"><img src="../images/logo.png" title="Priscilla Then" alt="logo priscilla then"></a>
    <?php endif;?>
    <nav>
        <ul>
            <?php if($page == "index" || $page == "project"):?>
                <li class="active">
            <?php else:?>
                <li>
            <?php endif;?>
            <?php if($page == "project"):?>
                <a href="../index.php">
            <?php else:?>
                <a href="index.php">
            <?php endif;?>
                <i class="fa fa-paint-brush"></i>Portfolio</a>
            </li>

            <?php if($page == "about"):?>
                <li class="active">
            <?php else:?>
                <li>
            <?php endif;?>
                <?php if($page == "project"):?>
                    <a href="../about.php">
                <?php else:?>
                    <a href="about.php">
                <?php endif;?>
                <i class="fa fa-user"></i>About</a>
            </li>

            <?php if($page == "contact"):?>
                <li class="active">
            <?php else:?>
                <li>
            <?php endif;?>
                <?php if($page == "project"):?>
                    <a href="../contact.php">
                <?php else:?>
                    <a href="contact.php">
                <?php endif;?>
                <i class="fa fa-envelope"></i>Contact</a>
            </li>
        </ul>
    </nav>
</header>