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
<!--    <link rel="stylesheet" href="css/main.min.css"> -->
    <script src="https://kit.fontawesome.com/efd404a07b.js"></script>
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
    <div id="bgbox"></div>
    <div id="core_fullbox">
        <div id="header">
            <div id="site_id">
                <a href="<?php bloginfo('url'); ?>">
                    <img src="" alt="" id="site_logo">
                    <h1>
                      <?php bloginfo("name"); ?>
                    </h1>
                </a>
            </div>
            <div id="top_menu">
                <ul>
                    <li>
                        <a href="http://facebook.com" class="fab fa-facebook-f social social_fb"></a>
                    </li>
                    <li>
                        <a href="http://twitter.com" class="fab fa-twitter social social_twitter"></a>
                    </li>
                    <li>
                        <a href="http://this_sites.com/RSS/" class="fas fa-rss social social_rss"></a>
                    </li>
                    <li>
                        <a href="mailto:" class="far fa-envelope social social_mail"></a>
                    </li>
                </ul>
            </div>
            <div id="site_menu">
                <div id="main_menu">
                    <ul>
                        <?php wp_list_categories('orderby=name&title_li='); ?>
                    </ul>
                </div>
                <div id="site_search">
                    <div id="search_box"></div>
                    <div id="search_button">
                        <img src="" alt="">
                        <a href="http://"></a>
                    </div>
                </div>
                <div id="hubs_menu">
                    <ul>
                        <li>
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
            <div id="slideshow">
              <div class="slidenav">
                <input selected="true" checked="" name="slider" id="slide1" type="radio">
                <label for="slide1">1</label>
                <input selected="false" name="slider" id="slide2" type="radio">
                <label for="slide2">2</label>
                <input selected="false" name="slider" id="slide3" type="radio">
                <label for="slide3">3</label>
                <input selected="false" name="slider" id="slide4" type="radio">
                <label for="slide4">4</label>
                <input selected="false" name="slider" id="slide5" type="radio">
                <label for="slide5">5</label>
              </div>


                <div id="overflow">
                    <div class="inner">
                      <?php
                          $args = array( 'category_name' => 'featured', 'posts_per_page' => 5 );
                          $slidecounter = 0;
                      		$loop = new WP_Query( $args );
                      		while ( $loop->have_posts() ) : $loop->the_post();
                          $do_not_duplicate[] = $post->ID;
                          $slidecounter++;
                      ?>
                      <div <?php post_class('slide fade-in slidepost_' . $slidecounter); ?> id="post-<?php the_ID(); ?>">
                        <div class="touchclickblocker"></div>
                        <a href="<?php the_permalink() ?>"></a>
                        <h3 class="title"><?php the_title() ?></h3>
                        <?php the_excerpt() ?>
                        <div class="date"><?php the_date() ?></div>
                        <?php the_category() ?>
                        <div class="imgplane"></div>
                      </div>
                      <?php endwhile; ?>
                    </div>
                </div>
            </div>


            <div id="postbox">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('index brick index_post'); ?>>
                    <a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark" class="postlink">
                        <h3 class="post_title"<?php the_title(); ?></h3>
                        <p class="post_excerpt"><?php the_excerpt(); ?></p>
                        <div class="categories">
                            <?php $category = get_the_category(); echo $category[0]->cat_name; ?>
                        </div>
                        <div class="imgplane"></div>
                    </a>
                </div>
                <?php endwhile; else: ?>

                      <p><?php _e('Sorry, no posts matched your criteria.'); ?>

                      </p>

                <?php endif; ?>
            </div>
        </div>
        <div id="sidebar">
            <div class="widget">
                <h3 class="widget_title">Awesome Widget Title</h3>
                <div class="widget_contents">I guess graphics, buttons AND blah-blahs!</div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Awesome Widget Title</h3>
                <div class="widget_contents">I guess graphics, buttons AND blah-blahs!</div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Awesome Widget Title</h3>
                <div class="widget_contents">I guess graphics, buttons AND blah-blahs!</div>
            </div>
            <div class="widget">
                <h3 class="widget_title">Awesome Widget Title</h3>
                <div class="widget_contents">I guess graphics, buttons AND blah-blahs!</div>
            </div>
        </div>
        <div id="footer">
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
