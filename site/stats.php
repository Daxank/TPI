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
    <p><b><u>Statistiques</u></b></p>
    <?php
    $countright = 0;
    $countrwong = 0;
    $i = 0;
    $livretjuste = "livret".$i.",juste";
    $livretfaux = "livret".$i.",faux";
    $ZEROright = 0;
    $ZEROwrong = 0;
    $id = $_COOKIE['user'];
    if (($handle = fopen('stats.csv', 'a+')) !== false) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if (in_array($id, $data, true)) {
                $userdata[] = $data;    //puts data from CSV into userdata only if it's the user's data
                if (in_array($livretjuste, $userdata)) {
                    $countright++;
                    $ZEROright++;
                }
                if (in_array($livretfaux, $userdata)) {
                    $countrwong++;
                    $ZEROwrong++;
                }
            }

        }
    }
    if (isset($userdata)) {
        echo "$countright Justes</br>";
        echo "$countrwong Faux</br></br>";
        var_dump($userdata);

    } else {
        echo "Tu n’as pas encore fais de partie, vas jouer ! ";
    }
    fclose($handle);

    ?>

    Livret du 0 : X% de bonnes réponses</br>
    Livret du 1 : X% de bonnes réponses</br>
    Livret du 2 : X% de bonnes réponses</br>
    Livret du 3 : X% de bonnes réponses</br>
    Livret du 4 : X% de bonnes réponses</br>
    Livret du 5 : X% de bonnes réponses</br>
    Livret du 6 : X% de bonnes réponses</br>
    Livret du 7 : X% de bonnes réponses</br>
    Livret du 8 : X% de bonnes réponses</br>
    Livret du 9 : X% de bonnes réponses</br>
    Livret du 10 : X% de bonnes réponses</br>
    Livret du 11 : X% de bonnes réponses</br>
    Livret du 12 : X% de bonnes réponses</br>
    </b>
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