<?php
//start session to use and store datas
session_start();
function delchoice()
{
    session_destroy();
}

$_SESSION['timestop'] = time();
$iduser = $_COOKIE['user'];
function registerstatsright()
{
    $data = [];
    $data[] = $iduser;
    $data[] = date();
    $data[] = time();
    $data[] = $_SESSION['mode'];
    $data[] = $_SESSION['mult'];
    $data[] = $_SESSION['livret'];
    $data[] = 1;
    $data[] = $timetaken;
    $handle = fopen('stats.csv', 'a+');
    fputcsv($handle, $data);
    fclose($handle);
}
function registerstatswrong()
{
    $data = [];
    $data[] = $iduser;
    $data[] = date();
    $data[] = time();
    $data[] = $_SESSION['mode'];
    $data[] = $_SESSION['randmult'];
    $data[] = $_SESSION['randlivret'];
    $data[] = 0;
    $data[] = $timetaken;
    $handle = fopen('stats.csv', 'a+');
    fputcsv($handle, $data);
    fclose($handle);
}
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
        <li><a href="index.php" class="button special" onclick="<?php delchoice() ?>">Retour au menu</a></li>
    </ul>
    <p><b><?php
            $result = $_SESSION['answerfive'];
            $timetaken = $_SESSION['timestop'] - $_SESSION['timestart'];
            if ($timetaken <= 1) { //choice between plural and singular
                $wordsecond = "seconde";
            } else {
                $wordsecond = "secondes";
            }
            if (!empty($_POST['click']) && ($timetaken!=0)) {
                echo "<u>$result</u> <br/></br> As-tu trouvé en $timetaken $wordsecond?";
            } else if (!empty($_POST['click']) && ($timetaken==0)) {
                echo "<u>$result</u> <br/></br> As-tu trouvé en moins d'une seconde?!";
            } else {
                echo "<u>$result</u>";
            }

            ?></b></p>
    <ul class="actions">
        <li><a href="five-problem.php" class="button special" onclick="<?php registerstatsright() ?>">J'ai juste!</a></li>
        <li><a href="five-problem.php" class="button special" onclick="<?php registerstatswrong() ?>">J'ai faux...</a></li>
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