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
    $countwrong = 0;
    $ZEROright = 0;
    $ZEROright5 = 0;
    $ZEROwrong = 0;
    $ZEROwrong5 = 0;
    $ONEright = 0;
    $ONEright5 = 0;
    $ONEwrong = 0;
    $ONEwrong5 = 0;
    $TWOright = 0;
    $TWOright5 = 0;
    $TWOwrong = 0;
    $TWOwrong5 = 0;
    $THREEright = 0;
    $THREEright5 = 0;
    $THREEwrong = 0;
    $THREEwrong5 = 0;
    $FOURright = 0;
    $FOURright5 = 0;
    $FOURwrong = 0;
    $FOURwrong5 = 0;
    $FIVEright = 0;
    $FIVEright5 = 0;
    $FIVEwrong = 0;
    $FIVEwrong5 = 0;
    $SIXright = 0;
    $SIXright5 = 0;
    $SIXwrong = 0;
    $SIXwrong5 = 0;
    $SEVENright = 0;
    $SEVENright5 = 0;
    $SEVENwrong = 0;
    $SEVENwrong5 = 0;
    $EIGHTright = 0;
    $EIGHTright5 = 0;
    $EIGHTwrong = 0;
    $EIGHTwrong5 = 0;
    $NINEright = 0;
    $NINEright5 = 0;
    $NINEwrong = 0;
    $NINEwrong5 = 0;
    $TENright = 0;
    $TENright5 = 0;
    $TENwrong = 0;
    $TENwrong5 = 0;
    $ELEVENright = 0;
    $ELEVENright5 = 0;
    $ELEVENwrong = 0;
    $ELEVENwrong5 = 0;
    $TWELVEright = 0;
    $TWELVEright5 = 0;
    $TWELVEwrong = 0;
    $TWELVEwrong5 = 0;
    $id = $_COOKIE['user'];
    if (($handle = fopen('stats.csv', 'a+')) !== false) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if (in_array($id, $data, true)) { //reads if array contains the user's id
                if (in_array("juste", $data, true)) {   //reads if array contains "juste"
                    $countright++;  //increments the total of right answers
                    if (in_array("livret0", $data, true)) {
                        if (in_array("free", $data, true)) {    //gets the amount of right answers for free mode
                            $ZEROright++;
                        } elseif (in_array("5sec", $data, true)) {    //gets the amount of right answers for 5sec mode
                            $ZEROright5++;
                        }
                    } elseif (in_array("livret1", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $ONEright++;
                        } elseif (in_array("5sec", $data, true)) {
                            $ONEright5++;
                        }
                    } elseif (in_array("livret2", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $TWOright++;
                        } elseif (in_array("5sec", $data, true)) {
                            $TWOright5++;
                        }
                    } elseif (in_array("livret3", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $THREEright++;
                        } elseif (in_array("5sec", $data, true)) {
                            $THREEright5++;
                        }
                    } elseif (in_array("livret4", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $FOURright++;
                        } elseif (in_array("5sec", $data, true)) {
                            $FOURright5++;
                        }
                    } elseif (in_array("livret5", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $FIVEright++;
                        } elseif (in_array("5sec", $data, true)) {
                            $FIVEright5++;
                        }
                    } elseif (in_array("livret6", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $SIXright++;
                        } elseif (in_array("5sec", $data, true)) {
                            $SIXright5++;
                        }
                    } elseif (in_array("livret7", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $SEVENright++;
                        } elseif (in_array("5sec", $data, true)) {
                            $SEVENright5++;
                        }
                    } elseif (in_array("livret8", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $EIGHTright++;
                        } elseif (in_array("5sec", $data, true)) {
                            $EIGHTright5++;
                        }
                    } elseif (in_array("livret9", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $NINEright++;
                        } elseif (in_array("5sec", $data, true)) {
                            $NINEright5++;
                        }
                    } elseif (in_array("livret10", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $TENright++;
                        } elseif (in_array("5sec", $data, true)) {
                            $TENright5++;
                        }
                    } elseif (in_array("livret11", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $ELEVENright++;
                        } elseif (in_array("5sec", $data, true)) {
                            $ELEVENright5++;
                        }
                    } elseif (in_array("livret12", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $TWELVEright++;
                        } elseif (in_array("5sec", $data, true)) {
                            $TWELVEright5++;
                        }
                    }
                }
                if (in_array("faux", $data, true)) {    //reads if array contains "faux"
                    $countwrong++;  //increments the total of wrong answers
                    if (in_array("livret0", $data, true)) {
                        if (in_array("free", $data, true)) {    //gets the amount of wrong answers for free mode
                            $ZEROwrong++;
                        } elseif (in_array("5sec", $data, true)) {    //gets the amount of wrong answers for 5sec mode
                            $ZEROwrong5++;
                        }
                    } elseif (in_array("livret1", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $ONEwrong++;
                        } elseif (in_array("5sec", $data, true)) {
                            $ONEwrong5++;
                        }
                    } elseif (in_array("livret2", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $TWOwrong++;
                        } elseif (in_array("5sec", $data, true)) {
                            $TWOwrong5++;
                        }
                    } elseif (in_array("livret3", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $THREEwrong++;
                        } elseif (in_array("5sec", $data, true)) {
                            $THREEwrong5++;
                        }
                    } elseif (in_array("livret4", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $FOURwrong++;
                        } elseif (in_array("5sec", $data, true)) {
                            $FOURwrong5++;
                        }
                    } elseif (in_array("livret5", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $FIVEwrong++;
                        } elseif (in_array("5sec", $data, true)) {
                            $FIVEwrong5++;
                        }
                    } elseif (in_array("livret6", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $SIXwrong++;
                        } elseif (in_array("5sec", $data, true)) {
                            $SIXwrong5++;
                        }
                    } elseif (in_array("livret7", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $SEVENwrong++;
                        } elseif (in_array("5sec", $data, true)) {
                            $SEVENwrong5++;
                        }
                    } elseif (in_array("livret8", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $EIGHTwrong++;
                        } elseif (in_array("5sec", $data, true)) {
                            $EIGHTwrong5++;
                        }
                    } elseif (in_array("livret9", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $NINEwrong++;
                        } elseif (in_array("5sec", $data, true)) {
                            $NINEwrong5++;
                        }
                    } elseif (in_array("livret10", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $TENwrong++;
                        } elseif (in_array("5sec", $data, true)) {
                            $TENwrong5++;
                        }
                    } elseif (in_array("livret11", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $ELEVENwrong++;
                        } elseif (in_array("5sec", $data, true)) {
                            $ELEVENwrong5++;
                        }
                    } elseif (in_array("livret12", $data, true)) {
                        if (in_array("free", $data, true)) {
                            $TWELVEwrong++;
                        } elseif (in_array("5sec", $data, true)) {
                            $TWELVEwrong5++;
                        }
                    }
                }
            }
        }
    }
    if ($countright == 0 && $countwrong == 0) {
        echo "Tu n’as pas encore fais de partie, vas jouer ! ";
    } else {
        if ($countright <= 1) {
            $wordjuste = "Juste";
        } else {
            $wordjuste = "Justes";
        }
        echo "$countright $wordjuste</br>";
        echo "$countwrong Faux</br>";
        if ($countright != 0 || $countwrong != 0) {
            $PERCENTGLOBAL = 0;
            if ($countwrong == 0) {
                $PERCENTGLOBAL = 100;
            } else {
                $PERCENTGLOBAL = ($countright / ($countright + $countwrong)) * 100; //this variable is placed here to avoid division by 0
            }
            echo "Global : ";
            echo(round($PERCENTGLOBAL));
            echo " % de bonnes réponses </br ></br >";
            echo " Mode libre | Mode 5 secondes</br >";
        }
        if ($ZEROright != 0 || $ZEROwrong != 0 || $ZEROright5 != 0 || $ZEROwrong5 != 0) {
            $PERCENTZERO5 = 0;
            if ($ZEROwrong == 0 && $ZEROright != 0) {
                $PERCENTZERO = 100;
            } elseif ($ZEROwrong != 0 && $ZEROright !=0) {
                $PERCENTZERO = ($ZEROright / ($ZEROright + $ZEROwrong)) * 100;
            }
            if ($ZEROwrong5 == 0 && $ZEROright5 != 0) {
                $PERCENTZERO5 = 100;
            } elseif ($ZEROwrong5 != 0 && $ZEROright5 !=0) {
                $PERCENTZERO5 = ($ZEROright5 / ($ZEROright5 + $ZEROwrong5)) * 100;
            }
            echo "Livret de 0: ";
            echo(round($PERCENTZERO));
            echo "% | ";
            echo(round($PERCENTZERO5));
            echo "% de bonnes réponses </br >";
        }
        if ($ONEright != 0 || $ONEwrong != 0 || $ONEright5 != 0 || $ONEwrong5 != 0) {
            $PERCENTONE5 = 0;
            if ($ONEwrong == 0 && $ONEright != 0) {
                $PERCENTONE = 100;
            } elseif ($ONEwrong != 0 && $ONEright !=0) {
                $PERCENTONE = ($ONEright / ($ONEright + $ONEwrong)) * 100;
            }
            if ($ONEwrong5 == 0 && $ONEright5 != 0) {
                $PERCENTONE5 = 100;
            } elseif ($ONEwrong5 != 0 && $ONEright5 !=0) {
                $PERCENTONE5 = ($ONEright5 / ($ONEright5 + $ONEwrong5)) * 100;
            }
            echo "Livret de 1: ";
            echo(round($PERCENTONE));
            echo "% | ";
            echo(round($PERCENTONE5));
            echo "% de bonnes réponses </br >";
        }
        if ($TWOright != 0 || $TWOwrong != 0 || $TWOright5 != 0 || $TWOwrong5 != 0) {
            $PERCENTTWO5 = 0;
            if ($TWOwrong == 0 && $TWOright != 0) {
                $PERCENTTWO = 100;
            } elseif ($TWOwrong != 0 && $TWOright !=0) {
                $PERCENTTWO = ($TWOright / ($TWOright + $TWOwrong)) * 100;
            }
            if ($TWOwrong5 == 0 && $TWOright5 != 0) {
                $PERCENTTWO5 = 100;
            } elseif ($TWOwrong5 != 0 && $TWOright5 !=0) {
                $PERCENTTWO5 = ($TWOright5 / ($TWOright5 + $TWOwrong5)) * 100;
            }
            echo "Livret de 2: ";
            echo(round($PERCENTTWO));
            echo "% | ";
            echo(round($PERCENTTWO5));
            echo "% de bonnes réponses </br >";
        }
        if ($THREEright != 0 || $THREEwrong != 0 || $THREEright5 != 0 || $THREEwrong5 != 0) {
            $PERCENTTHREE5 = 0;
            if ($THREEwrong == 0 && $THREEright != 0) {
                $PERCENTTHREE = 100;
            } elseif ($THREEwrong != 0 && $THREEright !=0) {
                $PERCENTTHREE = ($THREEright / ($THREEright + $THREEwrong)) * 100;
            }
            if ($THREEwrong5 == 0 && $THREEright5 != 0) {
                $PERCENTTHREE5 = 100;
            } elseif ($THREEwrong5 != 0 && $THREEright5 !=0) {
                $PERCENTTHREE5 = ($THREEright5 / ($THREEright5 + $THREEwrong5)) * 100;
            }
            echo "Livret de 3: ";
            echo(round($PERCENTTHREE));
            echo "% | ";
            echo(round($PERCENTTHREE5));
            echo "% de bonnes réponses </br >";
        }
        if ($FOURright != 0 || $FOURwrong != 0 || $FOURright5 != 0 || $FOURwrong5 != 0) {
            $PERCENTFOUR5 = 0;
            if ($FOURwrong == 0 && $FOURright != 0) {
                $PERCENTFOUR = 100;
            } elseif ($FOURwrong != 0 && $FOURright !=0) {
                $PERCENTFOUR = ($FOURright / ($FOURright + $FOURwrong)) * 100;
            }
            if ($FOURwrong5 == 0 && $FOURright5 != 0) {
                $PERCENTFOUR5 = 100;
            } elseif ($FOURwrong5 != 0 && $FOURright5 !=0) {
                $PERCENTFOUR5 = ($FOURright5 / ($FOURright5 + $FOURwrong5)) * 100;
            }
            echo "Livret de 4: ";
            echo(round($PERCENTFOUR));
            echo "% | ";
            echo(round($PERCENTFOUR5));
            echo "% de bonnes réponses </br >";
        }
        if ($FIVEright != 0 || $FIVEwrong != 0 || $FIVEright5 != 0 || $FIVEwrong5 != 0) {
            $PERCENTFIVE5 = 0;
            if ($FIVEwrong == 0 && $FIVEright != 0) {
                $PERCENTFIVE = 100;
            } elseif ($FIVEwrong != 0 && $FIVEright !=0) {
                $PERCENTFIVE = ($FIVEright / ($FIVEright + $FIVEwrong)) * 100;
            }
            if ($FIVEwrong5 == 0 && $FIVEright5 != 0) {
                $PERCENTFIVE5 = 100;
            } elseif ($FIVEwrong5 != 0 && $FIVEright5 !=0) {
                $PERCENTFIVE5 = ($FIVEright5 / ($FIVEright5 + $FIVEwrong5)) * 100;
            }
            echo "Livret de 5: ";
            echo(round($PERCENTFIVE));
            echo "% | ";
            echo(round($PERCENTFIVE5));
            echo "% de bonnes réponses </br >";
        }
        if ($SIXright != 0 || $SIXwrong != 0 || $SIXright5 != 0 || $SIXwrong5 != 0) {
            $PERCENTSIX5 = 0;
            if ($SIXwrong == 0 && $SIXright != 0) {
                $PERCENTSIX = 100;
            } elseif ($SIXwrong != 0 && $SIXright !=0) {
                $PERCENTSIX = ($SIXright / ($SIXright + $SIXwrong)) * 100;
            }
            if ($SIXwrong5 == 0 && $SIXright5 != 0) {
                $PERCENTSIX5 = 100;
            } elseif ($SIXwrong5 != 0 && $SIXright5 !=0) {
                $PERCENTSIX5 = ($SIXright5 / ($SIXright5 + $SIXwrong5)) * 100;
            }
            echo "Livret de 6: ";
            echo(round($PERCENTSIX));
            echo "% | ";
            echo(round($PERCENTSIX5));
            echo "% de bonnes réponses </br >";
        }
        if ($SEVENright != 0 || $SEVENwrong != 0 || $SEVENright5 != 0 || $SEVENwrong5 != 0) {
            $PERCENTSEVEN5 = 0;
            if ($SEVENwrong == 0 && $SEVENright != 0) {
                $PERCENTSEVEN = 100;
            } elseif ($SEVENwrong != 0 && $SEVENright !=0) {
                $PERCENTSEVEN = ($SEVENright / ($SEVENright + $SEVENwrong)) * 100;
            }
            if ($SEVENwrong5 == 0 && $SEVENright5 != 0) {
                $PERCENTSEVEN5 = 100;
            } elseif ($SEVENwrong5 != 0 && $SEVENright5 !=0) {
                $PERCENTSEVEN5 = ($SEVENright5 / ($SEVENright5 + $SEVENwrong5)) * 100;
            }
            echo "Livret de 7: ";
            echo(round($PERCENTSEVEN));
            echo "% | ";
            echo(round($PERCENTSEVEN5));
            echo "% de bonnes réponses </br >";
        }
        if ($EIGHTright != 0 || $EIGHTwrong != 0 || $EIGHTright5 != 0 || $EIGHTwrong5 != 0) {
            $PERCENTEIGHT5 = 0;
            if ($EIGHTwrong == 0 && $EIGHTright != 0) {
                $PERCENTEIGHT = 100;
            } elseif ($EIGHTwrong != 0 && $EIGHTright !=0) {
                $PERCENTEIGHT = ($EIGHTright / ($EIGHTright + $EIGHTwrong)) * 100;
            }
            if ($EIGHTwrong5 == 0 && $EIGHTright5 != 0) {
                $PERCENTEIGHT5 = 100;
            } elseif ($EIGHTwrong5 != 0 && $EIGHTright5 !=0) {
                $PERCENTEIGHT5 = ($EIGHTright5 / ($EIGHTright5 + $EIGHTwrong5)) * 100;
            }
            echo "Livret de 8: ";
            echo(round($PERCENTEIGHT));
            echo "% | ";
            echo(round($PERCENTEIGHT5));
            echo "% de bonnes réponses </br >";
        }
        if ($NINEright != 0 || $NINEwrong != 0 || $NINEright5 != 0 || $NINEwrong5 != 0) {
            $PERCENTNINE5 = 0;
            if ($NINEwrong == 0 && $NINEright != 0) {
                $PERCENTNINE = 100;
            } elseif ($NINEwrong != 0 && $NINEright !=0) {
                $PERCENTNINE = ($NINEright / ($NINEright + $NINEwrong)) * 100;
            }
            if ($NINEwrong5 == 0 && $NINEright5 != 0) {
                $PERCENTNINE5 = 100;
            } elseif ($NINEwrong5 != 0 && $NINEright5 !=0) {
                $PERCENTNINE5 = ($NINEright5 / ($NINEright5 + $NINEwrong5)) * 100;
            }
            echo "Livret de 9: ";
            echo(round($PERCENTNINE));
            echo "% | ";
            echo(round($PERCENTNINE5));
            echo "% de bonnes réponses </br >";
        }
        if ($TENright != 0 || $TENwrong != 0 || $TENright5 != 0 || $TENwrong5 != 0) {
            $PERCENTTEN5 = 0;
            if ($TENwrong == 0 && $TENright != 0) {
                $PERCENTTEN = 100;
            } elseif ($TENwrong != 0 && $TENright !=0) {
                $PERCENTTEN = ($TENright / ($TENright + $TENwrong)) * 100;
            }
            if ($TENwrong5 == 0 && $TENright5 != 0) {
                $PERCENTTEN5 = 100;
            } elseif ($TENwrong5 != 0 && $TENright5 !=0) {
                $PERCENTTEN5 = ($TENright5 / ($TENright5 + $TENwrong5)) * 100;
            }
            echo "Livret de 10: ";
            echo(round($PERCENTTEN));
            echo "% | ";
            echo(round($PERCENTTEN5));
            echo "% de bonnes réponses </br >";
        }
        if ($ELEVENright != 0 || $ELEVENwrong != 0 || $ELEVENright5 != 0 || $ELEVENwrong5 != 0) {
            $PERCENTELEVEN5 = 0;
            if ($ELEVENwrong == 0 && $ELEVENright != 0) {
                $PERCENTELEVEN = 100;
            } elseif ($ELEVENwrong != 0 && $ELEVENright !=0) {
                $PERCENTELEVEN = ($ELEVENright / ($ELEVENright + $ELEVENwrong)) * 100;
            }
            if ($ELEVENwrong5 == 0 && $ELEVENright5 != 0) {
                $PERCENTELEVEN5 = 100;
            } elseif ($ELEVENwrong5 != 0 && $ELEVENright5 !=0) {
                $PERCENTELEVEN5 = ($ELEVENright5 / ($ELEVENright5 + $ELEVENwrong5)) * 100;
            }
            echo "Livret de 11: ";
            echo(round($PERCENTELEVEN));
            echo "% | ";
            echo(round($PERCENTELEVEN5));
            echo "% de bonnes réponses </br >";
        }
        if ($TWELVEright != 0 || $TWELVEwrong != 0 || $TWELVEright5 != 0 || $TWELVEwrong5 != 0) {
            $PERCENTTWELVE5 = 0;
            if ($TWELVEwrong == 0 && $TWELVEright != 0) {
                $PERCENTTWELVE = 100;
            } elseif ($TWELVEwrong != 0 && $TWELVEright !=0) {
                $PERCENTTWELVE = ($TWELVEright / ($TWELVEright + $TWELVEwrong)) * 100;
            }
            if ($TWELVEwrong5 == 0 && $TWELVEright5 != 0) {
                $PERCENTTWELVE5 = 100;
            } elseif ($TWELVEwrong5 != 0 && $TWELVEright5 !=0) {
                $PERCENTTWELVE5 = ($TWELVEright5 / ($TWELVEright5 + $TWELVEwrong5)) * 100;
            }
            echo "Livret de 12: ";
            echo(round($PERCENTTWELVE));
            echo "% | ";
            echo(round($PERCENTTWELVE5));
            echo "% de bonnes réponses </br >";
        }
        echo "<form method=post action='index.php'>";
        echo "</br >";
        echo "<input type='submit' name='true' value='Supprimer mes stats' class='button special'>";
        echo "</form>";
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