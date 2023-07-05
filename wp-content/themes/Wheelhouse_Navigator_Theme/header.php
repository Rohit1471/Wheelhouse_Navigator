<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global HTML</title>
    <?php wp_head();?>
</head>

<body>


    <header class="header sticky padtop30 padbot30 box_shadow1">
        <div class="header_outer">
            <div class="wrapper">
                <div class="header_inner flex space_between align_center">
                    <div class="logo left">
                        <a href="#">
                            <img src="Assets/Images/LOGO.svg" alt="#">
                        </a>
                    </div>
                    <div class="hamburger none">
                        <div class="line "></div>
                        <div class="line "></div>
                        <div class="line "></div>
                    </div>
                    <div class="right flex align_center gap55">
                        <nav class="navbar flex_child gap75_child align_center g_underline">
                            <ul>
                                <li><a href="#">COMPASS</a></li>
                                <li><a href="#">SEXTANT</a></li>
                                <li><a href="#">SONAR</a></li>
                            </ul>
                        </nav>
                        <div class="button1">
                            <a class="button" href="#">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>