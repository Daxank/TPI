<?php
//start session to use and store datas
session_start();
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
        <li><a href="index.php" class="button special">Retour au menu</a></li>
    </ul>
    <p><b><u>Nouvelle partie: Mode libre</u></b></p>
    <form method=post action="free-problem.php">
        <h4>Choisis le(s) livret(s) que tu veux travailler:</h4>
        <input type="checkbox" name="livret[]" value="0" checked>0 &nbsp;
        <input type="checkbox" name="livret[]" value="1">1 &nbsp;
        <input type="checkbox" name="livret[]" value="2">2 &nbsp;
        <input type="checkbox" name="livret[]" value="3">3 &nbsp;<br/><br/>
        <input type="checkbox" name="livret[]" value="4">4 &nbsp;
        <input type="checkbox" name="livret[]" value="5">5 &nbsp;
        <input type="checkbox" name="livret[]" value="6">6 &nbsp;
        <input type="checkbox" name="livret[]" value="7">7 &nbsp;<br/><br/>
        <input type="checkbox" name="livret[]" value="8">8 &nbsp;
        <input type="checkbox" name="livret[]" value="9">9 &nbsp;
        <input type="checkbox" name="livret[]" value="10">10 &nbsp;
        <input type="checkbox" name="livret[]" value="11">11 &nbsp;<br/><br/>
        <input type="checkbox" name="livret[]" value="12">12 <br/>
        <br/><br/>
        <input type="submit" value="GO!" class="button special">
    </form>
</section>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<!-- Check if we have at least 1 checkbox checked -->
<script>$(document).ready(function () {
        $("form").submit(function () {
            if ($('input:checkbox').filter(':checked').length < 1) {
                alert("Choisissez au moins 1 livret");
                return false;
            }
        });
    });
</script>
</body>
</html>