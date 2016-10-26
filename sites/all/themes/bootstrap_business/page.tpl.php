
<?php if (theme_get_setting('scrolltop_display')): ?>
<div id="toTop"><span class="glyphicon glyphicon-chevron-up"></span></div>
<?php endif; ?>

<?php if ($page['pre_header_first'] || $page['pre_header_second'] || $page['pre_header_third']) :?>
<!-- #pre-header -->
<div id="pre-header" class="clearfix">
    <div class="container">

        <!-- #pre-header-inside -->
        <div id="pre-header-inside" class="clearfix">
            <div class="row">
                <div class="col-md-4">
                    <?php if ($page['pre_header_first']):?>
                    <div class="pre-header-area">
                    <?php print render($page['pre_header_first']); ?>
                    </div>
                    <?php endif; ?>
                </div>
                
                <div class="col-md-4">
                    <?php if ($page['pre_header_second']):?>
                    <div class="pre-header-area">
                    <?php print render($page['pre_header_second']); ?>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="col-md-4">
                    <?php if ($page['pre_header_third']):?>
                    <div class="pre-header-area">
                    <?php print render($page['pre_header_third']); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- EOF: #pre-header-inside -->

    </div>
    <div class="toggle-control"><a href="javascript:showPreHeader()"><span class="glyphicon glyphicon-plus"></span></a></div>
</div>
<!-- EOF: #pre-header -->    
<?php endif; ?>


<?php if ($page['header_top_left'] || $page['header_top_right']) :?>
<!-- #header-top -->
<div id="header-top" class="clearfix">
    <div class="container">

        <!-- #header-top-inside -->
        <div id="header-top-inside" class="clearfix">
            <div class="row">
            
            <?php if ($page['header_top_left']) :?>
            <div class="<?php print $header_top_left_grid_class; ?>">
                <!-- #header-top-left -->
                <div id="header-top-left" class="clearfix">
                    <?php print render($page['header_top_left']); ?>
                </div>
                <!-- EOF:#header-top-left -->
            </div>
            <?php endif; ?>
            
            <?php if ($page['header_top_right']) :?>
            <div class="<?php print $header_top_right_grid_class; ?>">
                <!-- #header-top-right -->
                <div id="header-top-right" class="clearfix">
                    <?php print render($page['header_top_right']); ?>
                </div>
                <!-- EOF:#header-top-right -->
            </div>
            <?php endif; ?>
            
            </div>
        </div>
        <!-- EOF: #header-top-inside -->

    </div>
</div>
<!-- EOF: #header-top -->    
<?php endif; ?>

<!-- header -->
<div id="header" role="banner" class="clearfix">
    <div class="container">

        <!-- #header-inside -->
        <div id="header-inside" class="clearfix">
            <div class="row">
                <div class="row hidden-md hidden-lg mobile-menu col-xs-2 col-sm-2">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <a href="#navigation_mobile"><i class="fa fa-align-justify bg-black"></i></a>
                    </div>
                    <nav id ="navigation_mobile" role="navigation">
                        <?php if ($page['navigation']) :?>
                            <?php print drupal_render($page['navigation']); ?>
                        <?php else : ?>

                            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('main-menu', 'menu'), ), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'), ), )); ?>

                        <?php endif; ?>
                    </nav>
                    <script type="text/javascript">
                        (function($){
                            $(function() {
                                $('#navigation_mobile').mmenu({
                                    extensions	: [ 'effect-slide-menu', 'shadow-page', 'shadow-panels' ],
                                    counters	: true,
                                    navbar 		: {
                                        title		: 'Gói dịch vụ cho thuê'
                                    },
                                    navbars		: [
                                        {
                                            position	: 'top',
                                        }
                                    ]
                                });
                            });
                        })(jQuery)


                    </script>
                </div>
                <div class="col-md-3 col-xs-10 col-sm-10">

                    <?php if ($logo):?>
                    <div id="logo">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
                    </div>
                    <?php endif; ?>


                </div>
                <div class="col-md-6">

                    <?php if ($page['header']) :?>
                        <?php print render($page['header']); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-3">
                    <?php if ($page['header_left']) :?>
                        <?php print render($page['header_left']); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- EOF: #header-inside -->

    </div>
</div>
<!-- EOF: #header --> 

<!-- #main-navigation --> 
<div id="main-navigation" class="clearfix">
    <div class="container">

        <!-- #main-navigation-inside -->
        <div id="main-navigation-inside" class="clearfix">

            <div class="row hidden-sm hidden-xs">
                <div class="sub-header col-md-3 col-sm-3 col-xs-12">
                    <div class="row sidebar-box ">
                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                            <div class="menu-destop menu-box">
                                <a href="#navigation" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <div class="sidebar-box-heading bg-red">
                                        <h4>Danh mục cho thuê</h4>
                                        <i class="fa fa-list"></i>
                                    </div>
                                </a>
                                <nav id ="navigation" role="navigation">
                                    <?php if ($page['navigation']) :?>
                                    <?php print drupal_render($page['navigation']); ?>
                                    <?php else : ?>

                                    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('main-menu', 'menu'), ), 'heading' => array('text' => t('Main menu'), 'level' => 'h2', 'class' => array('element-invisible'), ), )); ?>

                                    <?php endif; ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12 text-right">
                    <?php print render($page['support']); ?>
                </div>
            </div>
        </div>

        <!-- EOF: #main-navigation-inside -->

    </div>
</div>
<!-- EOF: #main-navigation -->

<?php if ($page['banner']) : ?>
<!-- #banner -->
<div id="banner" class="clearfix">
    <div class="container">
        
        <!-- #banner-inside -->
        <div id="banner-inside" class="clearfix">
            <div class="row">
                <div class="col-md-12">
                <?php print render($page['banner']); ?>
                </div>
            </div>
        </div>
        <!-- EOF: #banner-inside -->        

    </div>
</div>
<!-- EOF:#banner -->
<?php endif; ?>

<!-- #page -->
<div id="page" class="clearfix">
    
    <?php if ($page['highlighted']):?>
    <!-- #top-content -->
    <div id="top-content" class="clearfix">
        <div class="container">

            <!-- #top-content-inside -->
            <div id="top-content-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                    <?php print render($page['highlighted']); ?>
                    </div>
                </div>
            </div>
            <!-- EOF:#top-content-inside -->

        </div>
    </div>
    <!-- EOF: #top-content -->
    <?php endif; ?>

    <!-- #main-content -->
    <div id="main-content">
        <div class="container">
        
            <!-- #messages-console -->
            <?php if ($messages):?>
            <div id="messages-console" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                    <?php print $messages; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- EOF: #messages-console -->
            
            <div class="row">

                <?php if ($page['sidebar_first']):?>
                <aside class="<?php print $sidebar_grid_class; ?>">  
                    <!--#sidebar-first-->
                    <section id="sidebar-first" class="sidebar clearfix">
                    <?php print render($page['sidebar_first']); ?>
                    </section>
                    <!--EOF:#sidebar-first-->
                </aside>
                <?php endif; ?>


                <section class="<?php print $main_grid_class; ?>">

                    <!-- #main -->
                    <div id="main" class="clearfix">
                    
                        <?php if ($breadcrumb && theme_get_setting('breadcrumb_display')):?> 
                        <!-- #breadcrumb -->
                        <div id="breadcrumb" class="clearfix">
                            <!-- #breadcrumb-inside -->
                            <div id="breadcrumb-inside" class="clearfix">
                            <?php print $breadcrumb; ?>
                            </div>
                            <!-- EOF: #breadcrumb-inside -->
                        </div>
                        <!-- EOF: #breadcrumb -->
                        <?php endif; ?>

                        <?php if ($page['promoted']):?>
                        <!-- #promoted -->
                            <div id="promoted" class="clearfix">
                                <div id="promoted-inside" class="clearfix">
                                <?php print render($page['promoted']); ?>
                                </div>
                            </div>
                        <!-- EOF: #promoted -->
                        <?php endif; ?>

                        <!-- EOF:#content-wrapper -->
                        <div id="content-wrapper">

                            <?php print render($title_prefix); ?>
                            <?php if ($title):?>
                            <h1 class="page-title"><?php print $title; ?></h1>
                            <?php endif; ?>
                            <?php print render($title_suffix); ?>

                            <?php print render($page['help']); ?>
                      
                            <!-- #tabs -->
                            <?php if ($tabs):?>
                                <div class="tabs">
                                <?php print render($tabs); ?>
                                </div>
                            <?php endif; ?>
                            <!-- EOF: #tabs -->

                            <!-- #action links -->
                            <?php if ($action_links):?>
                                <ul class="action-links">
                                <?php print render($action_links); ?>
                                </ul>
                            <?php endif; ?>
                            <!-- EOF: #action links -->

                            <?php print render($page['content']); ?>
                            <?php print $feed_icons; ?>

                        </div>
                        <!-- EOF:#content-wrapper -->

                    </div>
                    <!-- EOF:#main -->

                </section>

                <?php if ($page['sidebar_second']):?>
                <aside class="<?php print $sidebar_grid_class; ?>">
                    <!--#sidebar-second-->
                    <section id="sidebar-second" class="sidebar clearfix">
                    <?php print render($page['sidebar_second']); ?>
                    </section>
                    <!--EOF:#sidebar-second-->
                </aside>
                <?php endif; ?>
        
            </div>

        </div>
    </div>
    <!-- EOF:#main-content -->

    <?php if ($page['bottom_content']):?>
    <!-- #bottom-content -->
    <div id="bottom-content" class="clearfix">
        <div class="container">

            <!-- #bottom-content-inside -->
            <div id="bottom-content-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                    <?php print render($page['bottom_content']); ?>
                    </div>
                </div>
            </div>
            <!-- EOF:#bottom-content-inside -->

        </div>
    </div>
    <!-- EOF: #bottom-content -->
    <?php endif; ?>

</div>
<!-- EOF:#page -->

<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']):?>
<!-- #footer -->
<footer id="footer" class="clearfix">
    <div class="container">
    
        <!-- #footer-inside -->
        <div id="footer-inside" class="clearfix">
            <div class="row">
                <div class="col-md-3">
                    <?php if ($page['footer_first']):?>
                    <div class="footer-area">
                    <?php print render($page['footer_first']); ?>
                    </div>
                    <?php endif; ?>
                </div>
                
                <div class="col-md-3">
                    <?php if ($page['footer_second']):?>
                    <div class="footer-area">
                    <?php print render($page['footer_second']); ?>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="col-md-3">
                    <?php if ($page['footer_third']):?>
                    <div class="footer-area">
                    <?php print render($page['footer_third']); ?>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="col-md-3">
                    <?php if ($page['footer_fourth']):?>
                    <div class="footer-area">
                    <?php print render($page['footer_fourth']); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- EOF: #footer-inside -->
    
    </div>
</footer> 
<!-- EOF #footer -->
<?php endif; ?>

<footer id="subfooter" class="clearfix">
    <div class="container">
        
        <!-- #subfooter-inside -->
        <div id="subfooter-inside" class="clearfix">
            <div class="row">
                <div class="col-md-12">
                    <!-- #subfooter-left -->
                    <div class="subfooter-area">
                    <?php if ($page['footer']):?>
                    <?php print render($page['footer']); ?>
                    <?php endif; ?>

                    </div>
                    <!-- EOF: #subfooter-left -->
                </div>
            </div>
        </div>
        <!-- EOF: #subfooter-inside -->
    
    </div>
</footer>
<!-- EOF:#subfooter -->