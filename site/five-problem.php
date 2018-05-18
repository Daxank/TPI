<?php
//start session to use and store datas
session_start();
function delchoice()
{
    session_destroy();
}

$_SESSION['timestart'] = time();
?>
<!DOCTYPE HTML>
<!--
    Typify by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>Multiplix, la web app pour réviser ses livrets de multiplication</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css"/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ie9.css"/><![endif]-->
</head>
<body>

<!-- Banner -->
<section id="banner">
    <ul class="actions">
        <li><a href="index.php" class="button special" onclick="delchoice()">Retour au menu</a></li>
    </ul>
    <p><b>   <?php
            $randmult = rand(0, 12);
            if (!empty($_POST['livret'])) {
                $_SESSION['livret'] = $_POST['livret'];
                $randlivret = array_rand($_POST['livret']);
            } elseif (!empty($_SESSION['livret'])) {
                $randlivret = array_rand($_SESSION['livret']);
            }
            echo "$randmult x $randlivret = ?" ?> </b></p>
    <form method=post action="five-result.php">
    </form>
</section>
<!--Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>