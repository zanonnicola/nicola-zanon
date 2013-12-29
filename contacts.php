<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE]>           <html class="ie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Nicola Zanon - Contacts</title>
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
            if (/*@cc_on!@*/false) {
                document.documentElement.className+=' ie' + document.documentMode;
            }
        </script>
    </head>
    <body id="contacts">
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
        <div class="border-top"></div>

        <?php 
            $page = 'contacts'; 
            include("navigation.php"); 
        ?>

        <div role="main">

            <div class="wrapper">
                <?php include("top-menu.php") ?>

                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <span>/</span>
                    <a href="/contacts.php">Contacts</a>
                </div>

                <h1>Thank you for the visit</h1>
            </div> <?php #END DIV:WRAPPER ?>

           
            <?php include("footer.php"); ?>

        </div> <?php #END MAIN ?>

        <script src="js/min/jquery-1.9.1.min.js"></script>
        <script src="js/min/plugins.min.js"></script>
        <script defer src="js/min/functions.min.js"></script>
    </body>
</html>