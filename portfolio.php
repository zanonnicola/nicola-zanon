<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE]>           <html class="ie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Nicola Zanon - Portfolio</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, initial-scale=1" />

        <meta itemprop="name" content="">
        <meta itemprop="description" content="">
        <meta itemprop="image" content="">

        <link rel="stylesheet" href="css/global.css">
            
        <script src="js/min/modernizr-2.6.2.min.js"></script>
        <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/2.1.0/es5-shim.min.js"></script>
        <![endif]-->
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
    <body id="portfolio">
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
        <div class="border-top"></div>

        <?php $page = 'portfolio'; 
            include("navigation.php"); 
        ?>

        <div role="main">
            <div id="portfolioContainer" class="container">
                <?php include("top-menu.php") ?>
                <aside class="left-portfolio">
                    <div class="fixed">
                        <div id="bg" class="bg-portfolio esedra">
                            <div class="project-info">

                                <div class="p1">
                                    <h4 id="subtitle-portfolio" class="subtitle-portfolio">Project</h4>
                                    <h1 id="title-portfolio" class="title-portfolio">Gruppo Esedra Srl</h1>
                                    <a id="site" class="site" href="http://www.gruppoesedra.it">www.gruppoesedra.it</a>
                                    <a id="button" class="button trasparent" href="http://www.gruppoesedra.it">See live site</a>    
                                </div>

                            </div><?php #END DIV.project-info ?>
                        </div>
                    </div>
                </aside>
                
                <div class="right-portfolio">
                    <div class="wrapper">
                        <section class="m-all t-all d-all">
                            <div class="breadcrumbs">
                                <a href="/">Home</a>
                                <span>/</span>
                                <a href="/portfolio.php">Portfolio</a>
                            </div>
                            <article class="intro-portfolio">
                                <h1>This is my<br />portfolio</h1>
                                <p>All the works listed below are <em>Responsive Web Sites</em>.<br />I try, based on the project's need, to build something that can be useful with all the necessary informations but at the same time that would be simple to interact with.</p>
                            </article>

                            <div id="pattern" class="pattern">
                            
                                <a data-class="esedra" href="http://www.gruppoesedra.it"> 
                                    <div> 
                                        <span class="project-1">Gruppo Esedra</span>
                                    </div> 
                                </a>
                                 <a data-class="manu" href="http://www.manueledepretto.com/"> 
                                    <div> 
                                        <span class="project-2">Manuele De Pretto</span> 
                                    </div> 
                                </a> 
                                 <a data-class="feel" href="http://www.feelandchic.it"> 
                                    <div> 
                                        <span class="project-3">Feel &amp; Chic</span> 
                                    </div> 
                                </a> 
                                 <a data-class="pecora" href="http://www.100giornidapecora.com/"> 
                                    <div> 
                                        <span class="project-4">100 giorni da pecora</span>  
                                    </div> 
                                </a> 
                                 <a data-class="dpm" href="http://www.deprettomoto.com"> 
                                    <div> 
                                        <span class="project-5">De Pretto Moto</span> 
                                    </div> 
                                </a> 
                                 <a data-class="venezia" href="http://www.ristorantebarvenezia.it"> 
                                    <div> 
                                        <span class="project-6">Ristorante Bar Venezia</span>  
                                    </div> 
                                </a> 
                                 <a data-class="grappa" href="http://www.spiritodelgrappa.it"> 
                                    <div> 
                                        <span class="project-7">Spirito del grappa</span>  
                                    </div> 
                                </a> 
                                 <a data-class="posa" href="http://www.posamarmizanon.it"> 
                                    <div> 
                                        <span class="project-8">Posa Marmi Zanon</span> 
                                    </div> 
                                </a>        
                            </div>
                        </section>
                    <?php include("footer.php"); ?>
                    </div> <?php #END WRAPPER ?>       
                </div> <?php #END RIGHT_PORTFOLIO ?>
            </div> <?php #END CONTAINER ?>

        </div> <?php #END MAIN ?>

        <script src="js/min/jquery-1.9.1.min.js"></script>
        <script src="js/min/plugins.min.js"></script>
        <script defer src="js/min/functions.min.js"></script>
        <!--<script defer src="js/min/slidebg.min.js"></script>-->
    </body>
</html>