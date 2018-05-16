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
    <script>
        function valthisform() {
            var chkd = document.FC0.checked || document.FC.c2.checked || document.FC.c3.checked || document.FC.c4.checked

            if (chkd == true) {
            }
            else {
                alert("please check a checkbox")
            }
        }
    </script>
</head>
<body>

<!-- Banner -->
<section id="banner">
    <ul class="actions">
        <li><a href="index.php" class="button special">Retour au menu</a></li>
    </ul>
    <p><b><u>Nouvelle partie: Mode 5 secondes</u></b></p>
    <form method=post action="#">
        <h4>Choisis le(s) livret(s) que tu veux travailler:</h4>
        <input type="checkbox" name="0" value="0" checked>0 &nbsp;
        <input type="checkbox" name="1" value="1">1 &nbsp;
        <input type="checkbox" name="2" value="2">2 &nbsp;
        <input type="checkbox" name="3" value="3">3 &nbsp;<br/><br/>
        <input type="checkbox" name="4" value="4">4 &nbsp;
        <input type="checkbox" name="5" value="5">5 &nbsp;
        <input type="checkbox" name="6" value="6">6 &nbsp;
        <input type="checkbox" name="7" value="7">7 &nbsp;<br/><br/>
        <input type="checkbox" name="8" value="8">8 &nbsp;
        <input type="checkbox" name="9" value="9">9 &nbsp;
        <input type="checkbox" name="10" value="10">10 &nbsp;
        <input type="checkbox" name="11" value="11">11 &nbsp;<br/><br/>
        <input type="checkbox" name="12" value="12">12 <br/>
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