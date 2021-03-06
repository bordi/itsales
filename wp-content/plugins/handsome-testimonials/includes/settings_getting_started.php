<?php

//Add Options Page
function htst_getstarted_page() {
    global $pagenow;
    ?>
    
    <div class="wrap">
        <h2><?php echo 'Settings</h2>'; ?>
        
        <?php
            // if ( 'true' == esc_attr( $_GET['updated'] ) ) echo '<div class="updated" ><p>Theme Settings updated.</p></div>';
            
            if ( isset ( $_GET['tab'] ) ) htst_getstarted_tabs($_GET['tab']); else htst_getstarted_tabs('getstarted');
        ?>

        <div id="poststuff">
                <?php
                
                if ( $pagenow == 'edit.php' && $_GET['page'] == 'htst_getting_started' ){ 
                
                    if ( isset ( $_GET['tab'] ) ) $tab = $_GET['tab']; 
                    else $tab = 'getstarted'; 
                    
                    echo '<table class="form-table">';
                    switch ( $tab ){
                        case 'getstarted' :
                            ?>
                            <h1>Thanks for trying out Handsome Testimonials by Ristretto Apps!</h1>

                            <p>As a way to say thanks, we'd like to offer you our <b>Tried & True Testimonial Request Template</b> for collecting testimonials from your clients as well as our <i>4 Day Email Course: Using Testimonials Effectively to Increase Sales.</i></p>
                            
                            <p>We've used this exact template to send to hundreds of our past clients for all of our companies and it's succeeded at encouraging the
                            majority of our clients to send us their testimonials.</p>

                            <p>Once you receive our Tried & True Testimonial Request Template as a downloadable PDF, just insert you or your company's name and email
                            it out to either your mailing list or any past clients.</p>

                            <h3>Great testimonials should start coming back.</h3>


                            <h4>Join Our Email List Below to Receive Our <u>Tried & True Testimonial Request Template</u> along with our <u>4 Day Email Course</u> on how to use testimonials <br />
                                to increase sales on your website!</h4>
                            <p>
                                <?php echo file_get_contents( TSTMT_PLUGIN_DIR. "/assets/settings-email-optin.txt" ); ?>
                            </p>
                            <?php
                        break; 
                         case 'general_settings' :
                             ?>
                                 <form method="post" action="options.php">
                                     <?php
                                     
                                         settings_fields("hndtst_group_settings");
                                         
                                         do_settings_sections("hndtst_section_settings_page");
                                     
                                         submit_button('Save'); 
                                         
                                     ?>          
                                 </form>                            
                             
                             <?php
                         break; 

                        case 'howtouse' : 
                                    ?>
                                    <h1>Displaying Testimonials</h1>
                                    <h2>How to Create & Insert Testimonials</h2>
                                    <a href="http://ristrettoapps.com/knowledgebase/creating-a-new-testimonial/" target="blank"><img src= "<?php echo TSTMT_PLUGIN_URL . '/assets/images/button_video-tutorial.png' ?>" align="right" /></a>

                                    <h4>The Easy Way</h4>
                                    <ol style="padding-left:20px">
                                        <li>Add a new testimonial by going to Dashboard->Testimonials->Add New</li>
                                        <li>Now go to the post or page you want to insert your testimonial on and click the <b>Insert Testimonial</b> button</li>
                                        <li>Customize your testimonial to your liking and click the Generate Shortcode</li>
                                    </ol>

                                    <h4>The Manual Way</h4>
                                    <ol style="padding-left:20px">
                                        <li>Add a new testimonial by going to Testimonials->Add New. Make note of the id by viewing Testimonials->All Testimonials</li>
                                        <li>Paste the following shortcode anywhere in a post or page with the appropriate id.</li>
                                        <li>Customize your testimonial to your liking using the below to your shortcode</li>
                                        <li><b>Example: [handsometestimonial id=""]</b></li>
                                    </ol>

                                    <h4>Shortcode Option Arguments</h4>
                                    <ul style="padding-left:30px">
                                        <li>id="" - Testimonial ID to display (note: if included, overrides list or rotate feature)</li>
                                        <li>rotate="" - <a href="http://ristrettoapps.com/handsome-testimonials-pro/" target="blank">PRO Only</a> - (yes/no) Rotate between all available testimonials or specified testimonial category (note: 'id' argument must be absent to work)</li>
                                        <li>list="" - <a href="http://ristrettoapps.com/handsome-testimonials-pro/" target="blank">PRO Only</a> - (yes/no) List all available testimonials or specified testimonial category (note: 'id' argument must be absent to work)</li>
                                        <li>category="" - <a href="http://ristrettoapps.com/handsome-testimonials-pro/" target="blank">PRO Only</a> - Testimonial Category ID to list or rotate between (doesn't affect single testimonials)</li>
                                        <li>single_random="" - (yes/no) Display a random testimonial (amongst all available) for each page load or reload</li>
                                        <li>template="" - Choose Template</li>
                                        <li>img_shadow="" - (yes/no) Testimonial image shadow</li>
                                        <li>img_round="" - (yes/no) Make Testimonial image round instead of square</li>
                                        <li>img_size="" - (px/%) - Size for testimonial image</li>
                                        <li>img_align="" - (left/center/right) - Set alignment for testimonial image</li>
                                        <li>img_loc="" - (before/after) - Set testimonial image before or after testimonial text</li>
                                        <li>title_color="" - - Color of title</li>
                                        <li>title_size="" - (px/em) - Font size of title</li>
                                        <li>tst_color="" - (hex) - Color of testimonial body text</li>
                                        <li>tst_size="" - (px/em) - Font size of body text</li>
                                        <li>txt_align="" - (left/center/right) - Set alignment of all text in testimonial block</li>
                                        <li>subtitle_color="" - (hex) - Color of subtitle text</li>
                                        <li>subtitle_size="" - (px/em) - Font size of subtitle text</li>
                                        <li>subtitle_italic="" - (yes/no) - Make subtitle italic</li>
                                        <li>border="" - Choose whether to have a boder around testimonial block</li>
                                        <li>border_width="" - (px/em) - Border width if border is enabled</li>
                                        <li>border_color="" - (hex) - Color of boder around testimonial block</li>
                                        <li>bg_color="" - (hex) - Color of background</li>
                                        <li>round_corners="" - (yes/no) - Round corners for testimonial block</li>
                                        <li>width="" - (px/%) - Width of testimonial block</li>
                                        <li>height="" - (px/%) - Height of testimonial block</li>
                                        <li>align="" - (left/center/right) - alignment of testimonial block</li>
                                        <li>star_ratings="" -  <a href="http://ristrettoapps.com/handsome-testimonials-pro/" target="blank">PRO Only</a> - (yes/no) - Display star ratings</li>
                                        <li>transition_interval="" - <a href="http://ristrettoapps.com/handsome-testimonials-pro/" target="blank">PRO Only</a> - (5) - Set the number of seconds between rotation of testimonials (Default: 5)</li>
                                        <li>random="" - <a href="http://ristrettoapps.com/handsome-testimonials-pro/" target="blank">PRO Only</a> - (yes/no) - Set rotating testimonials to rotate in random order vs. sequential</li>
                                        <li>text_limit="" - <a href="http://ristrettoapps.com/handsome-testimonials-pro/" target="blank">PRO Only</a> - (0) - Set the number of characters limit on testimonial's text (Default: none i-e 0)</li>
                                    </ul>

                                    <h2>Display Testimonials in Widgets</h2>
                                    <ol style="padding-left:20px">
                                        <li>Go to a post or page</li>
                                        <li>Click the <b>Insert Testimonial</b> button to bring up the testimonial customizer</li>
                                        <li>Customize your testimonial to your preferences</li>
                                        <li>Type a name that you'll remember in the box below the preview called 'Save Design' and press Save</li>
                                        <li>go to your Widgets area in your Wordpress admin area and drag the widget named <b>Handsome Testimonials by Ristretto Apps Widget</b> to your sidebar or footer</li>
                                     </ol>

                                    <h1>Testimonial Submission Form</h1>
                                    <a href="http://ristrettoapps.com/handsome-testimonials-pro/" target="blank">PRO Version Only</a>
                                    <ul style="padding-left:20px">
                                    <h2>How to Display a Testimonial Submission Form</h2>
                                        <li>Paste the following shortcode anywhere in a post or page with the appropriate id: [handsometestimonial_form]</li>
                                        <li>To further customize your testimonial to your liking adding the following shortcode arguments into the code:</li>
                                        
                                        <h3>Shortcode Options: Required Fields</h3>
                                        <li>require_image="" - (yes/no) Require testifier image (Default: no)</li>
                                        <li>require_position="" - (yes/no) Require testifier's position or title (Default: no)</li>
                                        <li>require_url="" - (yes/no) Require Website URL (Default: no)</li>
                                        <li>require_rating="" - (yes/no) Require star ratings (Default: no)</li>
                                        <li>hide_image="" - (yes/no) Hide image field (Default: no)</li>
                                        <li>hide_position="" - (yes/no) Hide title field (Default: no)</li>
                                        <li>hide_url="" - (yes/no) Hide Website URL field (Default: no)</li>
                                        <li>hide_rating="" - (yes/no) Hide star ratings field (Default: no)</li>

                                        <h3>Shortcode Options: Customizing Form Text</h3>
                                        <li>form_title="" - Change form title (default: Leave a Testimonial)</li>
                                        <li>testifier="" - Change placeholder (ghosttext) text for 'Name'</li>
                                        <li>position="" - Change placeholder (ghosttext) text for 'Title'</li>
                                        <li>url="" - Change placeholder (ghosttext) text for 'Website'</li>
                                        <li>rating="" - Change placeholder (ghosttext) text for 'Select Rating'</li>
                                        <li>short_test="" - Change placeholder (ghosttext) text for 'Testimonial'</li>
                                        <li>button_text="" - Change text for 'Submit Testimonial' button</li>
                                        <li>response_text="" - Change text for 'Thank you for your submission!' button</li>
                                   
                                        <p><b><li>Example: [handsometestimonial_form form_title="Send Us Feedback" hide_rating="yes"]</li></b></p>
                                    </ul>

                                            <?php
                        break; 
                        case 'faqs' : 
                            ?>

                            <h2>Can I use this in Sidebar Widgets?</h2>
                            Absolutely. Go to a post or page. Click the <b>Insert Testimonial</b> button which will bring up the testimonial customizer. Go ahead and customize your testimonial 
                            the way you want it and when finished, enter a name in the box below the preview called 'Save Design' and press Save. Then go to your Widgets area
                            in your Wordpress admin area and drag the widget named <b>Testimonials</b>


                            <h2>How do I change the displayed image size of the testimonial?</h2>
                            You can designate a specific pixel size or % by using the shortcode option: img_size="" For example: [handsometestimonial id="5" img_size="50px"]
                        
                            <h2>Can I add more than one testimonial per row?</h2>
                            Yes, but for the moment, only 2 testimonials per row are supported. You'll need to insert 2 shortcodes, one after another, then reduce 
                            the width of each testimonial to a bit less than half of the width of the content area. 
                            <br />(For instance, for 2 testimonials in one row, set width to 45% each)
                            <br />Next, you'll set Testimonial Alignment for each testimonial in the row to the appropriate position. <br />(For instance, set one to left and the other to right)

                            <h2>What if there's something about how my testimonial is displayed that I want to change?</h2>
                            Perhaps you want to make the text of your testimonial italic or bold or you want to change the
                            margins of your testimonial. Simply find the specific css id tag of the testimonial on your page you wish to make changes to and add these css changes to your theme's custom css file. 
                            The easiest way to find the specific css id selector for the testimonial you want to change is by using the "developer" function of your browser or a browser extension such as <a href="http://getfirebug.com" target="blank">Firebug</a>.

                            <h2>I inserted an image into the testimonial, but it looks skewed and distorted</h2>
                            This is usually because the image you uploaded is too wide or too high, meaning the proportions are less square and more rectangular. It's difficult for the plugin to correct such extreme proportions as square images work best. Please either crop the image to make it more square and also try reducing the size of the image in general if your image is too large (this helps with faster page loads)

                            <?php
                        break; 
                        case 'knowledgebase' : 
                            ?>

                            <h2>Recent Support Articles</h2>
                            <a href="http://ristrettoapps.com/contact/" target="blank"><img src= "<?php echo TSTMT_PLUGIN_URL . '/assets/images/button_contact-us.png' ?>" align="right" /></a>
                                    <?php
                            $rss = new DOMDocument();
                            $rss->load('http://ristrettoapps.com/feed/?post_type=knowledgebase');
                            $feed = array();
                            foreach ($rss->getElementsByTagName('item') as $node) {
                                $item = array ( 
                                    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                                    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                                    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                                    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                                    );
                                array_push($feed, $item);
                            }
                            $limit = 10;
                            for($x=0;$x<$limit;$x++) {
                                $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
                                $link = $feed[$x]['link'];
                                $description = $feed[$x]['desc'];
                                $date = date('l F d, Y', strtotime($feed[$x]['date']));
                                echo '<p><strong><a href="'.$link.'" title="'.$title.'" target="blank">'.$title.'</a></strong><br />';
                                echo '<small><em>Posted on '.$date.'</em></small></p>';
                                echo '<p>'.$description.'</p>';
                            }
                                ?>
                            <p><i><h2><a href="http://ristrettoapps.com/knowledgebase_category/handsome-testimonials/" target="blank">View All Support Articles</a></h2></i></p>

                            <?php
                    }
                    echo '</table>';
                }
                ?>      
        
        </div>

    </div>
    <?php

}

add_action('admin_menu', 'htst_add_getstarted_link');

//Add Getting Started Menu Link
function htst_add_getstarted_link() {
    // Design submenu
    add_submenu_page('edit.php?post_type=testimonial', 'Design', 'Design', 'manage_options', 'htst_design', 'htst_design_page_func');

    // Settings submenu
    add_submenu_page( 'edit.php?post_type=testimonial', 'Settings', 'Settings', 'manage_options', 'htst_getting_started', 'htst_getstarted_page' );
}

/* Design submenu page */
function htst_design_page_func(){
 ?>
    <div id="htst-design-page">
    <?php
    hndtst_popup_content(true); // True : we are on the Designe page
    ?>
    </div>
    <?php
}
//Register Settings
function htst_register_settings() {

    register_setting('handsometestimonials_settings_group', 'handsometestimonials_settings');
}
add_action('admin_init', 'htst_register_settings');

function htst_getstarted_tabs( $current = 'getstarted' ) {
    $tabs = array(
                'getstarted' => 'Get More Testionials',
                'general_settings'=> 'General Settings',
                'howtouse' => 'How To Use',
                'faqs' => 'FAQs',
                'knowledgebase' => 'Support'
            );
    $links = array();
    echo '<div id="icon-themes" class="icon32"><br></div>';
    echo '<h2 class="nav-tab-wrapper">';
    foreach( $tabs as $tab => $name ){
        $class = ( $tab == $current ) ? ' nav-tab-active' : '';
        echo "<a class='nav-tab$class' href='edit.php?post_type=testimonial&page=htst_getting_started&tab=$tab'>$name</a>";
        
    }
    echo '</h2>';
}

//Setup General Settings Page
function hndtst_general_settings_tab() {

    //Define Sections
    add_settings_section(
        'hndtst_section_settings_id',               // The ID 
        'General settings',                         // The title of the section 
        'hndtst_section_general_settings_display',  // The function used to render
        'hndtst_section_settings_page'              // The ID of the page on which this section is rendered
    );

    //Fields

    //Call Custom CSS Box
    add_settings_field(
        'custom_css',                               //id,
        'Custom CSS',                               //title,
        'hndtst_field_custom_css_display',          //callback,
        'hndtst_section_settings_page',             //page,
        'hndtst_section_settings_id'                //section
    ); 

    register_setting(
        'hndtst_group_settings',
        'hndtst_settings'
    );
}
add_action( 'admin_init', 'hndtst_general_settings_tab'); 

function hndtst_section_general_settings_display(){
    //stuff to show on the begining of this section here ...
}

//Add Custom CSS Box
function hndtst_field_custom_css_display(){
    $settings=get_option('hndtst_settings');
    ?>
    <textarea   id="css_txt_area_id"
                rows="10"           
                name="hndtst_settings[custom_css]"
                placeholder="Insert you testimonial custom CSS code here ..."
                style="width:50%; min-width:350px;"
    ><?php echo $settings['custom_css']; ?></textarea>
    <?php
}
?>
