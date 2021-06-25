<!DOCTYPE html>
<html lang En>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Inovace Engineering - <?php echo $title; ?>
    </title>
    <link rel="shortcut icon" type="image/jpg" href="images/symbol.png" />

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    <link rel="stylesheet" href="links/style.css">

</head>

<body>
    <!--navigation bar-->
    <header>
        <nav class="navigation">
            <div id="brandimg">
                <a href="index.php">
                    <img src="Images/InovaceLogo.png" alt="Inovace Logo">
                </a>
            </div>
            <div id="pgnavigate">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li>
                        <a href="projects.php">Projects</a>
                    </li>
                    <li>
                        <a href="clientele.php">Clientele</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div id="smnav">
                <div id="smnavul" class="overlay">
                    <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <a href="index.php">Home</a>
                        <a href="about.php">About Us</a>
                        <a href="services.php">Services</a>
                        <a href="projects.php">Projects</a>
                        <a href="clientele.php">Clientele</a>
                        <a href="contact.php">Contact Us</a>
                        <a href="#">Products</a>
                        <a href="#">Career</a>
                    </div>
                </div>
                <div class="icon" onclick="openNav()">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                </div>

            </div>
        </nav>
        <div class="clear"></div>
    </header>