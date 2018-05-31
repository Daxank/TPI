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
    $ZEROright = 0;
    $ZEROwrong = 0;
    $ONEright = 0;
    $ONEwrong = 0;
    $TWOright = 0;
    $TWOwrong = 0;
    $THREEright = 0;
    $THREEwrong = 0;
    $FOURright = 0;
    $FOURwrong = 0;
    $FIVEright = 0;
    $FIVEwrong = 0;
    $SIXright = 0;
    $SIXwrong = 0;
    $SEVENright = 0;
    $SEVENwrong = 0;
    $EIGHTright = 0;
    $EIGHTwrong = 0;
    $NINEright = 0;
    $NINEwrong = 0;
    $TENright = 0;
    $TENwrong = 0;
    $ELEVENright = 0;
    $ELEVENwrong = 0;
    $TWELVEright = 0;
    $TWELVEwrong = 0;
    $id = $_COOKIE['user'];
    if (($handle = fopen('stats.csv', 'a+')) !== false) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if (in_array($id, $data, true)) { //reads if array contains the user's id
                if (in_array("juste", $data, true)) {   //reads if array contains "juste"
                    $countright++;  //increments the total of right answers
                    if (in_array("livret0", $data, true)) {
                        $ZEROright++;
                    } elseif (in_array("livret1", $data, true)) {
                        $ONEright++;
                    } elseif (in_array("livret2", $data, true)) {
                        $TWOright++;
                    } elseif (in_array("livret3", $data, true)) {
                        $THREEright++;
                    } elseif (in_array("livret4", $data, true)) {
                        $FOURright++;
                    } elseif (in_array("livret5", $data, true)) {
                        $FIVEright++;
                    } elseif (in_array("livret6", $data, true)) {
                        $SIXright++;
                    } elseif (in_array("livret7", $data, true)) {
                        $SEVENright++;
                    } elseif (in_array("livret8", $data, true)) {
                        $EIGHTright++;
                    } elseif (in_array("livret9", $data, true)) {
                        $NINEright++;
                    } elseif (in_array("livret10", $data, true)) {
                        $TENright++;
                    } elseif (in_array("livret11", $data, true)) {
                        $ELEVENright++;
                    } elseif (in_array("livret12", $data, true)) {
                        $TWELVEright++;
                    }
                }
                if (in_array("faux", $data, true)) {    //reads if array contains "faux"
                    $countrwong++;  //increments the total of wrong answers
                    if (in_array("livret0", $data, true)) {
                        $ZEROwrong++;
                    } elseif (in_array("livret1", $data, true)) {
                        $ONEwrong++;
                    } elseif (in_array("livret2", $data, true)) {
                        $TWOwrong++;
                    } elseif (in_array("livret3", $data, true)) {
                        $THREEwrong++;
                    } elseif (in_array("livret4", $data, true)) {
                        $FOURwrong++;
                    } elseif (in_array("livret5", $data, true)) {
                        $FIVEwrong++;
                    } elseif (in_array("livret6", $data, true)) {
                        $SIXwrong++;
                    } elseif (in_array("livret7", $data, true)) {
                        $SEVENwrong++;
                    } elseif (in_array("livret8", $data, true)) {
                        $EIGHTwrong++;
                    } elseif (in_array("livret9", $data, true)) {
                        $NINEwrong++;
                    } elseif (in_array("livret10", $data, true)) {
                        $TENwrong++;
                    } elseif (in_array("livret11", $data, true)) {
                        $ELEVENwrong++;
                    } elseif (in_array("livret12", $data, true)) {
                        $TWELVEwrong++;
                    }
                }
            }
        }
    }
    if ($countright == 0 && $countrwong == 0) {
        echo "Tu n’as pas encore fais de partie, vas jouer ! ";
    } else {
        if ($countright <= 1) {
            $wordjuste = "Juste";
        } else {
            $wordjuste = "Justes";
        }
        echo "$countright $wordjuste</br>";
        echo "$countrwong Faux</br></br>";
        if ($ZEROright != 0 || $ZEROwrong != 0) {
            if ($ZEROwrong == 0) {
                $PERCENTZERO = 100;
            } else {
                $PERCENTZERO = ($ZEROright / ($ZEROright + $ZEROwrong)) * 100; //this variable is place here to avoid division by 0
            }
            echo "Livret de 0 : ";
            echo(round($PERCENTZERO));
            echo " % de bonnes réponses </br >";
        }
        if ($ONEright != 0 || $ONEwrong != 0) {
            if ($ONEwrong == 0) {
                $PERCENTONE = 100;
            } else {
                $PERCENTONE = ($ONEright / ($ONEright + $ONEwrong)) * 100;
            }
            echo "Livret de 1 : ";
            echo(round($PERCENTONE));
            echo " % de bonnes réponses </br >";
        }
        if ($TWOright != 0 || $TWELVEwrong != 0) {
            if ($TWOwrong == 0) {
                $PERCENTTWO = 100;
            } else {
                $PERCENTTWO = ($TWOright / ($TWOright + $TWOwrong)) * 100;
            }
            echo "Livret de 2 : ";
            echo(round($PERCENTTWO));
            echo " % de bonnes réponses </br >";
        }
        if ($THREEright != 0 || $THREEwrong != 0) {
            if ($THREEwrong == 0) {
                $PERCENTTHREE = 100;
            } else {
                $PERCENTTHREE = ($THREEright / ($THREEright + $THREEwrong)) * 100;
            }
            echo "Livret de 3 : ";
            echo(round($PERCENTTHREE));
            echo " % de bonnes réponses </br >";
        }
        if ($FOURright != 0 || $FOURwrong != 0) {
            if ($FOURwrong == 0) {
                $PERCENTFOUR = 100;
            } else {
                $PERCENTFOUR = ($FOURright / ($FOURright + $FOURwrong)) * 100;
            }
            echo "Livret de 4 : ";
            echo(round($PERCENTFOUR));
            echo " % de bonnes réponses </br >";
        }
        if ($FIVEright != 0 || $FIVEwrong != 0) {
            if ($FIVEwrong == 0) {
                $PERCENTFIVE = 100;
            } else {
                $PERCENTFIVE = ($FIVEright / ($FIVEright + $FIVEwrong)) * 100;
            }
            echo "Livret de 5 : ";
            echo(round($PERCENTFIVE));
            echo " % de bonnes réponses </br >";
        }
        if ($SIXright != 0 || $SIXwrong != 0) {
            if ($SIXwrong == 0) {
                $PERCENTSIX = 100;
            } else {
                $PERCENTSIX = ($SIXright / ($SIXright + $SIXwrong)) * 100;
            }
            echo "Livret de 6 : ";
            echo(round($PERCENTSIX));
            echo " % de bonnes réponses </br >";
        }
        if ($SEVENright != 0 || $SEVENwrong != 0) {
            if ($SEVENwrong == 0) {
                $PERCENTSEVEN = 100;
            } else {
                $PERCENTSEVEN = ($SEVENright / ($SEVENright + $SEVENwrong)) * 100;
            }
            echo "Livret de 7 : ";
            echo(round($PERCENTSEVEN));
            echo " % de bonnes réponses </br >";
        }
        if ($EIGHTright != 0 || $EIGHTwrong != 0) {
            if ($EIGHTwrong == 0) {
                $PERCENTEIGHT = 100;
            } else {
                $PERCENTEIGHT = ($EIGHTright / ($EIGHTright + $EIGHTwrong)) * 100;
            }
            echo "Livret de 8 : ";
            echo(round($PERCENTEIGHT));
            echo " % de bonnes réponses </br >";
        }
        if ($NINEright != 0 || $NINEwrong != 0) {
            if ($NINEwrong == 0) {
                $PERCENTTNINE = 100;
            } else {
                $PERCENTNINE = ($NINEright / ($NINEright + $NINEwrong)) * 100;
            }
            echo "Livret de 9 : ";
            echo(round($PERCENTNINE));
            echo " % de bonnes réponses </br >";
        }
        if ($TENright != 0 || $TENwrong != 0) {
            if ($TENwrong == 0) {
                $PERCENTTEN = 100;
            } else {
                $PERCENTTEN = ($TENright / ($TENright + $TENwrong)) * 100;
            }
            echo "Livret de 10 : ";
            echo(round($PERCENTTEN));
            echo " % de bonnes réponses </br >";
        }
        if ($ELEVENright != 0 || $ELEVENwrong != 0) {
            if ($ELEVENwrong == 0) {
                $PERCENTELEVEN = 100;
            } else {
                $PERCENTELEVEN = ($ELEVENright / ($ELEVENright + $ELEVENwrong)) * 100;
            }
            echo "Livret de 11 : ";
            echo(round($PERCENTELEVEN));
            echo " % de bonnes réponses </br >";
        }
        if ($TWELVEright != 0 || $TWELVEwrong != 0) {
            if ($TWELVEwrong == 0) {
                $PERCENTTWELVE = 100;
            } else {
                $PERCENTTWELVE = ($TWELVEright / ($TWELVEright + $TWELVEwrong)) * 100;
            }
            echo "Livret de 12 : ";
            echo(round($PERCENTTWELVE));
            echo " % de bonnes réponses </br >";
        }
    }
    fclose($handle);

    ?>
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