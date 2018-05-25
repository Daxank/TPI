<?php
if ($_COOKIE['user'] != null) {
} else {
    $name = md5(time());
    setcookie('user', $name, time() + 365 * 24 * 3600, null, null, false, true);
    header("Refresh:0"); //refresh page to avoid showing error for $_COOKIE['user'] being undefined
}
session_start();
session_destroy();
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
        <li><a href="stats.php" class="button special">Voir les statistiques</a></li>
    </ul>
    <p><b><u>Nouvelle partie</u></b></p>
    <ul class="actions">
        <li><a href="free.php" class="button special">Mode libre</a></li>
        <li><a href="five.php" class="button special">Mode 5 secondes</a></li>
    </ul>
</section>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>