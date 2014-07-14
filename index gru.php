<?php
require_once('functions2.php');

?>
<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
    <!--<![endif]-->
    <head>
        <meta name="generator"
              content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
        <title>Georgia Regents University - Title</title>
        <meta charset="utf-8" /><?php include($_SERVER['DOCUMENT_ROOT'] . '/cssjs.php'); ?>
        <style type="text/css">
            html { overflow-x:hidden; padding: 0 !important; margin:0px !important; }
            .fullwidthbanner-container{ width:100% !important; position:relative; padding:0; max-height:700px !important; overflow:hidden; }
            .header-titles h2 a {color: fff;}
            .header-titles h2 a:hover {color: ccc;}
        </style>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css" href="jquery.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="javascript/owl.carousel.min.css">
		<link rel="stylesheet" href="javascript/owl.theme.default.min.css">
		<script src="javascript/owl.carousel.min.js"></script>
		<script>
			$(document).ready(function() {
				$('.owl-carousel').owlCarousel({
					autoWidth : true,
					nav : false,
					dots : false
				})

				//$(document).ready(function() {
					
					//$(".carousel_item").each(function(i, obj){
						//window.prompt(obj.css('width'));
						//obj.css('width', 150);
					//});
					
				//});

			});
		</script>
    </head>
    <body class="">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/slidingpanel.php'); ?>
        <div id="page_wrapper">
            <header id="header" class="style2">
                <div class="container">
                    <!-- logo -->
                    <h1 id="logo">
                        <a href="http://www.gru.edu/">
                            <img src="http://www.gru.edu/images/logo.png" alt="Georgia Regents University" />
                        </a>
                    </h1>
                    <!-- end topnav // left aligned -->
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/search.php'); ?>
                    <nav id="main_menu">
                        <ul class="sf-menu clearfix">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/mainmenu.php'); ?>
                        </ul>
                    </nav>
                    <!-- end main_menu -->
                </div>
            </header><div id="page_header" class="gradient bottom-shadow" style="min-height:150px; height:150px;">
                <div class="bgback bg3" style="background-image:url('images/bookbanner.jpg');
                     background-position:50% 0; background-repeat:no-repeat no-repeat;"></div>
                <div class="container" style="padding:70px 0 0;">
                    <div class="row">
                        <div class="span12">
                            <div class="header-titles">
                                <a href="index.php"><h2>Audiobooks</h2></a>
                            </div>
                        </div>	

                    </div><!-- end row -->
                </div>

                <div class="shadowUP"></div>
            </div>
            <section id="content">
                <div class="container">
                    <div class="mainbody">
                        <div class="row" style="margin-bottom:0; padding:20px 0; background:url('http://www.gru.edu/images/pagebg.png') repeat-x top transparent">

                            <div class="span3">
                                <?php require_once('leftnav.php'); ?>
                            </div>
                            <div class="span9" style="margin-left: 5; margin-right: 5;">
                                <div style="clear: both;"></div>
                                <fieldset>
                                    <legend><a href='childrenslist.php'>Children's</a></legend>
                                </fieldset>
                                <?php
                                    titleCarousel("Children");
                                 ?>
                                <br />
                                <fieldset>
                                    <legend><a href='adultlist.php'>Students and Adults</a></legend>
                                </fieldset>
                                <?php
                                    authorCarousel("Students and Adults");
                                ?> 
                                <br />
                                <filedset>
                                    <legend><a href='southerlist.php'>Southern Literature</a></legend>
                                </filedset>
                                <?php
                                    authorCarousel("Southern Literature");
                                ?>
                                
                                <div id="target"></div>
                            </div><!-- end span -->


                            <div class="span3">
                                <?php require_once('rightnav.php'); ?>

                            </div>

                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <!-- end mainbody -->
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
            </section>
        </div>
        <!-- end page_wrapper -->
        <a href="#" id="totop">TOP</a> 
        <!--////////////////// Load JS Files -->

        <!-- Carousels (by CarouFredSel) -->
        <script src="http://www.gru.edu/js/jquery.carouFredSel.js" type="text/javascript"></script>
        <script type="text/javascript" language="javascript">
            ;
            (function($) {

                $(window).load(function() {

                    // ** recent works
                    $('#recent_works2').carouFredSel({
                        responsive: true,
                        scroll: 1,
                        auto: false,
                        items: {
                            width: 270,
                            visible: {
                                min: 1,
                                max: 10
                            }
                        },
                        prev: {
                            button: ".recentwork_carousel .prev",
                            key: "left"
                        },
                        next: {
                            button: ".recentwork_carousel .next",
                            key: "right"
                        }
                    });
                    // *** end recent works carousel



                });

            })(jQuery);
        </script>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/footerjs.php'); ?>
        <!-- JavaScript at the bottom for fast page loading -->

        <div class="hide">
            <div id="transparent_panel" class="transparent_content">
                <p>Alert Panel for Emergency Use</p>
            </div>
        </div>
        <script src="flowplayer-3.2.12.min.js"></script>
        <script src="audiobooks.js"></script>
        <!-- end transparent panel --></body>
</html>

