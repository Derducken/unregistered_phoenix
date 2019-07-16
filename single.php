<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Core Phoenix</title>
    <meta name="description" content="Core Phoenix - the best easy, responsive, flexible magazine-like WP theme. Ever.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="img/icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/Boilerplate.css">
<!--    <link rel="stylesheet" href="css/main.min.css">
    <script src="https://kit.fontawesome.com/efd404a07b.js"></script>
-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- Disabled HTML5 Boilerplate stuff
    <script src="js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
    </script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <meta name="theme-color" content="#fafafa">
-->

    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
</head>

<body>
    <div id="bgbox" class="fade-in"></div>
    <div id="core_fullbox" class="fade-in">
        <div id="header" class="fade-in">
            <div id="site_id" class="fade-in">
                <a href="<?php bloginfo('url'); ?>">
                    <img src="" alt="" id="site_logo">
                    <h1>
                      <?php bloginfo("name"); ?>
                    </h1>
                </a>
            </div>
            <div id="top_menu" class="fade-in">
                <ul>
                    <li>
                        <a href="http://facebook.com" class="social social_fb"></a>
                    </li>
                    <li>
                        <a href="http://twitter.com" class="social social_twitter"></a>
                    </li>
                    <li>
                        <a href="http://this_sites.com/RSS/" class="social social_rss"></a>
                    </li>
                    <li>
                        <a href="mailto:" class="social social_mail"></a>
                    </li>
                </ul>
            </div>
            <?php get_search_form( $echo = true ) ?>
            <div id="site_menu" class="fade-in">
                <div id="main_menu" class="fade-in">
                    <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
                </div>
                <div id="hubs_menu" class="fade-in">
                    <ul>
                        <li class="fade-in">
                            <h3>Hub Title 1</h3>
                            <a href="http://"></a>
                            <img src="https://images.pexels.com/photos/355887/pexels-photo-355887.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                        </li>
                        <li>
                            <h3>Hub Title 2</h3>
                            <a href="http://"></a>
                            <img src="https://images.pexels.com/photos/2150/sky-space-dark-galaxy.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                        </li>
                        <li>
                            <h3>Hub Title 3</h3>
                            <a href="http://"></a>
                            <img src="https://images.pexels.com/photos/73873/star-clusters-rosette-nebula-star-galaxies-73873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                        </li>
                        <li>
                            <h3>Hub Title 4</h3>
                            <a href="http://"></a>
                            <img src="https://images.pexels.com/photos/220129/pexels-photo-220129.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                        </li>
                        <li>
                            <h3>Hub Title 5</h3>
                            <a href="http://"></a>
                            <img src="https://images.pexels.com/photos/41951/solar-system-emergence-spitzer-telescope-telescope-41951.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                        </li>
                        <li>
                            <h3>Hub Title 6</h3>
                            <a href="http://"></a>
                            <img src="https://images.pexels.com/photos/355887/pexels-photo-355887.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                        </li>
                        <li>
                            <h3>Hub Title 7</h3>
                            <a href="http://"></a>
                            <img src="https://images.pexels.com/photos/2150/sky-space-dark-galaxy.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                        </li>
                        <li>
                            <h3>Hub Title 8</h3>
                            <a href="http://"></a>
                            <img src="https://images.pexels.com/photos/73873/star-clusters-rosette-nebula-star-galaxies-73873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                        </li>
                        <li>
                            <h3>Hub Title 9</h3>
                            <a href="http://"></a>
                            <img src="https://images.pexels.com/photos/220129/pexels-photo-220129.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                        </li>
                        <li>
                            <h3>Hub Title 10</h3>
                            <a href="http://"></a>
                            <img src="https://images.pexels.com/photos/41951/solar-system-emergence-spitzer-telescope-telescope-41951.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mainsite">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="single_post">
              <h2 class="title"><?php the_title() ?></h2>
              <div class="postinfo">
                <a href="http://" class="author"><?php the_author() ?></a>
                <a href="http://" class="date"><?php the_date() ?></a>
                <div class="tags">
                  <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
                </div>
              </div>
<!--
              <div class="postintro"></div>
-->
              <div class="postcontent">
                  <?php the_content() ?>
              </div>
            </div>

          <?php endwhile; ?>
            <!-- post navigation -->
          <?php else: ?>
            <!-- no posts found -->
          <?php endif; ?>
        </div>
        <div id="sidebar" class="fade-in">
            <div class="widget fade-in">
                <h3 class="widget_title">Awesome Widget Title</h3>
                <div class="widget_contents">I guess graphics, buttons AND blah-blahs!</div>
            </div>
            <div class="widget">
                <h3 class="widget_title fade-in">Awesome Widget Title</h3>
                <div class="widget_contents">I guess graphics, buttons AND blah-blahs!</div>
            </div>
            <div class="widget">
                <h3 class="widget_title fade-in">Awesome Widget Title</h3>
                <div class="widget_contents">I guess graphics, buttons AND blah-blahs!</div>
            </div>
            <div class="widget">
                <h3 class="widget_title fade-in">Awesome Widget Title</h3>
                <div class="widget_contents">I guess graphics, buttons AND blah-blahs!</div>
            </div>
        </div>
        <div id="footer" class="fade-in">
            <div id="footer_left">Some text for da left</div>
            <div id="footer_right">...and some for da right!</div>
        </div>
    </div>


    <!-- Main Phoenix Core theme structure ends here -->



    <!-- Place GA script in footer when theme is done -->
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('set', 'anonymizeIp', true);
        ga('send', 'pageview');
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>



</body>

</html>
