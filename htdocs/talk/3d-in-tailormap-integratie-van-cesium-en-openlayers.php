<?php include_once '../common.php';
include_once ("../mysql.php");
$languages = array(0 => "?", 1 => "nl", 2 => "fr", 3 => "en");
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['URL_SHORT']; ?>">

<head>
    <title>
        <?php echo $lang['SITE_TITLE']; ?>
    </title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?php echo $lang['SITE_DESCRIPTION']; ?>" />
    <meta name="keywords" content="<?php echo $lang['SITE_KEYWORDS']; ?>" />
    <meta name="geo.placename" content="Bd Simon Bolivar 30, WTC III, 1000 Bruxelles, Belgium" />
    <meta name="geo.placename" content="Bd Simon Bolivar 30, WTC III, 1000 Bruxelles, Belgium" />
    <meta name="geo.placename" content="Bd Simon Bolivar 30, WTC III, 1000 Bruxelles, Belgium" />
    <!--<meta name="geo.position" content="50.866248;4.349073" />-->
    <!--<meta name="geo.position" content="50.866248;4.349073" />-->
    <!--<meta name="geo.position" content="50.866248;4.349073" />-->
    <meta name="geo.region" content="BE-Brussels" />
    <!--<meta name="ICBM" content="50.866248, 4.349073" />	-->
    <!--<meta name="ICBM" content="50.866248, 4.349073" />	-->
    <!--<meta name="ICBM" content="50.866248, 4.349073" />	-->
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="/js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/jquery.dropotron.min.js" type="text/javascript"></script>
    <script src="/js/jquery.scrollgress.min.js" type="text/javascript"></script>
    <script src="/js/skel.min.js" type="text/javascript"></script>
    <script src="/js/skel-layers.min.js" type="text/javascript"></script>
    <script src="/js/init.js" type="text/javascript"></script>
    <script src="/js/init.js" type="text/javascript"></script>
    <script src="/js/init.js" type="text/javascript"></script>
    <link rel="canonical" href="http://www.foss4g.be/" />
    <noscript>
        <link rel="stylesheet" href="/css/skel.css" />
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/style-wide.css" />
    </noscript>
    <link rel="stylesheet" href="/css/style-talk.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>

<body>

    <!-- Header -->
    <header id="header">
        <?php include '../header.inc'; ?>
    </header>

    <!-- Main -->
    <section id="main" class="container">

        <div class="content">
            <h2>3D in Tailormap, Integratie van Cesium en OpenLayers</h2>

            <div class="prog-speaker">Stein Köbben</div>
            <div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>
            <div class="prog-theme icon">3D</div>
            <div class="prog-tl">
                <div class="prog-sched icon"><?php echo $lang['PROG_THU'] ?>, 14h05 - 14h25</div>
                <div class="prog-track tr2 icon">Grote zaal</div>
            </div>

            <div class="abstract">
                <p>
                    Er is 3D functionaliteit geïntegreerd in Tailormap. Met Tailormap kunnen gebruikers kaarten
                    publiceren in web viewers, en met deze uitbreiding kunnen ze hier ook 3D datasets aan toevoegen. Dit
                    is gedaan door Cesium te integreren in Tailormap, wat gebaseerd is op OpenLayers. Deze
                    functionaliteit is met een gebruiker gericht proces geïntegreerd.
                </p>
            </div>
        </div>

        <div class="nav bottom" style="margin-top: 50px;">
            <prev></prev><a href="/programme.php" title="<?php echo $lang['MENU_PROGRAM']; ?>">
                <?php echo $lang['MENU_PROGRAM']; ?>
            </a>
        </div>
    </section>


    <!-- CTA -->
    <section id="cta">

        <p>
            <?php echo $lang['FOOTER_THANKS']; ?>
        <p>
        <p>
            <?php echo $lang['FOOTER_THANKS_ALL']; ?>
        </p>
        <p>
            <?php echo $lang['FOOTER_MORE']; ?>
        </p>

    </section>

    <!-- Footer -->
    <footer id="footer">
        <?php include '../footer.inc'; ?>
    </footer>
    <script>
        $('.js-toggleNext').click(function () {
            abstractdiv = $(this).next();
            abstractdiv.toggle();
        });
    </script>
</body>

</html>
<?php
mysqli_close($link);
?>