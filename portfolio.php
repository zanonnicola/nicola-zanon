<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE]>           <html class="ie"> <![endif]-->
<!--[if gt IE 8]><!--> <html itemscope itemtype="http://schema.org/WebPage" class="no-js" lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Portfolio - Responsive web design || Nicola Zanon</title>
        <meta name="description" content="Discover my latest Responsive Web Design projects. I help companies make the most of their web presence." />
        <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1" />
        <link rel="shortcut icon" href="favicon.gif" type="image/x-icon" />

        <!-- Google Authorship and Publisher Markup -->
        <link rel="author" href="https://plus.google.com/+NicolaZanon"/>

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Portfolio - Responsive web design || Nicola Zanon">
        <meta itemprop="description" content="Discover my latest Responsive Web Design projects. I help companies make the most of their web presence.">
        <meta itemprop="image" content="http://www.nicola-zanon.com/img/video-g.jpg">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="http://www.nicola-zanon.com/img/video-tw.jpg">
        <meta name="twitter:site" content="@ZanonNicola">
        <meta name="twitter:title" content="Portfolio - Responsive web design || Nicola Zanon">
        <meta name="twitter:description" content="Discover my latest Responsive Web Design projects. I help companies make the most of their web presence.">
        <meta name="twitter:creator" content="@ZanonNicola">
        <!-- Twitter summary card with large image must be at least 280x150px -->
        <meta name="twitter:image:src" content="http://www.nicola-zanon.com/img/video-tw.jpg">

        <!-- Open Graph data -->
        <meta property="og:title" content="Portfolio - Responsive web design || Nicola Zanon" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.nicola-zanon.com/portfolio.php" />
        <meta property="og:image" content="http://www.nicola-zanon.com/img/video-tw.jpg" />
        <meta property="og:description" content="Discover my latest Responsive Web Design projects. I help companies make the most of their web presence." />
        <meta property="og:site_name" content="Nicola Zanon" />        

        <link rel="stylesheet" href="css/global.css">
		
		<link rel="canonical" href="http://www.nicola-zanon.com/portfolio.php" />
            
        <script src="js/min/modernizr-2.6.2.min.js"></script>
        <script>
            Modernizr.addTest("boxsizing", function() {
                return Modernizr.testAllProps("boxSizing") && 
                (document.documentMode === undefined || document.documentMode > 7);
            });
            Modernizr.load([
                {
                  test: Modernizr.mq('only all'),
                  nope: 'js/min/respond.min.js'
                },
                {
                    test: window.matchMedia,
                    nope: "js/min/matchmedia.min.js"
                }
            ]);
            if(document.documentMode) {
                document.documentElement.className+=' ie'+document.documentMode;
            }
            /* grunticon Stylesheet Loader | https://github.com/filamentgroup/grunticon | (c) 2012 Scott Jehl, Filament Group, Inc. | MIT license. */
            window.grunticon=function(e){
            if(e&&3===e.length){var t=window,n=!(!t.document.createElementNS||!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||window.opera&&-1===navigator.userAgent.indexOf("Chrome")),o=function(o){var r=t.document.createElement("link"),a=t.document.getElementsByTagName("script")[0];r.rel="stylesheet",r.href=e[o&&n?0:o?1:2],a.parentNode.insertBefore(r,a)},r=new t.Image;r.onerror=function(){o(!1)},r.onload=function(){o(1===r.width&&1===r.height)},r.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}
            };

            grunticon(
                [ 
                    "css/icons/output/icons.data.svg.css", 
                    "css/icons/output/icons.data.png.css", 
                    "css/icons/output/icons.fallback.css"
                ]
            );
        </script>
        <noscript><link href="css/icons/output/icons.fallback.css" rel="stylesheet"></noscript>
    </head>
    <body id="portfolio2" data-features="common hack portfolioFunctions">
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
        <div class="border-top"></div>

        <?php 
            $page = 'home'; 
            include("navigation.php"); 
        ?>

        <div role="main">

            <div class="wrapper">
                <?php include("top-menu.php") ?>

                <div itemprop="breadcrumb" class="breadcrumbs">
                    <a href="/">Home</a>
                    <span>/</span>
                    <a href="/portfolio.php">Portfolio</a>
                </div>

                <header class="portfolio-header">
                    <h1>Portfolio</h1>
                    <hr class="divider" />
                    <p>All works listed<br /> below are Responsive<br />Web Sites</p>
                </header>

                <section class="grid">
                    <a rel="external" href="http://www.manueledepretto.com/"> 
                        <div> 
                            <span class="icons icon-manu-logo"></span> 
                            <small>manueledepretto.com</small> 
                        </div> 
                    </a>
                    <a rel="external" href="http://www.gruppoesedra.it/"> 
                        <div> 
                            <span class="icons icon-esedra-logo"></span> 
                            <small>gruppoesedra.it</small> 
                        </div> 
                    </a>
                    <a rel="external" href="http://www.100giornidapecora.com/"> 
                        <div> 
                            <span class="icons icon-100pecora-logo"></span> 
                            <small>100giornidapecora.com</small> 
                        </div> 
                    </a>
                    <a rel="external" href="http://www.deprettomoto.com/"> 
                        <div> 
                            <span class="icons icon-dpm-logo"></span> 
                            <small>deprettomoto.com</small> 
                        </div> 
                    </a>
                </section>

                <section class="grid last">
                    <a rel="external" href="http://www.photobox.co.uk/evolution-of-photography/"> 
                        <div> 
                            <span class="icons icon-pbx"></span> 
                            <small>evolution of photography</small> 
                        </div> 
                    </a>
                    <a rel="external" href="http://www.dpm-marine.com/"> 
                        <div> 
                            <span class="icons icon-dpmmarine-logo"></span> 
                            <small>dpmmarine.com</small> 
                        </div> 
                    </a>
                    <a rel="external" href="http://www.giovannidibernardo.com/"> 
                        <div> 
                            <span class="icons icon-gdb-logo"></span> 
                            <small>giovannidibernardo.com</small> 
                        </div> 
                    </a>
                    <a rel="external" href="http://www.progetto5.eu/"> 
                        <div> 
                            <span class="icons icon-p5"></span> 
                            <small>progetto5.eu</small> 
                        </div> 
                    </a>
                </section>

                <section class="grid last">
                    <a rel="external" href="http://www.feelandchic.it/"> 
                        <div> 
                            <span class="icons icon-feelandchic-logo"></span> 
                            <small>feelandchic.it</small> 
                        </div> 
                    </a>
                    <a rel="external" href="http://www.ristorantebarvenezia.it/"> 
                        <div> 
                            <span class="icons icon-venezia-logo"></span> 
                            <small>ristorantebarvenezia.it</small> 
                        </div> 
                    </a>
                    <a rel="external" href="http://www.spiritodelgrappa.it/"> 
                        <div> 
                            <span class="icons icon-spirito-logo"></span> 
                            <small>spiritodelgrappa.it</small> 
                        </div> 
                    </a>
                    <a rel="external" href="http://www.posamarmizanon.it/"> 
                        <div> 
                            <span class="icons icon-posa-logo"></span> 
                            <small>posamarmizanon.it</small> 
                        </div> 
                    </a>        
                </section>

                <section class="tools">
                    <header class="portfolio-header">
                        <h1>Tools &amp; Gears</h1>
                        <hr class="divider" />
                        <p>A collection of the<br />tools that I use on<br />daily basis</p>
                    </header>
                    <div class="bg-portfolio">
                        <div class="m-all t-all d-all">
                            <div class="claim">
                                <span class="tip">!</span>
                                <p>Starting a new project can be painful and time consuming. You have to perfom some tedious actions such as: lots of copying an pasting from previous projects, finding assets (icons, images, js...), downloading the latest version of your plugins etc...</p>
                                <p>What can I do about it?</p>
                                <p><strong class="highlight">Responsive Starterpack</strong><br />
                                A combination of HTML5 boilerplate and front-end resources to kick off real quick a Responsive web design project
                                </p>
                                <a rel="external" href="https://github.com/zanonnicola/responsive-starterpack" class="button">View project</a>
                            </div>
                        </div>
                        <div class="m1 t1 d1-d3">
                            <div class="bg-portfolio-content">
                                <span class="icons icon-bower"></span>
                                <h3>Bower</h3>
                                <p>Bower is a package manager for the web. It offers a generic, unopinionated solution to the problem of front-end package management</p> 
                            </div>
                        </div>
                        <div class="m2 t2 d4-d6">
                            <div class="bg-portfolio-content">
                                <span class="icons icon-grunt"></span> 
                                <h3>Grunt.JS</h3>
                                <p>The less work you have to do when performing repetitive tasks like minification, compilation, unit testing, linting, etc, the easier your job becomes.</p>
                            </div>
                        </div>
                        <div class="m1 t3 d7-d9">
                            <div class="bg-portfolio-content">
                                <span class="icons icon-prepos"></span>
                                <h3>Prepos</h3>
                                <p>Prepros is a web design &amp; developement tool that does all the heavy lifting needed to preprocess, optimize and test your sites and keeps your workflow supercharged.</p>
                            </div>
                        </div>
                        <div class="m2 t4 d10-d12">
                            <div class="bg-portfolio-content">
                                <span class="icons icon-ftploy"></span>
                                <h3>Ftploy</h3>
                                <p>FTPloy is designed to fit with my existing workflow. I can keep my repos on GitHub or Bitbucket and the rest is done for me. When I push, he deploys.</p>
                            </div>
                        </div>
                        <div class="m1 t1 d1-d3">
                            <div class="bg-portfolio-content">
                                <span class="icons icon-sass"></span>
                                <h3>Sass</h3>
                                <p>Sass is the most mature, stable, and powerful professional grade CSS extension language in the world. <b>CSS</b> with superpowers. </p> 
                            </div>
                        </div>
                        <div class="m2 t2 d4-d6">
                            <div class="bg-portfolio-content">
                                <span class="icons icon-modernizr"></span> 
                                <h3>Modernizr</h3>
                                <p>Modernizr makes it easy for you to write conditional JavaScript and CSS to handle each situation, whether a browser supports a feature or not.</p>
                            </div>
                        </div>
                        <div class="m1 t3 d7-d9">
                            <div class="bg-portfolio-content">
                                <span class="icons icon-proto"></span>
                                <h3>Adobe proto</h3>
                                <p>A fresh little touchscreen app for rapidly prototyping interactive designs on an iPad or Android tablet.</p>
                            </div>
                        </div>
                        <div class="m2 t4 d10-d12">
                            <div class="bg-portfolio-content">
                                <span class="icons icon-paper"></span>
                                <h3>Paper</h3>
                                <p>Paper is the easiest and most beautiful way to create on iPad. Capture your ideas as sketches, diagrams, illustrations, notes or drawings and share them across the web.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div> <?php #end .wrapper ?>     
                <?php include("footer.php"); ?>


        </div> <?php #END MAIN ?>

        <!-- build:js js/build/production.min.js -->
        <script src="js/min/jquery-1.9.1.min.js"></script>
        <script src="js/min/plugins.min.js"></script>
        <script src="js/min/functions.min.js"></script>
        <!-- /build -->

        <!--<script>
            var newscript = document.createElement("script");
            newscript.async = true;
            newscript.src = document.location.protocol + "js/build/production.min.js";
            var s0 = document.getElementsByTagName('script')[0];
            s0.parentNode.insertBefore(newscript, s0);
        </script>-->            
    </body>
</html>