<?php
/**
 * Template Name: Admin Alerts and Notices
 *
 * Displays various alerts and communications for plugin in the backend
 *
 * @package     handsometestimonials
 * @copyright   Copyright (c) 2014, Kevin Marshall
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 *
 */

/**
 * Display Pro Discount Offer Banner
 */
add_action('admin_notices', 'hndtst_admin_notice_pro_discount_offer');
function hndtst_admin_notice_pro_discount_offer()
{
    global $current_user;
    $user_id = $current_user->ID;
    $install_date = get_user_meta($user_id, 'hndtst_first_install_date', true);
    $discount_deadline = date('Y-m-d', strtotime($install_date . ' +3 day'));
    $current_screen = get_current_screen();
    $edit_testimonials = null;
    $admin_bar_pointer_on = get_user_setting( 'hndtst_email_pointer_display', 1 ); //Is email subscriber box showing up? If no, then display banner, if yes then don't

    if( $current_screen->parent_base == "edit" &&  $current_screen->post_type == "testimonial" && !$admin_bar_pointer_on && current_user_can( 'manage_options' )) {

        // Run some code, only on the admin widgets page
        $edit_testimonials = true;
    }

    if( $edit_testimonials == true  && strtotime($discount_deadline) > time() ) {
        ?>
            <div class="updated notice hndtst_pro_discount_offer">
                <div class='hndtst_discount_offer_logo'></div>
                <h2 class="title">Like Handsome Testimonials So Far? Upgrade to Pro and <span style='color: red;font-style: italic;'>Save 5%</span></h2>
                <p><a href="http://ristrettoapps.com/checkout?edd_action=add_to_cart&download_id=803&discount=HANDSOME5PRO" target="blank">Take your testimonials to the next level with Handsome Testimonials Pro & <span style='color: red;font-style: italic;'>Get 5% Off by <?php echo date('F jS', strtotime($discount_deadline)); ?></span></a></p
                <p style="font-size:12px;">Rotating Testimonials | Star Ratings | List All Testimonials | List/Rotate by Category | Testimonial Submission Form</p>
            </div>
        <?php
    } else if ($edit_testimonials == true) {
        ?>
            <div class="updated notice hndtst_pro_discount_offer">
                <div class='hndtst_discount_offer_logo'></div>
                <h2 class="title">Like Handsome Testimonials So Far? Upgrade to Pro!</h2>
                <p><a href="http://ristrettoapps.com/handsome-testimonials-pro/" target="blank">Take your testimonials to the next level with Handsome Testimonials Pro</a></p>
                <p style="font-size:12px;">Rotating Testimonials | Star Ratings | List All Testimonials | List/Rotate by Category | Testimonial Submission Form</p>
            </div>
        <?php
    }
}

/**
 * Ignore Discount offer
 */
add_action('admin_init', 'hndtst_nag_ignore_offer');
function hndtst_nag_ignore_offer()
{
    global $current_user;
    $user_id = $current_user->ID;

    if ( isset($_GET['hndtst_nag_ignore_offer']) && '0' == $_GET['hndtst_nag_ignore_offer'] )
    {
        add_user_meta($user_id, 'hndtst_ignore_offer', 'true', true);
    }
}

//Display request to view get started screen

add_action('admin_notices', 'htst_admin_notice_getstarted');

function htst_admin_notice_getstarted() {
    global $current_user ;
        $user_id = $current_user->ID;
        /* Check that the user hasn't already clicked to ignore the message */
    if ( ! get_user_meta($user_id, 'htst_ignore_notice') ) {
        echo '<div class="updated"><p>'; 
        printf(__('<a href="edit.php?post_type=testimonial&page=htst_getting_started">Get Started</a> with Handsome Testimonials <i>by Ristretto Apps</i>. <span style="float: right;"><i><a href="%1$s" class="dashicons dashicons-no-alt"></a></i></span>'), '?htst_nag_ignore_getstarted=0');
        echo "</p></div>";
    }
}

add_action('admin_init', 'htst_nag_ignore_getstarted');

function htst_nag_ignore_getstarted() {
    global $current_user;
        $user_id = $current_user->ID;
        /* If user clicks to ignore the notice, add that to their user meta */
        if ( isset($_GET['htst_nag_ignore_getstarted']) && '0' == $_GET['htst_nag_ignore_getstarted'] ) {
             add_user_meta($user_id, 'htst_ignore_notice', 'true', true);
    }
}

?>