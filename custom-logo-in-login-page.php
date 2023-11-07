<?php
/**
 * Plugin Name: Custom Logo in login page
 * Plugin URI: https://smnurulislam.com/plugin/custom-logo
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Sm Nurul islam
 * Author URI: https://smnurulislam.com/
 */
 
 /*   custom logo in login page */

 /* change logo to main website */
function wpb_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(https://smnurulislam.com/wp-content/uploads/2020/12/sm-nurul-islam-logo-1-e1608058727300.png);
        height:100px;
        width:300px;
        background-size: 300px 100px;
        background-repeat: no-repeat;
        padding-bottom: 10px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'wpb_login_logo' );

/* change url to main website */

function wpb_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'wpb_login_logo_url' );
 
function wpb_login_logo_url_title() {
    return 'Sm Nurul Islam and Learn Earn And transform';
}
add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );

