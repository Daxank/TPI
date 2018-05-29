<?php
//start session to use and store datas
session_start();

if (isset($_GET['true']) || isset($_GET['wrong'])) {    //that way we don't reset timestop by coming back to the page when we press the "wrong" or "right" buttons
} else {
    $_SESSION['timestop'] = time();
    while ($_SESSION['timestop']-$_SESSION['timestart']>5) //sometimes the refresh will return 6 seconds or higher (due to load times), since this value shouldn't be possible in the 5 seconds mode, we reduce it to 5
    {
        $_SESSION['timestop']--;
    }
}

?>
<!DOCTYPE HTML>
<!--
	Typify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<?php
function registerstatsright()
{
    $data = []; //transforms data in array
    $data[] = $_COOKIE['user']; //uses to username set by the cookie to register to help identify datas to their users
    $data[] = date('j-n-y');    //registers the date
    $data[] = date('H:i:s:e');  //registers the hour and the timezone
    $data[] = $_SESSION['mode'];    //registers the mode
    $data[] = $_SESSION['chosenmult'];  //registers the multiplier of the problem
    $data[] = $_SESSION['chosenlivret'];    //registers which one of the choices from the user was picked for the multiplication problem
    $data[] = "juste";  //registers that the user answered right
    $data[] = $_SESSION['timestop'] - $_SESSION['timestart'];   //registers the time it took to finish the problem
    $handle = fopen('stats.csv', 'a+'); //opens stats.csv in write and read and creates it if it doesn't exist
    fputcsv($handle, $data);    //writes the data[] array in stats.csv
    fclose($handle);    //closes stats.csv
    header('Location: five-problem.php');
}

function registerstatswrong()
{
    $data = []; //transforms data in array
    $data[] = $_COOKIE['user']; //uses to username set by the cookie to register to help identify datas to their users
    $data[] = date('j-n-y');    //registers the date
    $data[] = date('H:i:s:e');  //registers the hour and the timezone
    $data[] = $_SESSION['mode'];    //registers the mode
    $data[] = $_SESSION['chosenmult'];  //registers the multiplier of the problem
    $data[] = $_SESSION['chosenlivret'];    //registers which one of the choices from the user was picked for the multiplication problem
    $data[] = "faux"; //registers that the user answered wrong
    $data[] = $_SESSION['timestop'] - $_SESSION['timestart'];   //registers the time it took to finish the problem
    $handle = fopen('stats.csv', 'a+'); //opens stats.csv in write and read and creates it if it doesn't exist
    fputcsv($handle, $data);    //writes the data[] array in stats.csv
    fclose($handle);    //closes stats.csv
    header('Location: five-problem.php');
}

if (isset($_GET['true'])) {
    registerstatsright();
} else if (isset($_GET['wrong'])) {
    registerstatswrong();
}
?>
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
    <p><b><?php
            $result = $_SESSION['answerfive'];
            $timetaken = $_SESSION['timestop'] - $_SESSION['timestart'];
            if ($timetaken <= 1) { //choice between plural and singular
                $wordsecond = "seconde";
            } else {
                $wordsecond = "secondes";
            }
            if (!empty($_POST['click']) && ($timetaken != 0)) {
                echo "<u>$result</u> <br/></br> As-tu trouvé en $timetaken $wordsecond?";
            } else if (!empty($_POST['click']) && ($timetaken == 0)) {
                echo "<u>$result</u> <br/></br> As-tu trouvé en moins d'une seconde?!";
            } else {
                echo "<u>$result</u>";
            }

            ?></b></p>
    <ul class="actions">
        <li><a href="five-result.php?true=true" class="button special">J'ai juste!</a></li>
        <li><a href="five-result.php?wrong=true" class="button special">J'ai faux...</a></li>
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