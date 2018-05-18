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
    <form method=post action="free-result.php"">
        <?php
        $trueanswer = $randmult * $randlivret;
        $_SESSION['trueanswer'] = $trueanswer;
        $wrong1 = $randmult * $randlivret - $randlivret;
        $wrong2 = $randmult * $randlivret + $randlivret;
        $wrong3 = $randmult * $randlivret + $randlivret + $randlivret;
        if ($trueanswer == 0) {

            $randorder0 = rand(1, 2);
            if ($randorder0 == 1) {
                echo "<input type='submit' name='true' value='$trueanswer' class='button special'> &nbsp;";
                echo "<input type='submit' name='wrong' value='1' class='button special'>";
            } else {
                echo "<input type='submit' name='wrong' value='1' class='button special'> &nbsp;";
                echo "<input type='submit' name='true' value='$trueanswer' class='button special'>";
            }
        } else {

            $randorder = rand(1, 4);
            if ($randorder == 1) {
                echo "<input type='submit' name='true' value='$trueanswer' class='button special'> &nbsp;";
                echo "<input type='submit' name='wrong' value='$wrong1' class='button special'> <br/><br/>";
                echo "<input type='submit' name='wrong' value='$wrong2' class='button special'> &nbsp;";
                echo "<input type='submit' name='wrong' value='$wrong3' class='button special'>";
            } elseif ($randorder == 2) {
                echo "<input type='submit' name='wrong' value='$wrong1 ' class='button special'> &nbsp;";
                echo "<input type='submit' name='true' value='$trueanswer' class='button special'> <br/><br/>";
                echo "<input type='submit' name='wrong' value='$wrong3' class='button special'> &nbsp;";
                echo "<input type='submit' name='wrong' value='$wrong2' class='button special'>";
            } elseif ($randorder == 3) {
                echo "<input type='submit' name='wrong' value='$wrong2' class='button special'> &nbsp;";
                echo "<input type='submit' name='wrong' value='$wrong3' class='button special'> <br/><br/>";
                echo "<input type='submit' name='true' value='$trueanswer' class='button special'> &nbsp;";
                echo "<input type='submit' name='wrong' value='$wrong1' class='button special'>";
            } elseif ($randorder == 4) {
                echo "<input type='submit' name='wrong' value='$wrong3' class='button special'> &nbsp;";
                echo "<input type='submit' name='wrong' value='$wrong2' class='button special'> <br/><br/>";
                echo "<input type='submit' name='wrong' value='$wrong1' class='button special'> &nbsp;";
                echo "<input type='submit' name='true' value='$trueanswer' class='button special'>";
            }
        }

        ?>
    </form>
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