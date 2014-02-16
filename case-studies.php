<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE]>           <html class="ie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Nicola Zanon - Case Studies</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, initial-scale=1" />

        <meta itemprop="name" content="">
        <meta itemprop="description" content="">
        <meta itemprop="image" content="">        

        <link rel="stylesheet" href="css/global.css">
            
        <script src="js/min/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript">
            Modernizr.addTest("boxsizing", function() {
                return Modernizr.testAllProps("boxSizing") && 
                (document.documentMode === undefined || document.documentMode > 7);
            });
            Modernizr.load({
                test: Modernizr.mq('only all'),
                nope: 'js/min/respond.min.js'
            });
            if(document.documentMode) {
                document.documentElement.className+=' ie'+document.documentMode;
            }
        </script>
    </head>
    <body id="casestudies">
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
        <div class="border-top"></div>

        <?php 
            $page = 'casestudies'; 
            include("navigation.php"); 
        ?>

        <div role="main">

            <div class="wrapper">
                <?php include("top-menu.php") ?>

                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <span>/</span>
                    <a href="/case-studies.php">Case Studies</a>
                </div>

                <figure class="m-all t1-t2 d1-d4">
                    <div data-picture data-alt="De pretto case studie sample">
                        <div data-src="img/mobile/depretto-m.jpg"></div>
                        <div data-src="img/mobile/depretto-t.jpg" data-media="(min-width: 401px)"></div>
                        <div data-src="img/depretto.jpg" data-media="(min-width: 1025px)"></div>  
                        
                        <!--[if (lt IE 9) & (!IEMobile)]>
                            <div data-src="img/depretto.jpg"></div>
                        <![endif]--> 

                        <noscript>
                            <img src="img/depretto.jpg" alt="De pretto case studie sample">
                        </noscript>
                    </div>
                </figure>
                <div class="m-all t3-t4 d5-d12">
                    <section class="case-info">
                        <h1>Manuele De Pretto</h1>
                        <h2><a href="http://www.manueledepretto.com">www.manueledepretto.com</a></h2>
                        <p>Manuele is an italian Graphic designer. He asked me to build this site to show his portfolio. Manuele is an italian Graphic designer...</p>
                        <a class="button" href="#">Continue reading</a>
                    </section>
                </div>

                <div class="m-all t-all d-all line"></div>

                <figure class="m-all t1-t2 d1-d4">
                    <div data-picture data-alt="Gruppo Esedra case studie sample">
                        <div data-src="img/mobile/esedra-m.jpg"></div>
                        <div data-src="img/mobile/esedra-t.jpg" data-media="(min-width: 401px)"></div>
                        <div data-src="img/esedra.jpg" data-media="(min-width: 1025px)"></div>  
                        
                        <!--[if (lt IE 9) & (!IEMobile)]>
                            <div data-src="img/esedra.jpg"></div>
                        <![endif]--> 

                        <noscript>
                            <img src="img/esedra.jpg" alt="Gruppo Esedra case studie sample">
                        </noscript>
                    </div>
                </figure>
                <div class="m-all t3-t4 d5-d12">
                    <section class="case-info">
                        <h1>Gruppo Esedra</h1>
                        <h2><a href="http://www.gruppoesedra.it">www.gruppoesedra.it</a></h2>
                        <p>Gruppo Esedra is an Italian marble company. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, modi, saepe, perspiciatis facilis temporibus hic quaerat...</p>
                        <a class="button" href="#">Continue reading</a>
                    </section>
                </div>

                <div class="m-all t-all d-all line"></div>

            </div> <?php #END DIV:WRAPPER ?>

           
            <?php include("footer.php"); ?>

        </div> <?php #END MAIN ?>

        <script src="js/min/jquery-1.9.1.min.js"></script>
        <script src="js/min/plugins.min.js"></script>
        <script defer src="js/min/functions.min.js"></script>
    </body>
</html>