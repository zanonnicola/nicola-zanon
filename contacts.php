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
        <script>
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
            
                <div class="bg-contact">
                    <div class="m-all t1-t2 d1-d5">
                        <h1 class="heading">Thank you for<br />the visit!</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <h2>Drop me a line:</h2>
                        <form id="contact-form" class="contact-form" method="post" action="mail.php">
                            <input type="hidden" name="pagina" value="contact">
                            <fieldset>
                                <ul>
                                    <li>
                                        <label for="name">Name:</label>
                                        <input id="name" name="name" type="text" placeholder="Name:" d>
                                    </li>
                                    <li>
                                        <label for="email">Email:</label>
                                        <input id="email" name="email" type="email" placeholder="Email:">
                                    </li>
                                    <li>
                                        <label for="phone">Telephone:</label>
                                        <input id="phone" name="phone" type="tel" placeholder="Telephone:">
                                    </li>
                                    <li>
                                        <label for="information">Your message...</label>
                                        <textarea id="information" name="information" rows="10" placeholder="Your message..."></textarea>
                                    </li>
                                </ul>
                            </fieldset>

                            <fieldset>
                                <a id="contact-btn" type="submit" class="button" href="#">Submit</a>
                            </fieldset>
                        </form> 
                    </div>   
                </div> <?php #END DIV.wrapper ?>
            </div> <?php #END DIV.bg-contacts ?>
            
            <div class="about-me">
                <div class="wrapper">
                    <h2>About me</h2>
                    <div class="m-all t-all d3-d10">
                        <article class="text">
                            <p><span class="capital">I</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </article> 
                    </div>
                </div> <?php #END DIV.wrapper ?>
            </div> <?php #END DIV.about-me ?>
            
            <section class="passion">
                <div class="wrapper">
                    <h2>Passions</h2>
                    <div class="m1 t1-t2 d1-d6">
                        <div class="passion-text">
                            <h3>Web &amp; Graphic Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>
                                Blog I love to follow:
                                <ul class="list">
                                    <li>CSS-Tricks - <a href="http://www.css-tricks.com">Link</a></li>
                                    <li>Smashing Magazine - <a href="http://www.css-tricks.com">Link</a></li>
                                    <li>Steve Sauders - <a href="http://www.css-tricks.com">Link</a></li>
                                    <li>Trent Walton - <a href="http://www.css-tricks.com">Link</a></li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <figure class="m2 t3-t4 d7-d12">
                        <div data-picture data-alt="Book I love to read">
                            <div data-src="img/books-m.jpg"></div>
                            <div data-src="img/books-t.jpg" data-media="(min-width: 401px)"></div>
                            <div data-src="img/books-d.jpg" data-media="(min-width: 1025px)"></div>  
                            
                            <!--[if (lt IE 9) & (!IEMobile)]>
                                <div data-src="img/books-d.jpg"></div>
                            <![endif]--> 

                            <noscript>
                                <img src="img/books-d.jpg" alt="Book I love to read">
                            </noscript>
                        </div>
                    </figure>
                    
                    <div class="m-all t-all d-all line-contacts"></div>

                    <figure data-switch="first" class="m1 t1-t2 d1-d6">
                        <div data-picture data-alt="Book I love to read">
                            <div data-src="img/photography-m.jpg"></div>
                            <div data-src="img/photography-t.jpg" data-media="(min-width: 401px)"></div>
                            <div data-src="img/photography-d.jpg" data-media="(min-width: 1025px)"></div>  
                            
                            <!--[if (lt IE 9) & (!IEMobile)]>
                                <div data-src="img/photography-d.jpg"></div>
                            <![endif]--> 

                            <noscript>
                                <img src="img/photography-d.jpg" alt="Book I love to read">
                            </noscript>
                        </div>
                    </figure>

                    <div data-switch="second" class="m2 t3-t4 d7-d12">
                        <div class="passion-text">
                            <h3>Travel &amp; Photography</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div> <?php #END DIV.wrapper ?>
            </section> <?php #END passion ?>
           
            <?php include("footer.php"); ?>

        </div> <?php #END MAIN ?>

        <script src="js/min/jquery-1.9.1.min.js"></script>
        <script src="js/min/plugins.min.js"></script>
        <script defer src="js/min/functions.min.js"></script>
    </body>
</html>