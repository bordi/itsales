<?php
/**
 * Displays the header section of the theme.
 *
 * @package Theme Horse
 * @subpackage Ambition
 * @since Ambition 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset');?>" />
	<?php
		/**
		 * ambition_title hook
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * ambition_add_meta_name 5
		 *
		 */
		do_action('ambition_title');
		/**
		 * ambition_meta hook
		 */
		do_action('ambition_meta');
		/**
		 * ambition_links hook
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * ambition_favicon 15
		 * ambition_webpage_icon 20
		 *
		 */
		do_action('ambition_links'); ?>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri();?>/js/html5.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		</head>
		<body <?php body_class(); ?>>
			<div id="page" class="hfeed site">
				<header id="masthead" class="site-header" role="banner">
					<?php
						/**
						 * ambition_header hook
						 *
						 * HOOKED_FUNCTION_NAME PRIORITY
						 *
						 * ambition_headercontent_details 10
						 */
						do_action('ambition_header');
					?>
<script type="text/javascript"> 
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;
i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
a=s.createElement(o),  m=s.getElementsByTagName(o)[0];
a.async=1;
a.src=g;
m.parentNode.insertBefore(a,m)  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-104674633-1', 'auto');
ga('send', 'pageview');</script>
<script type="text/javascript"> 
function catapult_close(clicked_id) {
            var close_X = document.getElementById('close_X');
            if (clicked_id == close_X) {
                var plug = document.getElementById('footer_plug');
                plug.setAttribute('style', 'display: none');


                var cal_to_action = document.getElementById('catapult-bar');
                cal_to_action.setAttribute('style', 'display:none');
                setTimeout(function () 
                           {
                    var cal_to_action = document.getElementById('catapult-bar');
                    cal_to_action.removeAttribute('style');
                    var cbh = getComputedStyle(document.getElementById('catapult-bar'));
                    //plug.setAttribute('style', 'display: block;height: ' + cbh.height + ';background-color:red;');
                }, 60000);
            }
        }
    function team_popup_close(clicked_id){
    var elem = clicked_id.getAttribute("name");
    console.log(elem);
    elem = document.getElementById(elem);
    elem.setAttribute('style','display: none;');    
}
function team_popup(clicked_id){
    var elem = clicked_id.getAttribute("name"); 
    elem = document.getElementById(elem);
    elem.setAttribute('style','display: block;');  
    console.log(clicked_id);
}   

</script>


				</header><!-- #masthead -->
				<div id="content">
						<?php
						if (!is_page_template('page-templates/page-template-business.php')) : ?>
							<div class="container clearfix">
						<?php endif; ?>
