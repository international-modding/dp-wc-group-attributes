<?php
/*
* Plugin Name: dp wc group attributes
* Plugin URI: http://www.dp-ict.be/
* Description: dp-wc-group-attributes.
* Version:     0.0.1
* Author:      Dirk Peeters
* Author URI:  ict-dirk.peeters@telenet.be
* License: GPL2
* License URI: http://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: dp-wc-group-attributes
*/

/*
* Prefix guide
* - wp: wordpress
* - wc: woocommerce
* - dp: first initials of the author or company
* - ga: first initials of the plugin name
* -- 16: option(year of build)
*
* example: wpdp_
* ours: dpwcga_ , dirk peeters woocommerce group attributes _
*/

/* Hint:
* Code your project well
* Learn to comment what your doing
* by adding comments you make your code better to understand by others or even yourself when re-developing it.
*/

/* Table of contents */

/*
    0. Security
      0.1 - protect it from being accessed directly
      0.2 - check if woocommerce is active
    1. Hooks
    2. SchortCodes
    3. Filters
    4. External Scripts
    5. Actions
    6. Helpers
    7. Custom Post Types
    8. Admin pages
    9. Settings
    */

/* 0. Security */
  // 0.1 - protect it from being accessed directly
      if ( ! defined( 'ABSPATH' ) ) { 
          exit; // Exit if accessed directly
        }
  
  // 0.2 - check if woocommerce is active
      if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
          $wcActive = true;
        }
/* 1. Hooks */

/* 2. SchortCodes */

/* 3. Filters */

/* 4. External Scripts */

/* 5. Actions */

/* 6. Helpers */

/* 7. Custom Post Types */

/* 8. Admin pages */

/* 9. Settings */

/* test stuff */

if ( $wcActive == true ) // our previous wc check
{ 
    // hint: registers all our custom shortcodes on init
    add_action('init', 'dpwcga_register_shortcodes');

    
    function dpwcga_register_shortcodes() {
	
	add_shortcode('dpga_form', 'dpwcga_form_shortcode');
	
    }
    
    function dpwcga_form_shortcode( $args, $content="")
    {
        // get the group id
        $dpwcga_ID = 0;
        if( isset($args['id']) ) $dpwcga_ID = (int)$args['id'];
        
        // setup our output variable - the form html 
	$output = '
	
		<div class="dpga">
		
			<form id="dpga_form" name="dpga_form" class="dpga-form" method="post"
			
			
				<input type="hidden" name="dpga_list" value="'. $dpwcga_ID .'">
			
				<p class="dpga-input-container">
				
					<label>Group Name</label><br/>
					<input type="text" name="dpga_gname" placeholder="Group Name" /><br/>
				
				</p>
				<p class="dpga-input-container">
				
					<label>Group Slug</label><br/>
					<input type="text" name="dpga_gslug" placeholder="Group Slug" /><br/>
				
				</p>';
				
				// including content in our form html if content is passed into the function
				if( strlen($content) ):
				
					$output .= '<div class="dpga-content">'. wpautop($content) .'</div>';
				
				endif;
				
				// completing our form html
				$output .= '<p class="dpga-input-container">
				
					<input type="submit" name="dpga_submit" value="Add Group" />
				
				</p>
			
			</form>
		
		</div>
	
	';
	
	// return our results/html
	return $output;
    }
    // if true run the code
    function dpwcga_create_aGroup()
    {
        //do stuff
    }
    // create the attribute group
    function dpwcga_remove_aGroup()
    {
        //do stuff
    }
} 
