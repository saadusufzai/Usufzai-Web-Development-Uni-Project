<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href=".././css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href=".././css/order.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order</title>
</head>

<body>
    <div class="slider">
        <div class="menus">
            <i class="close fa fa-times fa-3x" aria-hidden="true"></i>
            <ul>
                <li>
                    <a href="../index.html">home <span>home is where you start</span></a>
                </li>
                <li>
                    <a href="../about.html">about <span>know more about our work</span>
                    </a>
                </li>
                <li>
                    <a href="../order.html">order <span>order your package now</span></a>
                </li>
                <li>
                    <a href="../contact.html">contact <span>confused? contact us right now</span></a>
                </li>
            </ul>
        </div>
    </div>
    <nav class="nav-bar">
        <div class="inner-nav">
            <div class="logo"><a href="../index.html">TECHWA</a></div>
            <div class="menu">
                <i class="bars fa fa-bars fa-2x" aria-hidden="true"></i>
            </div>
        </div>
    </nav>

    <section class="order">
        <div class="order-box">
            <h1 style="text-align: center; letter-spacing: .2em; padding-top: 10px;">
                Thankyou for Signing in!
            </h1>
            <h1 style="text-align: center; padding-top: 10px;">
                Place Your Order Here !
            </h1>
            <form action="./connect.php" method="POST">
                <div>
                    <label for="name">Your Name</label><br />
                    <input placeholder="John Doe" type="text" name="firstName" id="name" />
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label><br />
                    <input placeholder="user@example.com" type="email" name="email" id="email" />
                </div>
                <div class="form-group">
                    <label>Select your package</label><br />
                    <select class="package" id="package" name="package" onchange="onChange()">
                        <option value="Trial">Trial (0$)</option>
                        <option value="Pro">Pro (30$)</option>
                        <option value="Plus">Plus (45$)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Select payment method</label><br />
                    <select name="method">
                        <option name="method" value="Bank Transfer">Bank Transfer</option>
                        <option name="method" value="Easy Paisa">Easy Paisa</option>
                        <option name="method" value="Jazz Cash">Jaaz Cash</option>
                    </select>
                </div>
                <div class="form-group price">
                    <h2>Price</h2>

                    <h2 class="total">2000</h2>
                </div>
                <input type="submit" name="insert" value="Pay" />
            </form>
        </div>
    </section>

    <section class="see-more">
        <p>Need help? Call our award-winning support team at +92 332 687 7676</p>
    </section>
    <footer>
        <div class="inner-footer">
            <ul>
                <h3>Web Hosting</h3>
                <li>CPanel</li>
                <li>WHMS</li>
                <li>DOMAIN</li>
            </ul>
            <ul>
                <h3>Web Design Tools</h3>
                <li>Adobe XD</li>
                <li>Figma</li>
                <li>PhotoShop</li>
            </ul>
            <ul>
                <h3>VPS</h3>
                <li>Cloud</li>
                <li>Private Server</li>
                <li>Dedicated Server</li>
            </ul>
            <ul>
                <h3>Contact Us</h3>
                <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> 120-N Mandi Town
                    Bhakkar
                </li>
                <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    saadusufzai@gmail.com
                </li>
                <li><i class="fa fa-link" aria-hidden="true"></i> www.techwa.io</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i> 03326877676</li>
            </ul>
        </div>
        <div class="social">
            <input type="text" name="Newsletteer" id="newsletter" placeholder="Subscribe to Newsletters" />
        </div>

        <div class="copyright">
            Copyright 2020 techwa.io | All rights are reserved by TECHWA.IO |
            Developed by Saad Aslam & Talha Maiken
        </div>
    </footer>
    <script src="../main.js"></script>
    <script>
        document.querySelector(".total").innerHTML = "0$";
        const onChange = () => {
            let e = document.querySelector("#package");
            let opt = e.options[e.selectedIndex].value;
            let total = "0$";
            console.log(total);
            console.log(opt);
            if (opt === "Pro") {
                total = "30$";
            } else if (opt === "Plus") {
                total = "45$";
            } else {
                total = "0$";
            }
            document.querySelector(".total").innerHTML = total;
        };
    </script>
</body>

</html>


<?php
require('config.php');

if (isset($_POST['email']) and isset($_POST['password'])) {


    $username = $_POST['email'];
    $password = $_POST['password'];


    $query = "SELECT * FROM `siginup` WHERE email='$username' and Password='$password'";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {


        echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
    } else {
        echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
    }
}
?>