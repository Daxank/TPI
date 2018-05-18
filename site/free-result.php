<?php
//start session to use and store datas
session_start();
function delchoice()
{
    session_destroy();
}

$_SESSION['timestop'] = time();
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
    <p><b><?php
            $result = $_SESSION['trueanswer'];
            $timetaken = $_SESSION['timestop'] - $_SESSION['timestart'];
            if ($timetaken <= 1) { //choice between plural and singular
                $wordsecond = "seconde";
            } else {
                $wordsecond = "secondes";
            }
            if (!empty($_POST['true'])) {
                echo "Bravo! La réponse était bien <u>$result</u> </br> Tu as trouvé en $timetaken $wordsecond";

            } else if (!empty($_POST['wrong'])) {
                echo "<u>Dommage... La réponse était $result</u>";
            } else if (!is_null($_POST['true'])) { //we need this 'else if' for when trueanswer=0 because otherwise, $_POST['true'] is "empty"
                echo "Bravo! La réponse était bien <u>$result</u></br> Tu as trouvé en $timetaken $wordsecond";
            }

            ?></b></p>
    <ul class="actions">
        <li><a href="free-problem.php" class="button special">Je continue</a></li>
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