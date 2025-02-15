<?php include_once '../common.php';
include_once("../mysql.php");
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
            <h2>Workshop 3DToolboxNL en 3D Leia viewer</h2>

            <div class="prog-speaker">Marco van Antwerpen, Kamiel Verhelst, Wim Kosten, Joery Zegers, Koen Schippers,
                Thieu Caris</div>
            <div class="prog-lang icon"><?php echo $lang['LANG_NL']; ?></div>

            <div class="prog-tl">
                <div class="prog-sched icon"><?php echo $lang['PROG_WED'] ?>, 13h00 - 15h00</div>
                <div class="prog-track tr3 icon">Judo 2</div>
            </div>

            <div class="abstract">
                <p>
                    Het project 3DToolboxNL is gericht op het beschikbaar maken van open source tooling en documentatie
                    voor het werken met 3D informatie, met name in Cesium, in de Nederlandse context. <a target="_blank"
                        href="https://github.com/3DToolboxNL/3DToolboxNL">https://github.com/3DToolboxNL/3DToolboxNL</a>
                </p>
                <p>
                    In deze workshop laten we zien hoe je met de 3DToolboxNL data zoals het GeoTop model (uit de
                    Basisregistratie Ondergrond) of een AHN DEM kan converteren naar een open standaard zoals 3D Tiles,
                    die zich eenvoudig laat inladen in Cesium. Uiteraard kun je ook zelf data gaan converteren met de
                    3DToolboxNL.
                </p>
                <p>
                    We gebruiken de 3D Leia viewer (Cesium) tijdens de workshop. Leia heeft veel functionaliteit om via
                    een gebruiksvriendelijke interface 2D en 3D data te visualiseren, bevragen, bewerken en analyseren.
                    De Leia viewer wordt al door een aantal overheden gebruikt in digital twins.
                    <a href="https://github.com/leia-project" target="_blank">https://github.com/leia-project</a>
                </p>
                <p>
                    3D data zal klaar staan voor deelnemers. Heb je eigen 3D data die je wil visualiseren neem die mee.
                    Stuur bij voorkeur even een mailtje aan ospo@zeeland.nl met je data dan kan dit van te voren even
                    getest worden.
                </p>
                <p>
                    De handleiding die je volgt om alles voorafgaand aan de workshop geïnstalleerd te hebben staat hier:
                    <a href="https://github.com/ProvincieZeeland/foss4g-nlbe"
                        target="_blank">https://github.com/ProvincieZeeland/foss4g-nlbe</a>
                </p>
                <p>
                    Het is fijn als je alles al draaiende hebt voor aanvang van de workshop. Mocht het toch niet lukken
                    of heb je vragen mail ons ospo@zeeland.nl
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