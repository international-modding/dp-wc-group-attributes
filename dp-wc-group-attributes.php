<?php
/*
* Plugin Name: dp wc group attributes
* Plugin URI: http://www.dp-ict.be/
* Description: dp-wc-group-attributes.
* Version:     0.1-alpha
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
* - lb: first initials of the plugin name
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
    // if true run the code
    function dpwcga_myFunction()
    {
        //do stuff
    }
    // create the attribute group
    function dpwcga_create_aGroup()
    {
        //do stuff
    }
} 
